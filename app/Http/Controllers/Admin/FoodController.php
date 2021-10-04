<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Food;
use App\User;
use App\Type;
use App\Order;

class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Just 4 Foods through link() method on index.blade.php
        // $foods = Food::paginate(4);

        // All pages
        $foods = Food::all();
        return view('admin.foods.index', compact('food'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Food $food)
    {
        $types = Type::all();
        return view('admin.foods.create', compact('food','types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validation Data
            $request->validate([
                'name'=> 'required|max:255',
                'description'=> 'required'
            ]);
            return redirect()->route('admin.foods.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Food $food)
    {
        return view('admin.foods.show', compact('food'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Food $food)
    {
        $types = Type::all();
        
         return view('admin.foods.edit', compact('food', 'types'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Food $food)
    {
        $request->validate([
            'name'=>'requires|max:255',
            'description'=>'required' 
        ]);
        return redirect()->route('admin.foods.index')->with('updated', 'Update Element:'.' '. $food->id); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Food $food)
    {
        $food->delete();
        $food->tags()->detach();
        return redirect()->route('admin.foods.index')->with('delete', 'Delete Element'. ' '  . $food->id);
    }
}
