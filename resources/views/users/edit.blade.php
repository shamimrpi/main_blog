@extends('posts.main_layout')
@section('body_section')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <br>
  <div class="container">
  	
      <div class="row">
        <div class="col-md-12">
        	<form action="{{route('users.update',$user->id)}}" method="post" enctype="multipart/form-data">
					@csrf
        	@method('put')

        		<div class="form-group">
        			<input type="text" name="name" value="{{$user->name}}" class="form-control">
        		</div>

            <div class="form-group">
              <input type="text" name="email" value="{{$user->email}}" class="form-control">
            </div>

            <div class="form-group">
              <input type="password" name="password"  class="form-control">
            </div>
            
        		
        		<div class="form-group">
        			<input type="file" name="image" placeholder="Enter Title" class="form-control">
        		</div>
        	
         

         <button type="submit" class="btn btn-primary">Submit</button>
          </form>
          <!-- /.box -->

       
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->

		</div>

    </div>
@stop