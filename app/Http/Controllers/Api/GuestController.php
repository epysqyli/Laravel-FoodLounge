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

    public function category($slug) {
        $data = Category::where('slug', $slug)->first();
        return response()->json($data);
    }

    public function restaurant($slug) {
        $data = User::where('slug', $slug)->first();
        return response()->json($data);
    }
}
