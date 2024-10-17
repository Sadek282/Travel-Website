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
                        <a href="/" class="nav-item nav-link ">Home</a>
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
                        <a href="{{ route('login') }}" class="nav-item nav-link active">login</a>
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
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-md-3">Tours & Travel</h4>
                            <h1 class="display-3 text-white mb-md-4">Login Now</h1>
                            <!-- <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2">Book Now</a> -->
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-md-3">Tours & Travel</h4>
                            <h1 class="display-3 text-white mb-md-4">Discover Amazing Places With Us</h1>
                            <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                <div class="btn btn-dark" style="width: 45px; height: 45px;">
                    <span class="carousel-control-prev-icon mb-n2"></span>
                </div>
            </a>
            <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                <div class="btn btn-dark" style="width: 45px; height: 45px;">
                    <span class="carousel-control-next-icon mb-n2"></span>
                </div>
            </a>
        </div>
    </div>    
   
    <!-- login Start -->
    <div class="container-fluid bg-registration py-5" style="margin: 90px 0;">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-7 mb-5 mb-lg-0">
                    <div class="mb-4">
                        <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Mega Offer</h6>
                        <h1 class="text-white"><span class="text-primary">30% OFF</span> For Honeymoon</h1>
                    </div>
                    <p class="text-white">Invidunt lorem justo sanctus clita. Erat lorem labore ea, justo dolor lorem ipsum ut sed eos,
                        ipsum et dolor kasd sit ea justo. Erat justo sed sed diam. Ea et erat ut sed diam sea ipsum est
                        dolor</p>
                    <ul class="list-inline text-white m-0">
                        <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Labore eos amet dolor amet diam</li>
                        <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Etsea et sit dolor amet ipsum</li>
                        <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Diam dolor diam elitripsum vero.</li>
                    </ul>
                </div>
                <div class="col-lg-5">
                    <div class="card border-0">
                        <div class="card-header bg-primary text-center p-4">
                            <h1 class="text-white m-0">Login Now</h1>
                        </div>
                        <div class="card-body rounded-bottom bg-white p-5">
                            <form action="{{ route('loginChek') }}" method="post">
                                @csrf
                               
                                <div class="form-group">
                                    <input type="email" name='email' class="form-control p-4" placeholder="Your email" required="required" />
                                </div>
                                
        
                                <div class="form-group">
                                    <input type="password" name='password' class="form-control p-4" placeholder="Your Password" required="required" />
                                </div>
                              
                                <div>
                                    <button class="btn btn-primary btn-block py-3" type="submit">login</button>
                                </div>
                                <a href="{{ route('signup') }}">alrady account nai</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>   
    <!-- Registration End -->


   
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
</body>

</html>