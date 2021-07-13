@extends('web.main')
@section('content')
  <main id="main">



    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container">

        <div class="row">

          <div class="col-lg-8 entries">

            <article class="entry entry-single">

              <div class="entry-img">
                <img src="{{asset('images/'.$post->image)}}" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="">{{$post->title}}</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="#">{{optional($post->user)->name}}</a></li>
                  <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">{{$post->created_at->format('d-D/m/Y')}}</time></a></li>
                  <li class="d-flex align-items-center"><i class="icofont-comment"></i> <a href="blog-single.html">{{$post->comments->count()}} Comments</a></li>

                   <li class="d-flex align-items-center"><i class="icofont-comment"></i> <a href="{{route('category',$post->id)}}">{{optional($post->category)->name}} Cateogry</a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p>
                  {{$post->description}}
                </p>

                
              </div>

              <div class="entry-footer clearfix">
                <div class="float-left">
                  <i class="icofont-folder"></i>
                  <ul class="cats">
                    <li><a href="#">Business</a></li>
                  </ul>

                  <i class="icofont-tags"></i>
                  <ul class="tags">
                    <li><a href="#">Creative</a></li>
                    <li><a href="#">Tips</a></li>
                    <li><a href="#">Marketing</a></li>
                  </ul>
                </div>

                <div class="float-right share">
                  <a href="" title="Share on Twitter"><i class="icofont-twitter"></i></a>
                  <a href="" title="Share on Facebook"><i class="icofont-facebook"></i></a>
                  <a href="" title="Share on Instagram"><i class="icofont-instagram"></i></a>
                </div>

              </div>
              <div>
                <h5 class="card-header">Comments 
            <span class="comment-count btn btn-sm btn-outline-info">{{ count($post->comments) }}</span>
            <small class="float-right">
                <span title="Likes" id="saveLikeDislike" data-type="like" data-post="{{ $post->id}}" class="mr-2 btn btn-sm btn-outline-primary d-inline font-weight-bold">
                    Like
                    <span class="like-count">{{ $post->likes() }}</span>
                </span>
                <span title="Dislikes" id="saveLikeDislike" data-type="dislike" data-post="{{ $post->id}}" class="mr-2 btn btn-sm btn-outline-danger d-inline font-weight-bold">
                    Dislike
                    <span class="dislike-count">{{ $post->dislikes() }}</span>
                </span>
            </small>
            </h5>
              </div>



            </article><!-- End blog entry -->

            <div class="blog-author clearfix">
              <img src="assets/img/blog-author.jpg" class="rounded-circle float-left" alt="">
              <h4>Recent Post</h4>
              
              <p>
            
              {{--   @foreach($related as $relate) --}}
                <p >
          {{--       @endforeach --}}
              </p>
            </div><!-- End blog author bio -->

            <div class="blog-comments">
             
               <div class="form-row">
             
            </div>
            
             

              @include('web.comment')

            </div><!-- End blog comments -->

          </div><!-- End blog entries list -->

         @include('web.single_sidebar')

        </div>

      </div>
    </section><!-- End Blog Section -->

  </main><!-- End #main -->
@endsection
<script type="text/javascript">
  // Save Like Or Dislike
$(document).on('click','#saveLikeDislike',function(){
    var _post=$(this).data('post');
    var _type=$(this).data('type');
    var vm=$(this);
    // Run Ajax
    $.ajax({
        url:"{{ url('save-likedislike') }}",
        type:"post",
        dataType:'json',
        data:{
            post:_post,
            type:_type,
            _token:"{{ csrf_token() }}"
        },
        beforeSend:function(){
            vm.addClass('disabled');
        },
        success:function(res){
            if(res.bool==true){
                vm.removeClass('disabled').addClass('active');
                vm.removeAttr('id');
                var _prevCount=$("."+_type+"-count").text();
                _prevCount++;
                $("."+_type+"-count").text(_prevCount);
            }
        }   
    });
});
// End
</script>
 