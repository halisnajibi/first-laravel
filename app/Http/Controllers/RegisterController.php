<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
class RegisterController extends Controller
{
   public function index()
   {
    return view('auth.register');
   }

   public function store(Request $request)
   {
   $validateData = $request->validate([
        'name' => 'required|max:255',
        'username' => 'required|min:3|unique:users',
        'email' => 'required|email:dns|unique:users|',
        'password' => 'required|min:3'
    ]);
    // $validateData['password'] = \bcrypt($validateData['password']);
    $validateData['password'] = Hash::make($validateData['password']);
    User::create($validateData);
    return \redirect('/login')->with('register', 'Berhasil register');
   }
}
