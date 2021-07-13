@extends('web.main')
@section('content')

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="breadcrumb-hero">
        <div class="container">
          <div class="breadcrumb-hero">
            <h2>Blog</h2>
            <p>Est dolorum ut non facere possimus quibusdam eligendi voluptatem. Quia id aut similique quia voluptas sit quaerat debitis. Rerum omnis ipsam aperiam consequatur laboriosam nemo harum praesentium. </p>
          </div>
        </div>
      </div>
      <div class="container">
        <ol>
          <li><a href="{{route('blog')}}">Home</a></li>
          
        </ol>
      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container">

        <div class="row">
         @foreach($posts as $post)
          <div class="col-lg-4  col-md-6 d-flex align-items-stretch" data-aos="fade-up">
            <article class="entry">

              <div class="entry-img">
                <img src="{{asset('images/'.$post->image)}}" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href=""></a>
              
              </h2>{{$post->title}}
              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="blog-single.html">{{optional($post->user)->name}}</a></li>
                  <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href=""><time datetime="2020-01-01">{{$post->created_at->format('d-D/m/Y')}}</time></a></li>
                </ul>
              </div>
              
              <div class="entry-content">
                <p>
                  {{$post->excerpt()}}
                </p>
                <div class="read-more">
                  <a href="{{route('single',$post->id)}}">Read More</a>
                </div>
              </div>

            </article><!-- End blog entry -->
          </div>
     
          @endforeach

        </div>
       {{ $posts->links() }}
      

      </div>
    </section><!-- End Blog Section -->

  </main><!-- End #main -->

@endsection