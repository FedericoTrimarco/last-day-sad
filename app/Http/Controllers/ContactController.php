<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\Mail\ContactMessage;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index() {
        return view('contact');
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required|string|max:50',
            'email' => 'required|email|max:50',
            'message' => 'required|string'
        ]);

        $data = $request->all();

        $new_contact = new Contact();

        // $new_contact->name = $data['name'];

        $new_contact->fill($data);

        $new_contact->save();

        Mail::to('federico@test.com')->send(new ContactMessage($data));

        return redirect()->route('thank-you');


    }
}
