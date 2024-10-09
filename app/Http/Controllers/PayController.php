<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mpesa;

class PayController extends Controller
{
   public function stk(){
  $mpesa= new \Safaricom\Mpesa\Mpesa();
$BusinessShortCode, $LipaNaMpesaPasskey, $TransactionType, $Amount, $PartyA, $PartyB, $PhoneNumber, $CallBackURL, $AccountReference, $TransactionDesc, $Remarks
$stkPushSimulation=$mpesa->STKPushSimulation($BusinessShortCode, $LipaNaMpesaPasskey, $TransactionType, $Amount, $PartyA, $PartyB, $PhoneNumber, $CallBackURL, $AccountReference, $TransactionDesc, $Remarks);
   }
}