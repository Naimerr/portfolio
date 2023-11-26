<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


public function submitContact(Request $request)
{
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'message' => 'required|string',
    ]);

    // Process and handle the form submission (send email, save to database, etc.)

    return redirect()->back()->with('success', 'Message sent successfully!');
}
