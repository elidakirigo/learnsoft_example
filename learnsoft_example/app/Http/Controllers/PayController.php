<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mpesa;

class PayController extends Controller
{
   public function stk(){
        $mpesa= new \Safaricom\Mpesa\Mpesa();
        $BusinessShortCode='174379';
        $LipaNaMpesaPasskey='bfb279f9aa9bdbcf158e97dd71a467cd2e0c893059b10f78e6b72ada1ed2c919';
        $TransactionType='CustomerPaybillOnline';
        $Amount='1';
        $PartyA='600990';
        $PartyB='600000';
        $PhoneNumber='2547020467320';
        $CallBackURL='http://localhost:8000/mpesa/cofirmation/';
        $AccountReference='AccountReference';
        $TransactionDesc='TransactionDesc';
        $Remarks='Remarks';

$stkPushSimulation=$mpesa->STKPushSimulation($BusinessShortCode, $LipaNaMpesaPasskey, $TransactionType, $Amount, $PartyA, $PartyB, $PhoneNumber, $CallBackURL, $AccountReference, $TransactionDesc, $Remarks);

dd($stkPushSimulation);
   }
}