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
              <a class="btn btn-info text-right" href="{{route('category.create')}}">New Category</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>SL</th>
                  <th>Category</th>
                 
                
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  @foreach($categories as $key=> $category)
                  <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$category->name}}</td>
                    
                   
                  
                    <td width="150">
                    
                      
                      <form action="{{url('admin/category/'.$category->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <a href="{{route('category.edit',$category->id)}}" class="btn btn-info"><i class="fa fa-edit"></i></a>
                         <button class="btn btn-danger" onclick="return confirm('Ary Your sure delete this')"><i class="fa fa-trash"></i></button>
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