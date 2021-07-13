@extends('posts.main_layout')
@section('body_section')
  <div class="content-wrapper">
<div class="container">

   <div class="box">
            <div class="box-header">
              <h3 class="box-title">Message Table</h3>
             
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>SL</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Phone</th>
                   <th>Message</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  @foreach($contacts as $key=> $contact)
                  <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$contact->name}}</td>
                    <td>{{$contact->email}}</td>
                    <td>{{$contact->phone}}</td>
                    <td>{{$contact->message}}</td>
                   
                  
                    <td width="150">
                      <form action="{{route('contactdestroy',$contact->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                      
                         <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
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