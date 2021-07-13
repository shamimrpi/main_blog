<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
class ProfileController extends Controller
{
	public function index(){
		$this->data['contacts'] = Contact::all();
		return view('users.profile',$this->data);
	}
    
}
