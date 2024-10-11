<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Carbon\Carbon; 
use App\Models\Transaction;

class PaymentController extends Controller
{
    public function token(){
        $consumerKey = 'giv5UaFWPIKILI1BkHXEOVFONfthoQldVBcOto2T3OcgeKMF';
        $consumerSecret = '4jKkpLL6OV4XSwD4XejopCANUojMPsabJeGXRDRw0ndB6qf4cnmLLHaoKedmO8sR';
        $url = 'https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials';
    
        // Make a POST request with Basic Auth
        $response = Http::withBasicAuth($consumerKey, $consumerSecret)->get($url);
        return $response['access_token'];
    }

    public function initiateStkPush(Request $request) {
        $accessToken = $this->token(); 
        $url = 'https://sandbox.safaricom.co.ke/mpesa/stkpush/v1/processrequest';
        $passkey = 'bfb279f9aa9bdbcf158e97dd71a467cd2e0c893059b10f78e6b72ada1ed2c919';
        $BusinessShortCode = 174379;
        $Timestamp = Carbon::now()->format('YmdHis'); 
        $password = base64_encode($BusinessShortCode.$passkey.$Timestamp);
        $TransactionType = 'CustomerPayBillOnline';
    
        // Use data from the form
        $Amount = $request->input('amount');
        $PartyA = $request->input('phone'); // Customer's phone number
        $AccountReference = $request->input('account_number');
        $TransactionDesc = 'Payment for goods';
        
        $CallbackUrl = 'https://www.e-skuli.co.ke/payments'; // Define your callback URL here
    
        // Make the request to Safaricom
        $response = Http::withToken($accessToken)->post($url, [
            'BusinessShortCode' => $BusinessShortCode,
            'Password' => $password,
            'Timestamp' => $Timestamp,
            'TransactionType' => $TransactionType,
            'Amount' => $Amount,
            'PartyA' => $PartyA,
            'PartyB' => $BusinessShortCode,
            'PhoneNumber' => $PartyA,
            'CallBackURL' => $CallbackUrl,
            'AccountReference' => $AccountReference,
            'TransactionDesc' => $TransactionDesc,
        ]);
    
        // Check if the response was successful
        if ($response->json()['ResponseCode'] == "0") {
            // Save transaction to the database
            Transaction::create([
                'phone' => $PartyA,
                'account_number' => $AccountReference,
                'amount' => $Amount,
            ]);
    
            return redirect()->back()->with('success', 'Payment initiated successfully');
        } else {
            return redirect()->back()->with('error', 'Failed to initiate payment');
        }
    }
    
}
