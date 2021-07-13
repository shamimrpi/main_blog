 <div class="col-lg-4">

            <div class="sidebar">

              <h3 class="sidebar-title">Search</h3>
              <div class="sidebar-item search-form">
                <form action="">
                  <input type="text">
                  <button type="submit"><i class="icofont-search"></i></button>
                </form>

              </div><!-- End sidebar search formn-->

              <h3 class="sidebar-title">Categories</h3>
              <div class="sidebar-item categories">
                <ul>
                  

                  @foreach($categories as $category)
                  <li><a href="{{route('category',$category->id)}}">{{$category->name}} <span>({{$category->posts->count()}})</span></a></li>
                  @endforeach
                  
                </ul>

              </div><!-- End sidebar categories-->

              <h3 class="sidebar-title">Recent Posts</h3>
              <div class="sidebar-item recent-posts">
                @foreach($recents as $recent)
                <div class="post-item clearfix">
                  <img src="{{asset('images/'.$recent->image)}}" alt="">
                  <h4><a href="{{url('/single',$recent->id)}}">{{$recent->title}}</a></h4>
                  <time datetime="2020-01-01">{{$recent->created_at->format('M d, Y')}}</time>
                </div>
                @endforeach

                

              </div><!-- End sidebar recent posts-->

            

            </div><!-- End sidebar -->

          </div><!-- End blog sidebar -->