<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $emptyOrders = empty(Auth::user()->orders->all());
        return view("admin.home", compact('emptyOrders'));
    }
}
