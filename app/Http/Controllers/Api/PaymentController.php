<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function getToken()
    {
        $gateway = config('braintree');
        $token = $gateway->clientToken()->generate();
        return response()->json(compact('token'));
    }
}
