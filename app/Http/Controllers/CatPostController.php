<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;

class CatPostController extends Controller
{
   /* public function show($category)
    {
    	/*$posts = $category->posts()->get();*/
    /*	$categories = Category::with('posts')->get();
    	return view('web.catpost',compact('categories'));
    }*/

    public function show($category_id)
	{
	   $category = Category::findOrFail($category_id);

	    if($category){
	      $this->data['menu'] = 'blog';
	       $this->data['posts'] = Post::where('category_id',$category_id)->get();
	       $this->data['posts'] = $category->posts()->latest()->paginate(6);


	        return view('web.catpost', $this->data);
	    }

	    return view('errors.404');
	}
}
