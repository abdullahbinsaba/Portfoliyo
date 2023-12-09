<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function sendEmail(Request $request)
    {
        // Validate the form data
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        // Send email
        $to = 'sabaabdullah416@gmail.com'; // Replace with your email address
        $subject = $request->input('subject');
        $message = "Name: " . $request->input('name') . "\n";
        $message .= "Email: " . $request->input('email') . "\n";
        $message .= "Subject: " . $subject . "\n\n";
        $message .= "Message:\n" . $request->input('message');

        Mail::raw($message, function ($mail) use ($to, $subject) {
            $mail->to($to)->subject($subject);
        });

        // Optionally, you can flash a success message or redirect back to the form
        return redirect()->back()->with('success', 'Your message has been sent. Thank you!');
    }
}