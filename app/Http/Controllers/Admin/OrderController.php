<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Order;
use App\User;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{

    public function index(Order $order)
    {
        $orders = User::where('id', Auth::user()->id)->first()->orders()->paginate(10);
        return view('admin.orders.index', compact('orders'));
    }

    public function show(Order $order)
    {
        return view('admin.orders.show', compact('order'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }


    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }

    public function displayStats()
    {
        $latestMonth = Auth::user()->orders->first()->created_at->month;
        $ordersCount = [];
        $monthlyRevenue = [];
        $months = [$latestMonth - 2, $latestMonth - 1, $latestMonth];

        for ($i = 0; $i < 3; $i++) {
            $orders = User::where('id', Auth::user()->id)->first()->orders()->whereMonth('created_at', $latestMonth - $i)->get();
            array_unshift($ordersCount, count($orders));

            $monthlyAmount = 0;
            foreach ($orders as $order) {
                $monthlyAmount += $order->amount;
            }

            array_unshift($monthlyRevenue, $monthlyAmount);
        }

        return view('admin.orders.statistics', compact("ordersCount", "monthlyRevenue", "months"));
    }
}
