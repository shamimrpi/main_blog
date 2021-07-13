<header id="header" class="fixed-top">
    <div class="container d-flex">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="{{route('blog')}}">Shamim-it</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
       
          <li class="@if($menu == 'home') active @endif"><a  href="{{route('home')}}">Home</a></li>
       
          <li class="@if($menu == 'blog') active @endif"><a href="{{route('blog')}}">Blog</a></li>
          <li class="@if($menu == 'contact') active @endif"><a href="{{route('contact')}}">Contact</a></li>
          @guest
          <li class="get-started"><a href="{{route('login')}}">Login</a></li>
          @else
             <li><div style="font-size: 10px"><strong>{{Auth::user()->name}}</strong></li>
          @endguest
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->