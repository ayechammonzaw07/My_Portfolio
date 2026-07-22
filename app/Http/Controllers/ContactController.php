<?php

namespace App\Http\Controllers;

/*
|--------------------------------------------------------------------------
| ContactController
|--------------------------------------------------------------------------
| Handles the contact form POST request. Validates incoming data,
| stores the message in the database, and redirects back with
| a success flash message. Follows Laravel best practices
| for form handling and validation.
*/

use Illuminate\Http\Request;
use App\Models\ContactMessage;

class ContactController extends Controller
{
    /**
     * Store a new contact form submission in the database.
     * Validates all required fields before saving to prevent
     * invalid data from being stored.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        // Validate the incoming form data
        $validated = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:5000',
        ]);

        // Save the validated contact message to the database
        ContactMessage::create($validated);

        // Redirect back to the contact page with a success message
        return redirect()->route('contact')
            ->with('success', 'Thank you for your message! I will get back to you soon.');
    }
}
