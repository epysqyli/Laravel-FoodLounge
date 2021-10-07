<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function categories() {
        $categories = Category::all();
        return response()->json(compact('categories'));
    }

    public function category($id) {
        $data = Category::find($id)->users;
        return response()->json($data);
    }
}
