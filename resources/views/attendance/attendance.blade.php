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
              <h3 class="box-title">Users Attendance</h3>
              
            </div>
            <!-- /.box-header -->
            <div class="box-body">
               <div class="col-md-9">
          <div class="box box-primary">
            <div class="box-body no-padding">
              <!-- THE CALENDAR -->
              <div id="calendar"></div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /. box -->
        </div>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
      </div>
@stop