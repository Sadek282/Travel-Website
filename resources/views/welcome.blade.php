<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>TRAVELER - Free Travel Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="/css/style.css" rel="stylesheet">

</head>

<body>
@include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])

    <!-- Topbar Start -->
@include('common.Topbar')
  
    <!-- Topbar End -->

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


    <!-- Carousel Start -->
@include('common.Carousel')
    
    <!-- Carousel End -->


    <!-- Booking Start -->
   
    <!-- Booking End -->


    <!-- About Start -->
@include('common.about')
    
    <!-- About End -->


    <!-- Feature Start -->
@include('common.Feature')
   
    <!-- Feature End -->


    <!-- Destination Start -->
@include('common.Destination')
   
    <!-- Destination Start -->


    <!-- Service Start -->
@include('common.Service')
   
    <!-- Service End -->


    <!-- Packages Start -->
@include('common.Packages')
  
    <!-- Packages End -->


    <!-- Registration Start -->
   
    <!-- Registration End -->


    <!-- Team Start -->
@include('common.Team')
    
    <!-- Team End -->


    <!-- Testimonial Start -->
@include('common.Testimonial')
   
    <!-- Testimonial End -->


    <!-- Blog Start -->
@include('common.blog')
   
    <!-- Blog End -->

    <!-- Footer -->
@include('common.Footer')
    <!-- Footer -->
  

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="/lib/easing/easing.min.js"></script>
    <script src="/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="/lib/tempusdominus/js/moment.min.js"></script>
    <script src="/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="/mail/jqBootstrapValidation.min.js"></script>
    <script src="/mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>