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
        return view('admin.foods.show', compact('food'));
    }

    public function create()
    {
        $types = Auth::user()->types;
        return view('admin.foods.create', compact('types'));
    }

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
        $types = Auth::user()->types;
        return view('admin.foods.edit', compact('food', 'types'));
    }

    public function update(Request $request, Food $food)
    {
        $request->validate([
            'type_id' => 'required',
            'name' => 'required|max:255',
            'price' => 'required',
            'description' => 'required',
            'ingredients' => 'required',
            'visible' => 'required',
            'image' => 'nullable|image',

        ]);
        $validatedData = $request->all();

        if (array_key_exists('image', $validatedData)) {
            $validatedData['image'] = Storage::put('uploads', $validatedData['image']);;
        }

        $food->update($validatedData);

        return redirect()->route('admin.foods.index')->with('updated', 'Update Element:' . ' ' . $food->id);
    }

    public function destroy(Food $food)
    {
        Storage::delete($food->image);

        $food->delete();
        return redirect()->route('admin.foods.index')->with('delete', 'Delete Element' . ' '  . $food->id);
    }
    public function addToCart($id)
    {
        $product = Product::find($id);
 
        if(!$product) {
 
            abort(404);
 
        }
 
        $cart = session()->get('cart');
 
        // if cart is empty then this the first product
        if(!$cart) {
 
            $cart = [
                    $id => [
                        "name" => $product->name,
                        "quantity" => 1,
                        "price" => $product->price,
                        "photo" => $product->photo
                    ]
            ];
 
            session()->put('cart', $cart);
 
            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }
 
        // if cart not empty then check if this product exist then increment quantity
        if(isset($cart[$id])) {
 
            $cart[$id]['quantity']++;
 
            session()->put('cart', $cart);
 
            return redirect()->back()->with('success', 'Product added to cart successfully!');
 
        }
 
        // if item not exist in cart then add to cart with quantity = 1
        $cart[$id] = [
            "name" => $product->name,
            "quantity" => 1,
            "price" => $product->price,
            "photo" => $product->photo
        ];
 
        session()->put('cart', $cart);
 
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }
}
