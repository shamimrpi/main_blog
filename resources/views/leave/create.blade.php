@extends('posts.main_layout')
@section('body_section')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <br>
  <div class="container">
  	
      <div class="row">
        <div class="col-md-12">
        	<form action="{{route('leave.store')}}" method="post">
					@csrf
        	

        		<div class="form-group">
        			<input type="text" name="user_id" placeholder="Enter User Id" class="form-control">
        		</div>
            <div class="form-group">
              <input type="text" name="type" placeholder="Leave Type" class="form-control">
            </div>

            <div class="form-group">
              <input type="date" name="fromDate" placeholder="Enter From Date" class="form-control">
            </div>

            <div class="form-group">
              <input type="date" name="toDate" placeholder="Enter To Date" class="form-control">
            </div>
            <div>
        		  <input type="text" name="reason" placeholder="Enter Reason" class="form-control">
            </div>
        	
          
            <div class="form-group">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
         
          </form>
          <!-- /.box -->

       
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->

		</div>

    </div>
@stop