<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;
use Illuminate\Support\Facades\Auth;

class AccountOpenController extends Controller
{
    public function create()
    {
        return view('open-account'); // Return the form to open a new account
    }

    public function store(Request $request)
{
    // Validate the request data
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users',
        'phone' => 'required|string|max:15',
        'account_type' => 'required',
        'password' => 'required|string|min:8|confirmed',
        'bvn' => 'required|string|min:11|max:11',
        'identity_card' => 'required',
        'identity_number' => 'required|string',
    ]);

    // Generate a unique account number (customize as necessary)
    $accountNumber = 'TIZO' . mt_rand(1000000000, 9999999999);

    // Create the new account
    Account::create([
        'user_id' => Auth::id(), // Get the authenticated user
        'account_number' => $accountNumber,
        'account_type' => $request->account_type,
        'balance' => 0.00, // Initial balance
    ]);

    // Redirect with success message
    return redirect()->route('home')->with('success', 'Account created successfully!');
}
}
