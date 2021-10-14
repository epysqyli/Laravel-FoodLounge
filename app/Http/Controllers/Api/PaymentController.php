<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Order;
use App\Mail\GuestMail;
use App\Mail\UserMail;
use Illuminate\Support\Facades\Mail;
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

        $order = new Order();

        $order->user_id = $request->user_id;
        $order->amount = $request->amount;
        $order->customer_name = $request->customer_name;
        $order->customer_surname = $request->customer_surname;
        $order->customer_address = $request->customer_address;
        $order->customer_email = $request->customer_email;
        $order->phone_number = $request->phone_number;
        $order->transaction_id = $res->transaction->id;
        $order->transaction_status = $res->transaction->status;

        $order->save();

        $foodData = [];
        $l = count($request->foods);
        
        for ($i = 0; $i < $l; $i++) {
            if ($i % 2 == 0) {
                $foodData[$request->foods[$i]] = $request->foods[$i + 1];
            }
        }

        foreach ($foodData as $id => $qty) {
            $order->foods()->attach([$id => ['food_units' => $qty]]);
        }

        // send emails here with Mail::to('email@account.com')->send(new GuestMail || UserMail)
        
        return redirect('http://localhost:8000/payment-result');
    }
}
