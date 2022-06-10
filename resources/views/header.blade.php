<header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="/" class="logo d-flex align-items-center">
        <img src="{{ asset('assets/img/Tinka (1).png') }}" alt="">
        <span>TiNKA</span>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li>
            <div class="btn-group" role="group" aria-label="Language">
              <button type="button" class="btn btn-primary btn-sm" id="lang-en">EN</button>
              <button type="button" class="btn btn-danger btn-sm" id="lang-my">MY</button>
            </div>
          </li>
          <li><a class="nav-link scrollto" href="/">{{ __("Home") }}</a></li>
          <li><a class="nav-link scrollto" target=”_blank” href="https://blog.tinka.world/">Blog</a></li>
          <li class="dropdown"><a href="/about"><span>{{ __("About Us") }}</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="/about">{{ __("About Tinka") }}</a></li>
              <li><a href="/tinkaleadership">{{ __("Tinka Leadership") }}</a></li>
              <li><a href="/teachers">{{ __("Tinka Teachers") }}</a></li>
            </ul>
          <li class="dropdown" ><a href="#"><span>{{ __("Product & Services") }}</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="/tinkaeducentre">{{ __("Tinka Educentre") }}</a></li>
              <li><a href="https://campus.tinka.world">{{ __("Tinka Campus - Digital Online Learning Platform") }}</a></li>
              <li><a href="https://qof.tinka.world">{{ __("Tinka QOF Digital") }}</a></li>
            </ul>
          <li class="dropdown" ><a href="#"><span>{{ __("Fees") }}</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="/fees/educentre">{{ __("Tinka Educentre") }}</a></li>
              <li><a href="/fees/home-tuition">{{ __("Home Tuition") }}</a></li>
              <li><a href="/fees/tinka-campus">{{ __("Tinka Campus") }}</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>{{ __("Join Us") }}</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="/register/teacher">{{ __("Tink-Educator") }}</a></li>
              <li><a href="/register">{{ __("Future Tinkers") }}</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="/contact">{{ __("Contact") }}</a></li>
          
          @auth
          <li><a class="getstarted" href="{{ route('view-profile', auth()->user()->id) }}">{{ __("Dashboard") }}</a></li>
          @endauth

          @guest
          <li><a class="getstarted scrollto" href="{{ route('login') }}">{{ __("Get Started") }}</a></li>
          @endguest
       
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
    </div>
  </header>
