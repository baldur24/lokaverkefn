<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
{
    public function contactview()
    {
        return view('contact');
    }

    public function contactsent(Request $request)
    {
    	

        $this->validate($request, [
            'body' => 'required',
        ]);


        Contact::create([
            'body' => $request->body,
            'user_id' => auth()->id()
        ]);

        return redirect('/contact');
    }
}
