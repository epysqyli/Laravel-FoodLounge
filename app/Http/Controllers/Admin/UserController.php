<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use App\User;
Use App\Category;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function edit(User $user)
    {
        $categories = Category::all();
        return view('admin.users.edit', compact('user','categories'));
    }
}
