<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function token(){
        $consumerKey='gvfUxL4Bujlo6CB2nTyW97jHspJWo3OGlutrGDAb0jeapHTl';
        $consumerSecret='gEqyGeM0Z1wD3WEXDeVW9pDv7kzZf8PQkRe3muGZT8OH3HXwlyhIOJjec1UMKGDD';
        $url='https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials';

        $response=Http::withBasicAuth($consumerKey,$consumerSecret)->get($url);

        return $response;

    }
}