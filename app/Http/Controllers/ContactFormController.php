<?php

namespace App\Http\Controllers;

use App\Mail\InquiryMail;
use App\Models\Inquiry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    //

    public function make_contact(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'subject' => 'required|string',
            'message' => 'required|string',

        ]);

        $inquiry = new Inquiry();
        $inquiry->name = $request->name;
        $inquiry->email = $request->email;
        $inquiry->phone = $request->phone;
        $inquiry->subject = $request->subject;
        $inquiry->message = $request->message;
        $inquiry->save();

        // Prepare the email data
        $mailData = [
            'title' => 'New Inquiry Received',
            'name' => $inquiry->name,
            'email' => $inquiry->email,
            'phone' => $inquiry->phone,
            'subject' => $inquiry->subject,
            'message' => $inquiry->message,
        ];

        // Send email to company email
        $companyEmail = 'zeltekgroup@gmail.com';
        Mail::to($companyEmail)->send(new InquiryMail($mailData));


        return response()->json([
            'success' => 'Message Sent.'
        ]);
    }
}
