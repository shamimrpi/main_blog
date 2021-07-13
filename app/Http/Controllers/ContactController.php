<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\AdminContact;
class ContactController extends Controller
{
	public function index(){
		$this->data['menu'] = 'contact';
		$this->data['acontacts'] = AdminContact::all();
		return view('web.contact',$this->data);
	}
	public function saveContact(Request $request) { 

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'phone' => 'required',
            'message' => 'required'
        ]);

        $contact = new Contact;

        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->phone = $request->phone;
        $contact->message = $request->message;

        $contact->save();
        
        return back()->with('success', 'Thank you for contact us!');

    }

    
}
