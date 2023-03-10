<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function sendEmail(Request $request)
    {
        $details = [
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message
        ];

        try {
            Mail::to('zaedaralba11202@gmail.com')->send(new \App\Mail\SendMail($details));
            return back()->with('message_sent', 'Your message has been sent successfully!');
            return back()->with('message_info', 'Your message has been sent successfully!');
        } catch (\Exception $e) {
            return back()->with('message_failed', 'Failed to send email. Please try again later.');
        }
    }
}
