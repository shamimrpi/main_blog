@extends('posts.main_layout')
@section('body_section')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <br>
  <div class="container">
  	
      <div class="row">
        <div class="col-md-12">
        	<form action="{{route('category.store')}}" method="post">
					@csrf
        	

        		<div class="form-group">
        			<input type="text" name="name" placeholder="Enter category" class="form-control">
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