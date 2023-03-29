<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function show()
    {
        return view('home.contact');
    }

    public function sendEmail(Request $request)
    {
        // validate the form data

        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);


        // send email using Laravel's built-in Mail class

        Mail::to('bradleyt.evans@gmail.com')->send(new Mail($validatedData));

        // redirect back with a sucess message

        return back()->with('success', 'Thank you for contacted Sawdust Traditions! Talk to you soon!');
    }
}
