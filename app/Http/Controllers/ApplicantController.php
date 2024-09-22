<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Applicant;
use Illuminate\Support\Facades\Log;

class ApplicantController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'country' => 'required',
            'number' => 'required',
            'email' => 'required|email',
            'age' => 'required|in:under_18,over_18',
            'expiriance' => 'required|integer|min:1|max:10',
            'interests' => 'required'
        ]);

        Applicant::create($request->all());

        return response()->json(['message' => 'Application is created successfully.']);
    }
}
