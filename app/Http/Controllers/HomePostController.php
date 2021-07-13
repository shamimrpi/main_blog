<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\DB;
use App\Category;
use App\User;

use App\LikeDislike;

class HomePostController extends Controller
{
    public function index(){
    	
    	/*$this->data['posts'] = DB::table('posts')->paginate(1);*/
        $this->data['menu'] = 'blog';
    	$this->data['categories'] = Category::all();
    	$this->data['posts'] =Post::paginate(3);
    	return view('web.index',$this->data);
    }
    public function show($id){

        $this->data['related'] = Post::with('categories', 'categories.posts')->find(42);

      

         $categories=Category::all();
         $this->data['user'] = User::find($id);
       
    	$this->data['categories'] = Category::all();
        /*$this->data['related']    = Post::where('category_id', '=', $post->category->id)
            ->where('id', '!=', $post->id)
            ->get();*/
        $this->data['recents'] =Post::orderBy('created_at', 'desc')->take(5)->get();
    	$this->data['post'] = Post::find($id);
        $this->data['menu'] = 'blog';
    	return view('web.single',$this->data);
    }
    // Save Like O r dislike
    function save_likedislike(Request $request){
        $data   =new LikeDislike;
        $data->post_id=$request->post;
        if($request->type == 'like'){
            $data->like=1;
        }else{
            $data->dislike=1;
        }
        $data->save();
        return response()->json([
            'bool'=>true
        ]);
    }
 

}
