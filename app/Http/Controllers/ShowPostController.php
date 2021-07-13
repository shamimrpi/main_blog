<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
use App\Contact;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class ShowPostController extends Controller
{
    public function show(){
    	$this->data['contacts'] = Contact::all();
    	$this->data['posts'] = DB::table('posts')->paginate(6);
    	$this->data['user_id'] = Auth::id();
        return view('posts.userpost',$this->data);
    }
}
