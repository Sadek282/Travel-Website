 <!-- Navbar Start -->
 <div class="container-fluid position-relative nav-bar p-0">
        <div class="container-lg position-relative p-0 px-lg-3" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-light navbar-light shadow-lg py-3 py-lg-0 pl-3 pl-lg-5">
                <a href="" class="navbar-brand">
                    <h1 class="m-0 text-primary"><span class="text-dark">TRAVEL</span>ER</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        <a href="/" class="nav-item nav-link active">Home</a>
                        <a href="/about" class="nav-item nav-link">About</a>
                        <a href="/service" class="nav-item nav-link">Services</a>
                        
                        <!-- <a href="/package" class="nav-item nav-link">Tour Packages</a> -->
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Manu</a>
                            <div class="dropdown-menu border-0 rounded-0 m-0">
                                <a href="/blog" class="dropdown-item">Blog Grid</a>
                                <a href="/single" class="dropdown-item">Blog Detail</a>
                                <a href="/destination" class="dropdown-item">Destination</a>
                                <a href="/guide" class="dropdown-item">Travel Guides</a>
                                <a href="/testimonial" class="dropdown-item">Testimonial</a>
                                <a href="/contact" class="dropdown-item">Contact</a>
                          

                            </div>
                            
                        </div>
                        @if (Auth::user())
                      <div class="nav-item dropdown pe-3">
      
                        <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                          <!-- <img src="/font-site/img/team-3.jpg" alt="Profile" class="rounded-circle" height="50px"> -->
                          <span class="d-none d-md-block dropdown-toggle ps-2">Welcome, {{ Auth::user()->name }}</span>
                        </a><!-- End Profile Iamge Icon -->
              
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                          <li class="dropdown-header">
                            <!-- <h6>Kevin Anderson</h6>
                            <span>Web Designer</span> -->
                          </li>
                          <li>
                            <hr class="dropdown-divider">
                          </li>

                          @if(Auth::user()->is_tyep == 'admin')
                          <li>
                            <a class="dropdown-item d-flex align-items-center" href="{{ route('admin') }}">
                              <i class="bi bi-person"></i>
                              <span>My Profile</span>
                            </a>
                          </li>
                          @else
                          <li>
                            <a class="dropdown-item d-flex align-items-center" href="{{ route('pro') }}">
                              <i class="bi bi-person"></i>
                              <span>My Profile</span>
                            </a>
                          </li>
                          @endif

                          <li>
                            <hr class="dropdown-divider">
                          </li>
              
                          <li>
                            <a class="dropdown-item d-flex align-items-center" href="{{ route('logout') }}">
                              <i class="bi bi-box-arrow-right"></i>
                              <span>Log Out</span>
                            </a>
                          </li>
              
                        </ul><!-- End Profile Dropdown Items -->
                      </div><!-- End Profile Nav -->
                      @else
                        <a href="{{ route('login') }}" class="nav-item nav-link">login</a>
                        <a href="{{ route('signup') }}" class="nav-item nav-link">Sign Up</a>
                        @endif

                        <!-- <a href="/contact" class="nav-item nav-link">Contact</a> -->
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->