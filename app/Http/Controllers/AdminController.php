<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class AdminController extends Controller
{
    public function index()
    {
    return view('admin.index');
    }
    public function store()
    {
        $attributes = request()->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);


        if (!auth()->attempt($attributes)) {
            throw ValidationException::withMessages(['email' => 'Your provided credentials could not be verified']);
        }

        session()->regenerate();

        return redirect('/')->with('success', 'Welcome Back!');
    }
}
