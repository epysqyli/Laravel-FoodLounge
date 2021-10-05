<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Food;
use App\Type;

class FoodController extends Controller
{
    public function index()
    {
        $foods = Food::all();
        return view('admin.foods.index', compact('foods'));
    }

    public function show(Food $food)
    {
        $food = Food::find($food->id)->with('type')->first();
        return view('admin.foods.show', compact('food'));
    }

    public function create(Food $foods)
    {
        $types = Type::all();
        return view('admin.foods.create', compact('foods', 'types'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'description' => 'required'
        ]);
        return redirect()->route('admin.foods.index');
    }


    public function edit(Food $foods)
    {
        $types = Type::all();

        return view('admin.foods.edit', compact('foods', 'types'));
    }

    public function update(Request $request, Food $food)
    {
        $request->validate([
            'name' => 'requires|max:255',
            'description' => 'required'
        ]);
        return redirect()->route('admin.foods.index')->with('updated', 'Update Element:' . ' ' . $food->id);
    }

    // public function destroy(Food $foods)
    // {
    //     $food->delete();
    //     $food->tags()->detach();
    //     return redirect()->route('admin.foods.index')->with('delete', 'Delete Element'. ' '  . $food->id);
    // }
}
