<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Food;
use App\Type;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class FoodController extends Controller
{
    public function index()
    {
        $foods = Auth::user()->foods;
        return view('admin.foods.index', compact('foods'));
    }

    public function show(Food $food)
    {
        // $food = $food->with('type')->where('type_id', $food->type_id)->first();
        return view('admin.foods.show', compact('food'));
    }

    public function create(Food $food)
    {
        $types = Type::all();
        return view('admin.foods.create', compact('types', 'food'));
    }

    // update for radio or check buttons ('visible')
    // update image upload
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'required',
            'type_id' => 'required',
            'name' => 'required|max:255',
            'price' => 'required',
            'description' => 'required',
            'ingredients' => 'required',
            'visible' => 'required',
            'image' => 'nullable|image',
        ]);

        $validatedData = $request->all();

        $food = new Food();

        if (!array_key_exists('visible', $validatedData)) {
            $food->visible = 0;
        }

        if (array_key_exists('image', $validatedData)) {
            $validatedData['image'] = Storage::put('uploads', $validatedData['image']);;
        }

        $food->fill($validatedData);
        $food->save();

        return redirect()->route('admin.foods.index');
    }

    public function edit(Food $food)
    {
        $types = Type::all();
        return view('admin.foods.edit', compact('food', 'types'));
    }

    public function update(Request $request, Food $food)
    {
        $request->validate([
            'name' => 'requires|max:255',
            'description' => 'required'
        ]);
        return redirect()->route('admin.foods.index')->with('updated', 'Update Element:' . ' ' . $food->id);
    }

    public function destroy(Food $food)
    {
        $food->delete();
        $food->tags()->detach();
        return redirect()->route('admin.foods.index')->with('delete', 'Delete Element' . ' '  . $food->id);
    }
}
