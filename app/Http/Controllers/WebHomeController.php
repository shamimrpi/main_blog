<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hero;
use App\Counter;
use App\Service;
use App\Post;
use App\User;
use App\Category;
use App\Contact;
use Illuminate\Support\Facades\Auth;
class WebHomeController extends Controller
{
	public function index(){
		$this->data['contacts'] = Contact::all();
		$this->data['menu'] = 'home';
		$this->data['heroes'] = Hero::all();
		$this->data['counters'] = Counter::all();
		$this->data['services'] = Service::all();
		$this->data['categories'] = Category::all();
    	$this->data['posts'] =Post::paginate(6);
		 return view('web.webhome',$this->data);
	}

   
}
