<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mpesa;

class MpesaController extends Controller
{
    public function stk(){
        $mpesa= new \Safaricom\Mpesa\Mpesa();
        $BusinessShortCode='174379';
        $LipaNaMpesaPasskey='';
        $TransactionType='CustomerPaybillOnline';
        $Amount='1';
        $PartyA='254720467320';
        $PartyB='174379';
        $PhoneNumber='254720467320';
        $CallBackURL='';
        $AccountReference='AccountReference';
        $TransactionDesc='TransactionDesc';
        $Remarks='Remarks';

        $stkPushSimulation=$mpesa->STKPushSimulation($BusinessShortCode, $LipaNaMpesaPasskey, $TransactionType, $Amount, $PartyA, $PartyB, $PhoneNumber, $CallBackURL, $AccountReference, $TransactionDesc, $Remarks);

        dd($stkPushSimulation);
    }
}