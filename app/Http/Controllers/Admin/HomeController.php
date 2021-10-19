<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class HomeController extends Controller
{
    public function index(User $user)
    {
        $emptyOrders = empty($user->orders->all());
        return view("admin.home", compact('user', 'emptyOrders'));
    }
}
