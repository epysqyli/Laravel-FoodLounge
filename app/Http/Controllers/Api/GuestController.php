<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;
use App\User;

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
            $query->where('visible', '1');
        }])->first();
        return response()->json($data);
    }
}
