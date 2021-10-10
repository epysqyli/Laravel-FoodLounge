<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Category;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function edit(User $user)
    {
        $categories = Category::all();
        return view('admin.users.edit', compact('user', 'categories'));
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,' . $user->id],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'address' => ['required', 'string', 'min:5'],
            'description' => ['required'],
            'vat' => ['required', 'size:11', 'unique:users,vat,' . $user->id],
            'profile_image' => ['nullable'],
            'cover_image' => ['nullable']
        ]);

        $validatedData = $request->all();

        if (array_key_exists('profile_image', $validatedData)) {
            $validatedData['profile_image'] = Storage::put('uploads', $validatedData['profile_image']);
        }

        if (array_key_exists('cover_image', $validatedData)) {
            $validatedData['cover_image'] = Storage::put('uploads', $validatedData['cover_image']);
        }

        $oldUserName = $user->name;

        $user->update($validatedData);

        if ($user->name != $oldUserName) {
            $slug = Str::slug($validatedData['name']);
            $user->slug = makeUniqueSlug($slug);
        }

        $user->save();

        return redirect()->route('admin.home');
    }
}
