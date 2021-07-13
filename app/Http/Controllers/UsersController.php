<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Leave;
use App\Contact;
class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->data['contacts'] = Contact::all();
        $this->data['users'] = User::all();
        return view('users.users',$this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->data['contacts'] = Contact::all();
        return view('users.create',$this->data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newImageName = time().'-'.$request->name. '.' . $request->image->extension();

        $test = $request->image->move(public_path('images'),$newImageName);

        $user = new User;
        $emplyee = User::all();
        $numRow = count($emplyee)+1;
        if($numRow <10)
        {
            $emplyeeId = date('Y')."00".$numRow;
        }
        elseif ($numRow >=10 && $numRow <=99) {
            $emplyeeId = date('Y')."0".$numRow;
        }
        elseif ( $numRow <=100){
            $emplyeeId = date('Y').$numRow;
        }

        $user->employee_id = $emplyeeId;
        $password = $request->input('password');
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($password);
        $user->image = $newImageName;
         $user->save();
       

    /*    $password = Hash::make($request->input('password'));
        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => $password,
            'image' => $newImageName
        ]);*/
        if($user == true)
        {
            Session::flash('message','$emplyeeId User Created Successfully');
        }
        return back();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    $this->data['contacts'] = Contact::all();
        $this->data['leaves'] = Leave::all();
        $this->data['user'] = User::find($id);
        $this->data['all_users'] = User::all();
        return view('users.common_user',$this->data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->data['contacts'] = Contact::all();
        $this->data['user'] = User::find($id);
        return view('users.edit',$this->data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
   
        $newImageName = time().'-'.$request->name. '.' . $request->image->extension();

        $test = $request->image->move(public_path('images'),$newImageName);

        $data = $request->all();
        $user                = User::find($id);
        $user->name          = $data['name'];
        $user->email         = $data['email'];
        $user->password      = Hash::make($data['password']);
        $user->image         = $newImageName;
        $user->save();

        if($user->save())
        {
            
            Session::flash('message','User Update Successfully');


        }
        return redirect()->to('admin/users');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $news = User::findOrFail($id);
        $image_path = app_path("images/{$user->image}");

       
            if(User::find($id)->delete()){
                 if (File::exists($image_path)) {
                //File::delete($image_path);
                unlink($image_path);
            }
        }
    }
}
