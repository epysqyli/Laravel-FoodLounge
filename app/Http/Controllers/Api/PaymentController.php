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
            'customer' => [
                'firstName' => $request->customer_name,
                'lastName' => $request->customer_surname,
                'email' => $request->customer_email,
                'phone' => $request->phone_number,
            ],
            'billing' => [
                'streetAddress' => $request->customer_address,
            ],
            'paymentMethodNonce' => $request->payment_method_nonce,
            'options' => [
                'submitForSettlement' => True
            ]
        ]);

        // save order into the DB

        return response()->json(compact('res'));
        // return redirect('http://localhost:8000/payment-result');
    }
}
