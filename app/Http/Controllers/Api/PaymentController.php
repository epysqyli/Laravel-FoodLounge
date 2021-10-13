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

    public function checkPayment(Request $request)
    {
        $gateway = config('braintree');
        $res = $gateway->transaction()->sale([
            'amount' => $request->amount,
            'merchantAccountId' => 'randomId1234',
            'paymentMethodNonce' => $request->payment_method_nonce,
            'options' => [
                'submitForSettlement' => True
            ]
        ]);
        return response()->json(compact('res'));
    }
}
