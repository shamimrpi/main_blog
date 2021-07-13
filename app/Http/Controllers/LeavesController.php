<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Leave;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
class LeavesController extends Controller
{
    public function store(Request $request,$id){
         $request->all();
        $leave = new Leave();
        $leave->user_id    = $request->input('user_id');
        $leave->type       = $request->input('type');
        $leave->fromDate   = $request->input('fromDate');
        $leave->toDate     = $request->input('toDate');
        $leave->reason     = $request->input('reason');
        $leave->status     = 0;
        $leave->created_by = Auth::id();
        $leave->save();
        if($leave->save()){
            Session::flash('message','Leave created successfully');
        }
        return back();
    }
}
