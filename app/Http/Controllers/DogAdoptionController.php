<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DogAdoption;
use Illuminate\Support\Facades\Auth;

class DogAdoptionController extends Controller
{
    // Submit adoption request
    public function submit(Request $request)
    {
        $request->validate([
            'dogName' => 'required|string',
            'fullName' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'message' => 'required|string',
        ]);

        DogAdoption::create([
            'dog_name' => $request->dogName,
            'user_name' => $request->fullName,
            'email' => $request->email,
            'phone' => $request->phone,
            'reason' => $request->message,
            'user_id' => Auth::id(),
            'status' => 'Pending', 
        ]);

        return redirect()->back()->with('success', 'Your adoption request has been submitted!');
    }

    // Show My Adoptions
    public function myAdoptions()
    {
        $adoptions = DogAdoption::where('user_id', Auth::id())->latest()->get();
        return view('user-dashboard.my-adoptions', compact('adoptions'));
    }
}