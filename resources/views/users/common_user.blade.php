@extends('posts.main_layout')
@section('body_section')
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        User Profile
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">User profile</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              
              <img src="{{asset('images/'.$user->image)}}" class="profile-user-img img-responsive img-circle" alt="User profile picture">
              <h3 class="profile-username text-center">{{$user->name}}</h3>

              <p class="text-muted text-center">Software Engineer</p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Followers</b> <a class="pull-right">1,322</a>
                </li>
                <li class="list-group-item">
                  <b>Following</b> <a class="pull-right">543</a>
                </li>
                <li class="list-group-item">
                  <b>Friends</b> <a class="pull-right">13,287</a>
                </li>
              </ul>

              <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- About Me Box -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">About Me</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <strong><i class="fa fa-book margin-r-5"></i> Education</strong>

              <p class="text-muted">
               {{$user->about}}
              </p>

              <hr>

              <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>

              <p class="text-muted">Malibu, California</p>

              <hr>

              <strong><i class="fa fa-pencil margin-r-5"></i> Skills</strong>

              <p>
                <span class="label label-danger">UI Design</span>
                <span class="label label-success">Coding</span>
                <span class="label label-info">Javascript</span>
                <span class="label label-warning">PHP</span>
                <span class="label label-primary">Node.js</span>
              </p>

              <hr>

              <strong><i class="fa fa-file-text-o margin-r-5"></i> Notes</strong>

              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab">Activity</a></li>
              <li><a href="#timeline" data-toggle="tab">Timeline</a></li>
              <li><a href="#settings" data-toggle="tab">Settings</a></li>
            </ul>
            <div class="tab-content">
          <div class="active tab-pane" id="activity">
                <!-- Post -->
               
     <form action="{{route('l_store',$user->id)}}" method="post">
          @csrf
     <div class="row">
       <div class="col-md-6">
         <div class="form-group">
               <select class="form-control" name="user_id">
                @foreach($all_users as $auser)
                <option value="{{$auser->id}}">{{$auser->name}}</option>
                @endforeach
              </select>
            </div>
              <div class="form-group">
              <input type="date" name="fromDate" placeholder="Enter From Date" class="form-control">
            </div>

          
       </div>
       <div class="col-md-6">
         
            <div class="form-group">
              <input type="text" name="type" placeholder="Leave Type" class="form-control">
            </div>

             <div class="form-group">
              <input type="date" name="toDate" placeholder="Enter To Date" class="form-control">
            </div>
            <div>
       </div>
     </div>
    </div> 
          

           


           

             <div class="form-group">
              <input type="text" name="reason" placeholder="Enter Reason" class="form-control">
            </div>
          
          
            <div class="form-group">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
         
          </form>
          <!-- /.box -->

      
      <!-- ./row -->

    </div>
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
                  @foreach($user->leaves as $key=> $leave)
                 
                  <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$leave->type}}</td>
                    <td>{{$leave->fromDate}}</td>
                    <td>{{$leave->toDate}}</td>
                    <td>{{$leave->reason}}</td>
                    <td> @if($leave->status == 0) Pending @else Approved @endif</td>
                   
                      <td>{{$leave->created_by}}</td>
                   
                  
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

           
           
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>
@stop