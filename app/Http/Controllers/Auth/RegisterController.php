<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use App\Category;

class RegisterController extends Controller
{
    use RegistersUsers;

    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest');
    }

    public function showRegistrationForm()
    {
        $categories = Category::all();
        return view('auth.register', compact('categories'));
    }

    public function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'address' => ['required', 'string', 'min:5'],
            'description' => ['required'],
            'category' => ['required'],
            'vat' => ['required', 'size:11'],
            'profile_image' => ['required'],
            'cover_image' => ['required'],
        ]);
    }

    public function create(array $data)
    {
        $slug = Str::slug($data['name']);

        $user = new User();

        $user->name = $data['name'];
        $user->slug = makeUniqueSlug($slug);
        $user->email = $data['email'];
        $user->password = Hash::make($data['password']);
        $user->address = $data['address'];
        $user->description = $data['description'];
        $user->vat = $data['vat'];
        $user->profile_image = Storage::put('uploads', $data['profile_image']);
        $user->cover_image = Storage::put('uploads', $data['cover_image']);

        $user->save();

        $user->category()->attach($data['category']);

        return $user;
    }
}
