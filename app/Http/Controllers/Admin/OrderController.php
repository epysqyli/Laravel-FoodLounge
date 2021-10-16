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
}
