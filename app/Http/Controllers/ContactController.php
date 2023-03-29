<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class ContactController extends Controller
{
    public function show()
    {
        return view('home.contact');
    }

    public function sendEmail(Request $request)
    {
        // validation
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);
        // sending email with laravels Mail class
        Mail::to('bradleyt.evans@gmail.com')->send(new ContactFormMail($validatedData));

        // redirecting back to contact page with message
        return redirect('/contact')->with('success', 'Thank you for contacted Sawdust Traditions! Talk to you soon!');
    }
}
