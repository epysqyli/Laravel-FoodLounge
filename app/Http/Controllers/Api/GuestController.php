<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;
use App\User;
use App\Food;
use App\Order;
class GuestController extends Controller
{
    public function categories()
    {
        $categories = Category::all();
        return response()->json(compact('categories'));
    }

    public function category($slug)
    {
        $category = Category::where('slug', $slug)->first();
        $data = $category->users;
        return response()->json($data);
    }

    public function restaurant($slug)
    {
        $data = User::where('slug', $slug)->with(['foods' => function ($query) {
            $query->where('visible', '1')->with(['type']);
        }])->first();
        return response()->json($data);
    }

    public function checkout(Food $food)
    {
        $foods = Food::all();
        return response()->json(compact('foods'));
    }

    public function getOrder($customer_email) {
        $order = Order::where('customer_email', $customer_email)->orderBy('id', 'DESC')->first();
        return response()->json($order);
    }
}
