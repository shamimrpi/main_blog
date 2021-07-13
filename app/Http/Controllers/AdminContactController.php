<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use Illuminate\Support\Facades\Session;
class adminContactController extends Controller
{
    public function index(){
    	$this->data['contacts'] = Contact::all();
    	return view('contact.contact',$this->data);
    }
    public function destroy($id){
        if(Contact::find($id)->delete()){
            Session::flash('message', 'Message Deleted Successfully');
        }
        return redirect()->to('admin/message');
    }
    
    public function update($id){
        
    }
}
