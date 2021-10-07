<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;
use App\User;

class GuestController extends Controller
{
    public function categories() {
        $categories = Category::all();
        return response()->json(compact('categories'));
    }

    public function category($id) {
        $data = Category::find($id)->users;
        return response()->json($data);
    }

    public function restaurant($id) {
        $data = User::find($id);
        return response()->json($data);
    }
}
