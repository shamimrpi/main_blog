@extends('posts.main_layout')
@section('body_section')
  <div class="content-wrapper">
<div class="container">
   @if(session('message'))
    
                    <div class="alert alert-info" role="alert">
                    {{session('message')}}
                    </div>
                        
                    @endif
   <div class="box">
            <div class="box-header">
              <h3 class="box-title">Users table</h3>
              <a class="btn btn-info text-right" href="{{route('leave.create')}}"> Leave Create</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>SL</th>
                  <th>User ID</th>
                  <th>Leave Type</th>
                  <th>From Date</th>
                  <th>To Date</th>
                  <th>Reason</th>
            
                  <th>Status</th>
                  <th>Created By</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  @foreach($leaves as $key=> $leave)
                 
                  <tr>
                    <td>{{$key+1}}</td>
                    <td>{{optional($leave->user)->name}}</td>
                    <td>{{$leave->type}}</td>
                    <td>{{$leave->fromDate}}</td>
                    <td>{{$leave->toDate}}</td>
                    <td>{{$leave->reason}}</td>
                    <td> @if($leave->status == 0) Pending @else Approved @endif</td>
                   
                      <td>{{ optional($leave->created_by)->name}}</td>
                   
                  
                    <td width="150">
                      <form action="{{route('leave.destroy',$leave->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <a href="{{route('leave.show',$leave->id)}}" class="btn btn-primary"><i class="fa fa-eye"></i></a>
                      <a href="{{route('leave.edit',$leave->id)}}" class="btn btn-info"><i class="fa fa-edit"></i></a>
                         @if($leave->status == 1)
                         <button class="btn btn-danger disable"><i class="fa fa-trash"></i></button>
                         @else
                         <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                         @endif
                      </form>
                      
                     
                    </td>
                  </tr>

                  @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>Rendering engine</th>
                  <th>Browser</th>
                  
                  <th>Engine version</th>
                  <th>CSS grade</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
      </div>
@stop