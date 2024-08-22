<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function sendContactForm(Request $request)
{
    // Validate the form data
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'message' => 'required|string|max:2000',
    ]);

    // Send the email
    Mail::send('emails.contact', [
        'name' => $validated['name'],
        'email' => $validated['email'],
        'message' => $validated['message'],
    ], function ($mail) {
        $mail->to('smkithuci@gmail.com')
             ->subject('Contact Form Submission');
    });

    // Redirect back with a success message
    return back()->with('success', 'Thank you for your message! We will get back to you soon.');
}
}
