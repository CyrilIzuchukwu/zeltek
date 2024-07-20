<?php

namespace App\Http\Controllers;

use App\Models\ContactInformation;
use Illuminate\Http\Request;

class ContactInformationController extends Controller
{
    //
    public function contact_information()
    {
        return view('contact_information.index');
    }

    public function store_contact_information(Request $request)
    {
        $request->validate([
            'location' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'linkedln' => 'nullable',
            'instagram' => 'nullable',
            'facebook' => 'nullable',
            'twitter' => 'nullable',
            'youtube' => 'nullable',
        ]);


        $contact = ContactInformation::firstOrNew();
        $contact->location = $request->location;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->linkedln = $request->linkedln;
        $contact->instagram = $request->instagram;
        $contact->facebook = $request->facebook;
        $contact->twitter = $request->twitter;
        $contact->youtube = $request->youtube;
        $contact->save();

        return redirect()->back()->with('success', 'Contact information saved successfully.');
    }
}
