<?php

namespace App\Http\Controllers;

use Iankumu\Mpesa\Facades\Mpesa;//import the Facade
use Illuminate\Http\Request;

class MPESAC2BController extends Controller
{

    public function registerURLS(Request $request)
    {
        $shortcode = $request->input('shortcode');
        $response = Mpesa::c2bregisterURLS($shortcode);

        /** @var \Illuminate\Http\Client\Response $response */
        $result = $response->json();

        return $result;
    }
}