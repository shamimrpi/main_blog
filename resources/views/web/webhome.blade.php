 @extends('web.main')
@section('content')

 <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container" data-aos="fade-up">
      @foreach($heroes as $hero)
      <h1>{{$hero->heading_one}}</h1>
      <h2>{{$hero->heading_two}}</h2>
      <a href="#about" class="btn-get-started scrollto">Get Started</a>
      @endforeach
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row justify-content-end">
          <div class="col-lg-11">
            @foreach($counters as $counter)
            <div class="row justify-content-end">

              <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                <div class="count-box py-5">
                  <i class="icofont-simple-smile"></i>
                  <span data-toggle="counter-up">{{$counter->client}}</span>
                  <p>Happy Clients</p>
                </div>
              </div>

              <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                <div class="count-box py-5">
                  <i class="icofont-document-folder"></i>
                  <span data-toggle="counter-up">{{$counter->project}}</span>
                  <p>Projects</p>
                </div>
              </div>

              <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                <div class="count-box pb-5 pt-0 pt-lg-5">
                  <i class="icofont-clock-time"></i>
                  <span data-toggle="counter-up">{{$counter->experience}}</span>
                  <p>Years of experience</p>
                </div>
              </div>

              <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                <div class="count-box pb-5 pt-0 pt-lg-5">
                  <i class="icofont-award"></i>
                  <span data-toggle="counter-up">{{$counter->award}}</span>
                  <p>Awards</p>
                </div>
              </div>

            </div>
            @endforeach
          </div>
        </div>

      

      </div>
    </section><!-- End About Section -->


    <!-- ======= Services Section ======= -->
    <section id="services" class="services  section-bg ">
      <div class="container">

        <div class="section-title pt-5" data-aos="fade-up">
          <h2>Our Services</h2>
        </div>

        <div class="row">
          @foreach($services as $service)
          <div class="col-md-6">
            <div class="icon-box" data-aos="fade-up">
              <div class="icon"><i class="{{$service->icon}}" style="color: #ff689b;"></i></div>
              <h4 class="title"><a href="">{{$service->heading}}</a></h4>
              <p class="description">{{$service->content}}</p>
            </div>
          </div>
          @endforeach
     {{--      <div class="col-md-6">
            <div class="icon-box" data-aos="fade-up">
              <div class="icon"><i class="las la-book" style="color: #e9bf06;"></i></div>
              <h4 class="title"><a href="">Dolor Sitema</a></h4>
              <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
            </div>
          </div>

          <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="las la-file-alt" style="color: #3fcdc7;"></i></div>
              <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
              <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
            </div>
          </div>
          <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="las la-tachometer-alt" style="color:#41cf2e;"></i></div>
              <h4 class="title"><a href="">Magni Dolores</a></h4>
              <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
            </div>
          </div>

          <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="las la-globe-americas" style="color: #d6ff22;"></i></div>
              <h4 class="title"><a href="">Nemo Enim</a></h4>
              <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
            </div>
          </div>
          <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="las la-clock" style="color: #4680ff;"></i></div>
              <h4 class="title"><a href="">Eiusmod Tempor</a></h4>
              <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
            </div>
          </div> --}}
        </div>

      </div>
    </section><!-- End Services Section -->

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
                  <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="#">{{optional($post->user)->name}}</a></li>
                  <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href=""><time datetime="2020-01-01">{{$post->created_at->format('d/m/y')}}</time></a>
                     <a href=""> Category: <time datetime="2020-01-01">{{optional($post->category)->name}}</time></a>
                  </li>
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