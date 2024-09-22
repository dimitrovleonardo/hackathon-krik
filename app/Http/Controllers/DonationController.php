<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donation;

class DonationController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'donor_name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone_number' => 'required|string',
            'card_holder_name' => 'required|string',
            'amount' => 'required|numeric|min:1',
        ]);

        Donation::create([
            'donor_name' => $request->input('donor_name'),
            'email' => $request->input('email'),
            'phone_number' => $request->input('phone_number'),
            'card_holder_name' => $request->input('card_holder_name'),
            'amount' => $request->input('amount'),
        ]);

        return redirect()->route('donation')->with('success', 'Thank you for your donation!');
    }
}
