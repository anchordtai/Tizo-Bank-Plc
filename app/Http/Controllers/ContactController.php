<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:2000',
        ]);

        // Handle the contact form submission (e.g., send an email)
        Mail::send([], [], function ($message) use ($request) {
            $message->to('support@tizobank.com')
                    ->subject('Contact Form Submission')
                    ->setBody('Name: '.$request->name.'<br>Email: '.$request->email.'<br>Message: '.$request->message, 'text/html');
        });

        return redirect()->route('contact')->with('success', 'Your message has been sent successfully!');
    }
}
