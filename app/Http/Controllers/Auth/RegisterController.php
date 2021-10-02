<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    use RegistersUsers;

    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'address' => ['required', 'string', 'min:10'],
            'description' => ['required'],
            'vat' => ['required', 'size:11'],
            'profile_image' => ['required'],
            'cover_image' => ['required'],
        ]);
    }

    protected function create(array $data)
    {
        $slug = Str::slug($data['name']);

        return User::create([
            'name' => $data['name'],
            'slug' => makeUniqueSlug($slug),
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'address' => $data['address'],
            'description' => $data['description'],
            'vat' => $data['vat'],
            'profile_image' => $data['profile_image'],
            'cover_image' => $data['cover_image'],
        ]);
    }
}
