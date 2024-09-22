<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\paypalDonation;

class paypalDonationController extends Controller
{
    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'amount' => 'nullable|numeric|min:1',
            'custom_amount' => 'nullable|numeric|min:1',
            'payment_method' => 'required|string', // Ensure Card or PayPal is selected
        ]);

        // Determine the donation amount, prioritizing custom amount if provided
        $amount = $request->input('custom_amount') ?: $request->input('amount');

        // Save the donation data to the database
        paypalDonation::create([
            'amount' => $amount,
            'payment_method' => $request->input('payment_method'), // Store the payment method
        ]);

        // Redirect back with a success message
        return back()->with('success', 'Thank you for your donation!');
    }
}
