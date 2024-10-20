<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;  // Import the Validator facade

class SubscriptionController extends Controller
{
    public function store(Request $request)
    {
        // Validate email input
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:subscriptions,email',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        // Save the email in the database (optional)
        \DB::table('subscriptions')->insert([
            'email' => $request->email,
            'created_at' => now(),
        ]);

        // Send a confirmation message
        return redirect()->back()->with('success', 'Thank you for subscribing to our news!');
    }
}
