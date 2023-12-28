<!DOCTYPE html>
<html>


<!-- animation_105:53-->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KAMDAR</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="CreataThemes" />

    <link rel="shortcut icon" href="img/fevicon.png">

    <!--Bootstrap Css-->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />

    <link rel="stylesheet" href="css/magnific-popup.css">

    <!-- Animate Css -->
    <link rel="stylesheet" href="css/animate.min.css">

    <!-- Materialdesign icons Css -->
    <link href="css/materialdesignicons.min.css" rel="stylesheet">

    <!-- pe-icon-7 css -->
    <link href="css/pe-icon-7.css" rel="stylesheet">

    <!-- Animate Css -->
    <link rel="stylesheet" type="text/css" href="css/aos.css">

    <!-- Owl Slider -->
    <link rel="stylesheet" href="css/owl.carousel.css" />
    <link rel="stylesheet" href="css/owl.theme.css" />
    <link rel="stylesheet" href="css/owl.transitions.css" />


    <!-- Custom style Css -->
    <link href="css/style.css" rel="stylesheet">

</head>

<body>

    <!--Navbar Start-->
    <nav class="navbar navbar-expand-lg fixed-top custom-nav sticky">
        <div class="container">
            <!-- LOGO -->
            <a class="logo navbar-brand" href="index-2.html">
                {{-- <h3 class="">Kamdar</h3> --}}
                {{-- <img src="img/logo.png" alt="" class="img-fluid logo-light">
                    <img src="img/logo-dark.png" alt="" class="img-fluid logo-dark"> --}}
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <i class="mdi mdi-menu"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ml-auto navbar-center" id="mySidenav">
                    <li class="nav-item active">
                        <a href="#home" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#about" class="nav-link">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="#services" class="nav-link">Services</a>
                    </li>
                    <li class="nav-item">
                        <a href="#resume" class="nav-link">Resume</a>
                    </li>
                    <li class="nav-item">
                        <a href="#work" class="nav-link">Work</a>
                    </li>
                    <li class="nav-item">
                        <a href="#client" class="nav-link">Client</a>
                    </li>
                    <li class="nav-item">
                        <a href="#blog" class="nav-link">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a href="#contact" class="nav-link">Contact</a>
                    </li>
                    <li class="nav-item">
                        @if (Route::has('login'))
                            <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                                @auth
                                    <a href="{{ url('/dashboard') }}" class="nav-link">Dashboard</a>
                                @else
                                    <a href="{{ route('login') }}" class="nav-link">Log in</a>

                                    {{-- @if (Route::has('register'))
                                        <a href="{{ route('register') }}"
                                            class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                                    @endif --}}
                                @endauth
                            </div>
                        @endif
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <!--Start Home-->
    <section class="home-bg section h-100vh" id="home">
        <div class="bg-overlay"></div>
        <div class="home-table">
            <div class="home-table-center">
                <div class="container">
                    <div class="row justify-content-center" data-aos="fade-up">
                        <div class="col-lg-12">
                            <div class="text-white text-center">
                                <h1 class="header_title mb-0 mt-3 text-center text-white mx-auto">Welcome to KAMDAR</h1>
                                <p class="header_subtitle text-white mx-auto mt-3 mb-0"> Find your helping hand.</p>
                                <ul class="mb-0 list-inline text-center skill_home mt-5">
                                    <li class="list-inline-item mr-0">Nepal</li>
                                    <li class="list-inline-item mr-0">+78 123 654 78</li>
                                    <li class="list-inline-item mr-0">KamDar@gmail.com</li>
                                </ul>
                                <ul class="social_home list-unstyled text-center pt-5">
                                    <li class="list-inline-item"><a href="#"><i
                                                class="mdi mdi-facebook"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i
                                                class="mdi mdi-linkedin"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i
                                                class="mdi mdi-dribbble"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i
                                                class="mdi mdi-google-plus"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i
                                                class="mdi mdi-twitter"></i></a></li>
                                </ul>
                                <div class="header_btn">
                                    <a href="#" class="btn btn-outline-custom btn-rounded mt-4 mr-3">Learn
                                        More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Home-->

    <!-- Start About -->
    <section class="section" id="about">
        <div class="container">
            <div class="row" data-aos="fade-up">
                <div class="col-lg-12">
                    <div class="section_title text-center">
                        <h3><span class="font-weight-bold">About</span> Me</h3>
                        <div class="vr_line mx-auto d-block"></div>
                        <p class="sec_subtitle mx-auto text-muted pt-2">I'm passionate about connecting people with the
                            help they need to make their lives easier. A platform that brings together skilled household
                            workers with users looking for their services</p>
                    </div>
                </div>
            </div>
            <div class="row mt-3 vertical-content" data-aos="fade-up">
                <div class="col-lg-6">
                    <div class="about_content mt-3">
                        <h6 class="mb-3">Hello & Welcome</h6>
                        <h3 class="mb-3 font-weight-bold text-custom">KAMDAR</h3>
                        <ul class="mb-0 list-inline about-work">
                            <li class="list-inline-item mr-0 text-muted">Confidence</li>
                            <li class="list-inline-item mr-0 text-muted">Belive</li>
                            <li class="list-inline-item mr-0 text-muted">Hire</li>
                        </ul>
                        <p class="text-muted mt-3"> I know how frustrating it can be to find reliable and qualified
                            help for everyday tasks. That's why I built Kamdar with user-friendliness and trust in mind.
                        </p>
                        <div class="progress-bars skill-custom mt-4">
                            <div class="clearfix">
                                <div class="text-dark font-weight-bold float-left">Development</div>
                                <div class="text-muted float-right">80%</div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="0"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="clearfix">
                                <div class="text-dark font-weight-bold float-left">Service</div>
                                <div class="text-muted float-right">59%</div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 59%" aria-valuenow="25"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="clearfix">
                                <div class="text-dark font-weight-bold float-left">Trust</div>
                                <div class="text-muted float-right">88%</div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 88%" aria-valuenow="0"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-img mt-3">
                        <img src="img/about.jpg" alt=""
                            class="img-fluid mx-auto d-block position-relative about-tween">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About -->

    <!-- Start Services -->
    <section class="section bg-light" id="services">
        <div class="container">
            <div class="row" data-aos="fade-up">
                <div class="col-lg-12">
                    <div class="section_title text-center">
                        <h3>Our <span class="font-weight-bold">Services</span></h3>
                        <div class="vr_line mx-auto d-block"></div>
                        <p class="sec_subtitle mx-auto text-muted pt-2">Ut enim ad minim veniam, quis nostrud
                            exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                </div>
            </div>
            <div class="row mt-3" data-aos="fade-up">
                <div class="col-lg-4">
                    <div class="services_boxes bg-white mt-3 rounded p-4">
                        <div class="services_icon text-custom">
                            <h2>01.</h2>
                        </div>
                        <div class="services_content mt-3">
                            <h5 class="mb-0 font-weight-bold">Graphic Design</h5>
                            <p class="text-muted mb-0 mt-2">The standard chunk of Lorem Ipsum used since the is
                                reproduced below for those interested.</p>
                        </div>
                        <div class="read_more">
                            <a href="#" class="text-custom"><i class="pe-7s-pen"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="services_boxes bg-white mt-3 rounded p-4">
                        <div class="services_icon text-custom">
                            <h2>02.</h2>
                        </div>
                        <div class="services_content mt-3">
                            <h5 class="mb-0 font-weight-bold">Graphic Design</h5>
                            <p class="text-muted mb-0 mt-2">The standard chunk of Lorem Ipsum used since the is
                                reproduced below for those interested.</p>
                        </div>
                        <div class="read_more">
                            <a href="#" class="text-custom"><i class="pe-7s-pen"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="services_boxes bg-white mt-3 rounded p-4">
                        <div class="services_icon text-custom">
                            <h2>03.</h2>
                        </div>
                        <div class="services_content mt-3">
                            <h5 class="mb-0 font-weight-bold">Graphic Design</h5>
                            <p class="text-muted mb-0 mt-2">The standard chunk of Lorem Ipsum used since the is
                                reproduced below for those interested.</p>
                        </div>
                        <div class="read_more">
                            <a href="#" class="text-custom"><i class="pe-7s-pen"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-3" data-aos="fade-up">
                <div class="col-lg-4">
                    <div class="services_boxes bg-white mt-3 rounded p-4">
                        <div class="services_icon text-custom">
                            <h2>04.</h2>
                        </div>
                        <div class="services_content mt-3">
                            <h5 class="mb-0 font-weight-bold">Graphic Design</h5>
                            <p class="text-muted mb-0 mt-2">The standard chunk of Lorem Ipsum used since the is
                                reproduced below for those interested.</p>
                        </div>
                        <div class="read_more">
                            <a href="#" class="text-custom"><i class="pe-7s-pen"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="services_boxes bg-white mt-3 rounded p-4">
                        <div class="services_icon text-custom">
                            <h2>05.</h2>
                        </div>
                        <div class="services_content mt-3">
                            <h5 class="mb-0 font-weight-bold">Graphic Design</h5>
                            <p class="text-muted mb-0 mt-2">The standard chunk of Lorem Ipsum used since the is
                                reproduced below for those interested.</p>
                        </div>
                        <div class="read_more">
                            <a href="#" class="text-custom"><i class="pe-7s-pen"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="services_boxes bg-white mt-3 rounded p-4">
                        <div class="services_icon text-custom">
                            <h2>06.</h2>
                        </div>
                        <div class="services_content mt-3">
                            <h5 class="mb-0 font-weight-bold">Graphic Design</h5>
                            <p class="text-muted mb-0 mt-2">The standard chunk of Lorem Ipsum used since the is
                                reproduced below for those interested.</p>
                        </div>
                        <div class="read_more">
                            <a href="#" class="text-custom"><i class="pe-7s-pen"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Services -->

    <!-- Start Education -->
    <section class="section" id="resume">
        <div class="container">
            <div class="row" data-aos="fade-up">
                <div class="col-lg-12">
                    <div class="section_title text-center">
                        <h3>Best <span class="font-weight-bold">Education & Experiance</span></h3>
                        <div class="vr_line mx-auto d-block"></div>
                        <p class="sec_subtitle mx-auto text-muted pt-2">Ut enim ad minim veniam, quis nostrud
                            exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                </div>
            </div>
            <div class="row mt-3 pt-3 vertical-content" data-aos="fade-up">
                <div class="col-lg-6">
                    <div class="futures_boxes mt-3">
                        <h3 class="font-weight-bold">Studied At Cambridge University</h3>
                        <p class="text-muted mt-3">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean
                            commodo ligula eget dolor.</p>
                        <div class="futures_icon pt-2">
                            <p><span>Start</span><b> 2010-2018</b></p>
                            <p><span><i class="mdi mdi-arrow-right"></i></span> Master In Computer Science.</p>
                            <p><span><i class="mdi mdi-arrow-right"></i></span> Bootstrap Html Css Design.</p>
                            <p><span><i class="mdi mdi-arrow-right"></i></span> Planing & Strategy.</p>
                        </div>
                        <div class="read_more_aero">
                            <a href="#" class="text-custom"><i class="mdi mdi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="pt-2">
                        <img src="img/img1.png" class="img-fluid mx-auto d-block" alt="">
                    </div>
                </div>
            </div>
            <div class="row mt-4 pt-4 vertical-content" data-aos="fade-up">
                <div class="col-lg-6">
                    <div class="pt-2">
                        <img src="img/img2.png" class="img-fluid mx-auto d-block" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="futures_boxes mt-3">
                        <h3 class="font-weight-bold">UI/UX Designer</h3>
                        <p class="text-muted mt-3">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean
                            commodo ligula eget dolor.</p>
                        <div class="futures_icon pt-2">
                            <p><span>Start</span><b> 2010-2018</b></p>
                            <p><span><i class="mdi mdi-arrow-right"></i></i></span> Senior Graphic Designer.</p>
                            <p><span><i class="mdi mdi-arrow-right"></i></i></span> Web Developer.</p>
                            <p><span><i class="mdi mdi-arrow-right"></i></i></span> Freelancer And Themeforest.</p>
                        </div>
                        <div class="read_more_aero">
                            <a href="#" class="text-custom"><i class="mdi mdi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Education -->

    <!-- Start Cta -->
    <section class="section bg-cta-img">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row" data-aos="fade-up">
                <div class="col-lg-12">
                    <div class="text-center">
                        <h1 class="font-weight-normal text-white">I Am Available For Freelancer.</h1>

                        <div class="mt-4 pt-3">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-outline-custom btn-rounded" data-toggle="modal"
                                data-target="#exampleModalCenter">Hire Me!</button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModalCenter">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title mb-0 font-weight-bold" id="exampleModalLongTitle">I
                                                Am Available For Freelancer.</h5>
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form class="hire-form">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="fname"
                                                        placeholder="First Name">
                                                </div>
                                                <div class="form-group">
                                                    <input type="email" class="form-control" id="semail"
                                                        placeholder="Email">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="cname"
                                                        placeholder="Company Name">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="mnumber"
                                                        placeholder="Mobile Name">
                                                </div>
                                                <div>
                                                    <button class="btn btn-custom w-100">Send Data</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Cta -->

    <!-- Start Work -->
    <section class="section" id="work">
        <div class="container">
            <div class="row" data-aos="fade-up">
                <div class="col-lg-12">
                    <div class="section_title text-center">
                        <h3>My Recent<span class="font-weight-bold"> Work</span></h3>
                        <div class="vr_line mx-auto d-block"></div>
                        <p class="sec_subtitle mx-auto text-muted pt-2">Ut enim ad minim veniam, quis nostrud
                            exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                </div>
            </div>
            <div class="row mt-3" data-aos="fade-up">
                <div class="col-lg-12">
                    <ul class="text-center list-unstyled list-inline mb-0 text-capitlize work_menu" id="menu-filter">
                        <li class="list-inline-item"><a class="active" data-filter="*">All</a></li>
                        <li class="list-inline-item"><a class="" data-filter=".seo">Seo</a></li>
                        <li class="list-inline-item"><a class="" data-filter=".webdesign">Webdesign</a></li>
                        <li class="list-inline-item"><a class="" data-filter=".work">Work</a></li>
                        <li class="list-inline-item"><a class="" data-filter=".wordpress">Wordpress</a></li>
                    </ul>
                </div>
            </div>
            <div class="row mt-3 work-filter" data-aos="fade-up">
                <div class="col-lg-4 webdesign wordpress">
                    <div class="work_img_box rounded">
                        <a class="img-zoom" href="img/work/work-1.jpg"></a>
                        <div class="work_images">
                            <img src="img/work/work-1.jpg" alt="image" class="img-fluid mx-auto d-block">
                            <div class="work_overlay">
                                <h4 class="mb-0">UI Elements, Icons</h4>
                                <h6 class="mb-0">Studio &amp; Art</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 seo webdesign">
                    <div class="work_img_box rounded">
                        <a class="img-zoom" href="img/work/work-2.jpg"></a>
                        <div class="work_images">
                            <img src="img/work/work-2.jpg" alt="image" class="img-fluid mx-auto d-block">
                            <div class="work_overlay">
                                <h4>Illustrations</h4>
                                <h6>Creative &amp; Art</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 work">
                    <div class="work_img_box rounded">
                        <a class="img-zoom" href="img/work/work-3.jpg"></a>
                        <div class="work_images">
                            <img src="img/work/work-3.jpg" alt="image" class="img-fluid mx-auto d-block">
                            <div class="work_overlay">
                                <h4>Media, Icons</h4>
                                <h6>Open Imagination</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 seo webdesign">
                    <div class="work_img_box rounded">
                        <a class="img-zoom" href="img/work/work-4.jpg"></a>
                        <div class="work_images">
                            <img src="img/work/work-4.jpg" alt="image" class="img-fluid mx-auto d-block">
                            <div class="work_overlay">
                                <h4>Graphics, UI Elements</h4>
                                <h6>Locked Steel Gate</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 seo work">
                    <div class="work_img_box rounded">
                        <a class="img-zoom" href="img/work/work-5.jpg"></a>
                        <div class="work_images">
                            <img src="img/work/work-5.jpg" alt="image" class="img-fluid mx-auto d-block">
                            <div class="work_overlay">
                                <h4>Illustrations, Graphics</h4>
                                <h6>Mac Sunglasses</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wordpress">
                    <div class="work_img_box rounded">
                        <a class="img-zoom" href="img/work/work-6.jpg"></a>
                        <div class="work_images">
                            <img src="img/work/work-6.jpg" alt="image" class="img-fluid mx-auto d-block">
                            <div class="work_overlay">
                                <h4>UI Elements, Media</h4>
                                <h6>Backpack Contents</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Work -->

    <!-- Start Client -->
    <section class="section bg-light" id="client">
        <div class="container">
            <div class="row" data-aos="fade-up">
                <div class="col-lg-12">
                    <div class="section_title text-center">
                        <h3>Our <span class="font-weight-bold">Client's</span></h3>
                        <div class="vr_line mx-auto d-block"></div>
                        <p class="sec_subtitle mx-auto text-muted pt-2">Ut enim ad minim veniam, quis nostrud
                            exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                </div>
            </div>
            <div class="row mt-3" data-aos="fade-up">
                <div class="col-lg-4">
                    <div class="client_boxes mt-3 text-center">
                        <div class="mt-3">
                            <img src="img/client/client-1.jpg" alt="" class="img-fluid rounded-circle ml-3">
                        </div>
                        <h6 class="text-muted font-weight-bold mb-0 mt-3">Laryy Matthews</h6>
                        <h5 class="font-weight-bold p-0 mt-2">CO-FOUNDER AND CTO</h5>
                        <p class="text-muted m-3">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus
                            terry richardson ad squid Anim pariatur cliche reprehenderit.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="client_boxes mt-3 text-center">
                        <div class="mt-3">
                            <img src="img/client/client-2.jpg" alt="" class="img-fluid rounded-circle ml-3">
                        </div>
                        <h6 class="text-muted font-weight-bold mb-0 mt-3">Laryy Matthews</h6>
                        <h5 class="font-weight-bold p-0 mt-2">CO-FOUNDER AND CTO</h5>
                        <p class="text-muted m-3">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus
                            terry richardson ad squid Anim pariatur cliche reprehenderit.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="client_boxes mt-3 text-center">
                        <div class="mt-3">
                            <img src="img/client/client-3.jpg" alt="" class="img-fluid rounded-circle ml-3">
                        </div>
                        <h6 class="text-muted font-weight-bold mb-0 mt-3">Laryy Matthews</h6>
                        <h5 class="font-weight-bold p-0 mt-2">CO-FOUNDER AND CTO</h5>
                        <p class="text-muted m-3">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus
                            terry richardson ad squid Anim pariatur cliche reprehenderit.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Client -->

    <!-- Start Great People -->
    <section class="section bg-people">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row" data-aos="fade-up">
                <div class="col-lg-12">
                    <div class="section_title text-center text-white">
                        <h3>Trusted By<span class="font-weight-bold"> Great People</span></h3>
                        <div class="vr_line mx-auto d-block"></div>
                        <p class="sec_subtitle mx-auto pt-2">Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                </div>
            </div>
            <div class="row mt-3" data-aos="fade-up">
                <div class="col-lg-2 mt-3">
                    <div class="logo_img">
                        <img src="img/1.png" alt="logo-img" class="mx-auto img-fluid d-block">
                    </div>
                </div>
                <div class="col-lg-2 mt-3">
                    <div class="logo_img">
                        <img src="img/2.png" alt="logo-img" class="mx-auto img-fluid d-block">
                    </div>
                </div>
                <div class="col-lg-2 mt-3">
                    <div class="logo_img">
                        <img src="img/3.png" alt="logo-img" class="mx-auto img-fluid d-block">
                    </div>
                </div>
                <div class="col-lg-2 mt-3">
                    <div class="logo_img">
                        <img src="img/4.png" alt="logo-img" class="mx-auto img-fluid d-block">
                    </div>
                </div>
                <div class="col-lg-2 mt-3">
                    <div class="logo_img">
                        <img src="img/5.png" alt="logo-img" class="mx-auto img-fluid d-block">
                    </div>
                </div>
                <div class="col-lg-2 mt-3">
                    <div class="logo_img">
                        <img src="img/6.png" alt="logo-img" class="mx-auto img-fluid d-block">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Great People -->

    <!-- Start Blog -->
    <section class="section" id="blog">
        <div class="container">
            <div class="row" data-aos="fade-up">
                <div class="col-lg-12">
                    <div class="section_title text-center">
                        <h3>Our Latest <span class="font-weight-bold">News</span></h3>
                        <div class="vr_line mx-auto d-block"></div>
                        <p class="sec_subtitle mx-auto text-muted pt-2">Ut enim ad minim veniam, quis nostrud
                            exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                </div>
            </div>
            <div class="row mt-3" data-aos="fade-up">
                <div class="col-lg-4">
                    <div class="blog_box_contant mt-3">
                        <div class="bolg_img p-2">
                            <img src="img/blog/blog1.jpg" alt="Responsive img" class="img-fluid rounded">
                        </div>
                        <div class="blog_box_detail pl-4 pr-4 pb-3">
                            <p class="labal text-muted">Business 4 MIN READ</p>
                            <h5 class="font-weight-bold"><a href="#" class="text-dark">Aliquem erat Volupat</a>
                            </h5>
                            <p class="text-muted ">It is a long established fact that a reader will be distracted by
                                the readable content</p>
                            <span>M</span>
                            Mark Stapp | 12.25.18
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog_box_contant mt-3">
                        <div class="bolg_img p-2">
                            <img src="img/blog/blog2.jpg" alt="Responsive img" class="img-fluid rounded">
                        </div>
                        <div class="blog_box_detail pl-4 pr-4 pb-3">
                            <p class="labal text-muted">Editing 10 MIN READ</p>
                            <h5 class="font-weight-bold"><a href="#" class="text-dark">Contrary to popular</a>
                            </h5>
                            <p class="text-muted ">It is a long established fact that a reader will be distracted by
                                the readable content</p>
                            <span>T</span>
                            Thom Mayn | 08.18.18
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog_box_contant mt-3">
                        <div class="bolg_img p-2">
                            <img src="img/blog/blog3.jpg" alt="Responsive img" class="img-fluid rounded">
                        </div>
                        <div class="blog_box_detail pl-4 pr-4 pb-3">
                            <p class="labal text-muted">Workflow 4 MIN READ</p>
                            <h5 class="font-weight-bold"><a href="#" class="text-dark">Put title for single
                                    Blog</a></h5>
                            <p class="text-muted">It is a long established fact that a reader will be distracted by the
                                readable content</p>
                            <span>N</span>
                            Nannie Davis | 09.27.18
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Blog -->

    <!-- Start Contact -->
    <section class="section_all bg-light" id="contact">
        <div class="container">
            <div class="row" data-aos="fade-up">
                <div class="col-lg-12">
                    <div class="section_title text-center">
                        <h3 class="font-weight-bold">Get In Tuch</h3>
                        <div class="vr_line mx-auto d-block"></div>
                        <p class="sec_subtitle mx-auto text-muted pt-2">Ut enim ad minim veniam, quis nostrud
                            exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                </div>
            </div>
            <div class="row mt-3" data-aos="fade-up">
                <div class="col-lg-6">
                    <div class="contact_info_box">
                        <div class="contact_details_content bg-white p-3 mt-3">
                            <div class="contact_icon float-left  pull-left">
                                <i class="pe-7s-map-marker text_custom mr-3"></i>
                            </div>
                            <div class="contact_detail">
                                <h6 class="font-weight-bold">Address</h6>
                                <p class="text-muted mb-0">1286 Willison Street <br>Minneapolis, MN 55415</p>
                            </div>
                        </div>
                        <div class="contact_details_content bg-white p-3 mt-3">
                            <div class="contact_icon float-left  pull-left">
                                <i class="pe-7s-mail-open text_custom mr-3"></i>
                            </div>
                            <div class="contact_detail">
                                <h6 class="font-weight-bold">Mail</h6>
                                <p class="text-muted mb-0">Support@mail.com</p>
                            </div>
                        </div>
                        <div class="contact_details_content bg-white p-3 mt-3">
                            <div class="contact_icon float-left  pull-left">
                                <i class="pe-7s-phone text_custom mr-3"></i>
                            </div>
                            <div class="contact_detail">
                                <h6 class="font-weight-bold">Call</h6>
                                <p class="text-muted mb-0">+386-202-1907, <br>+903-812-9462.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <form class="business_form_custom">
                        <div class="form-row mt-3">
                            <div class="col">
                                <input name="name" id="name" type="text" class="form-control"
                                    placeholder="Your name...">
                            </div>
                        </div>
                        <div class="form-row mt-3">
                            <div class="col">
                                <input name="email" id="email" type="email" class="form-control"
                                    placeholder="Your email...">
                            </div>
                        </div>
                        <div class="form-row mt-3">
                            <div class="col">
                                <input type="text" class="form-control" id="subject"
                                    placeholder="Your Subject..">
                            </div>
                        </div>
                        <div class="form-row mt-3">
                            <div class="col">
                                <textarea name="comments" id="comments" rows="4" class="form-control" placeholder="Your message..."></textarea>
                            </div>
                        </div>
                        <div class="form-row mt-3">
                            <div class="col">
                                <input type="submit" id="submit" name="send" class="submitBnt btn btn-custom"
                                    value="Send Message">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact -->

    <!-- Start Footer -->
    <footer class="footer_detail">
        <div class="container">
            <div class="row pt-5 pb-5" data-aos="fade-up">
                <div class="col-lg-12">
                    <div class="text-center footer_about">
                        <h3 class="text-white font-weight-bold mb-0">Let's Get Started Oskar</h3>
                        <p class="mx-auto mt-4 mb-0">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                            nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                            velit esse cillum dolore eu fugiat nulla pariatur.</p>
                    </div>
                    <div class="text-center mt-4">
                        <button type="button" class="btn btn-outline-custom btn-rounded" data-toggle="modal"
                            data-target="#exampleModalCenter">Let's Get!</button>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-3">
                    <h6 class="mt-3 text-white text-uppercase">Important Link</h6>
                    <ul class="list-unstyled footer_menu_list mt-3">
                        <li><a href="#">Terms & Condition</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Return Policy</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Sitemap</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h6 class="mt-3 text-white text-uppercase">Our Pages</h6>
                    <ul class="list-unstyled footer_menu_list mt-3">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Features</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Client</a></li>
                        <li><a href="#">Pricing</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h6 class="mt-3 text-white text-uppercase">Support</h6>
                    <ul class="list-unstyled footer_menu_list mt-3">
                        <li><a href="#">Help Center</a></li>
                        <li><a href="#">Live Chat</a></li>
                        <li><a href="#">Downloads</a></li>
                        <li><a href="#">Press Kit</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h6 class="mt-3 text-white text-uppercase">Locations</h6>
                    <ul class="list-unstyled footer_menu_list mt-3">
                        <li><a href="#">Melbourne</a></li>
                        <li><a href="#">London</a></li>
                        <li><a href="#">New York</a></li>
                        <li><a href="#">San Francisco</a></li>
                        <li><a href="#">Ontario</a></li>
                    </ul>
                </div>
            </div>
            <div class="fot_bor"></div>
            <div class="row pt-3 pb-3">
                <div class="col-lg-12">
                    <div class="float-left float_none">
                        <p class="copy-rights mb-0"><a target="_blank" href="https://www.templateshub.net">Templates
                                Hub</a></p>
                    </div>
                    <div class="float-right float_none">
                        <ul class="list-inline fot_social mb-0">
                            <li class="list-inline-item"><a href="#" class="social-icon text-muted"><i
                                        class="mdi mdi-facebook"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="social-icon text-muted"><i
                                        class="mdi mdi-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="social-icon text-muted"><i
                                        class="mdi mdi-linkedin"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="social-icon text-muted"><i
                                        class="mdi mdi-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <!-- Back to top -->
    <a href="#" class="back_top" style="display: inline;"> <i class="pe-7s-up-arrow"> </i> </a>

    <!-- JAVASCRIPTS -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>

    <!-- scrollspy js -->
    <script src="js/scrollspy.min.js"></script>

    <!-- isotope js -->
    <script src="js/isotope.js"></script>

    <!-- magnific js -->
    <script src="js/jquery.magnific-popup.min.js"></script>

    <!-- isotope js -->
    <script src="js/isotope.js"></script>

    <!-- Aos Js -->
    <script src="js/aos.js"></script>

    <!-- custom js -->
    <script src="js/custom.js"></script>

    <script>
        $(".element").each(function() {
            var $this = $(this);
            $this.typed({
                strings: $this.attr('data-elements').split(','),
                typeSpeed: 100,
                backDelay: 3000
            });
        });
    </script>

    <script>
        AOS.init({
            easing: 'ease-in-out-sine',
            duration: 1000
        });
    </script>


</body>


<!-- animation_105:53-->

</html>







{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}.z-10{z-index: 10}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}
        </style>
    </head>
    <body class="antialiased">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-7xl mx-auto p-6 lg:p-8">
                <div class="flex justify-center">
                    <svg viewBox="0 0 62 65" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-16 w-auto bg-gray-100 dark:bg-gray-900">
                        <path d="M61.8548 14.6253C61.8778 14.7102 61.8895 14.7978 61.8897 14.8858V28.5615C61.8898 28.737 61.8434 28.9095 61.7554 29.0614C61.6675 29.2132 61.5409 29.3392 61.3887 29.4265L49.9104 36.0351V49.1337C49.9104 49.4902 49.7209 49.8192 49.4118 49.9987L25.4519 63.7916C25.3971 63.8227 25.3372 63.8427 25.2774 63.8639C25.255 63.8714 25.2338 63.8851 25.2101 63.8913C25.0426 63.9354 24.8666 63.9354 24.6991 63.8913C24.6716 63.8838 24.6467 63.8689 24.6205 63.8589C24.5657 63.8389 24.5084 63.8215 24.456 63.7916L0.501061 49.9987C0.348882 49.9113 0.222437 49.7853 0.134469 49.6334C0.0465019 49.4816 0.000120578 49.3092 0 49.1337L0 8.10652C0 8.01678 0.0124642 7.92953 0.0348998 7.84477C0.0423783 7.8161 0.0598282 7.78993 0.0697995 7.76126C0.0884958 7.70891 0.105946 7.65531 0.133367 7.6067C0.152063 7.5743 0.179485 7.54812 0.20192 7.51821C0.230588 7.47832 0.256763 7.43719 0.290416 7.40229C0.319084 7.37362 0.356476 7.35243 0.388883 7.32751C0.425029 7.29759 0.457436 7.26518 0.498568 7.2415L12.4779 0.345059C12.6296 0.257786 12.8015 0.211853 12.9765 0.211853C13.1515 0.211853 13.3234 0.257786 13.475 0.345059L25.4531 7.2415H25.4556C25.4955 7.26643 25.5292 7.29759 25.5653 7.32626C25.5977 7.35119 25.6339 7.37362 25.6625 7.40104C25.6974 7.43719 25.7224 7.47832 25.7523 7.51821C25.7735 7.54812 25.8021 7.5743 25.8196 7.6067C25.8483 7.65656 25.8645 7.70891 25.8844 7.76126C25.8944 7.78993 25.9118 7.8161 25.9193 7.84602C25.9423 7.93096 25.954 8.01853 25.9542 8.10652V33.7317L35.9355 27.9844V14.8846C35.9355 14.7973 35.948 14.7088 35.9704 14.6253C35.9792 14.5954 35.9954 14.5692 36.0053 14.5405C36.0253 14.4882 36.0427 14.4346 36.0702 14.386C36.0888 14.3536 36.1163 14.3274 36.1375 14.2975C36.1674 14.2576 36.1923 14.2165 36.2272 14.1816C36.2559 14.1529 36.292 14.1317 36.3244 14.1068C36.3618 14.0769 36.3942 14.0445 36.4341 14.0208L48.4147 7.12434C48.5663 7.03694 48.7383 6.99094 48.9133 6.99094C49.0883 6.99094 49.2602 7.03694 49.4118 7.12434L61.3899 14.0208C61.4323 14.0457 61.4647 14.0769 61.5021 14.1055C61.5333 14.1305 61.5694 14.1529 61.5981 14.1803C61.633 14.2165 61.6579 14.2576 61.6878 14.2975C61.7103 14.3274 61.7377 14.3536 61.7551 14.386C61.7838 14.4346 61.8 14.4882 61.8199 14.5405C61.8312 14.5692 61.8474 14.5954 61.8548 14.6253ZM59.893 27.9844V16.6121L55.7013 19.0252L49.9104 22.3593V33.7317L59.8942 27.9844H59.893ZM47.9149 48.5566V37.1768L42.2187 40.4299L25.953 49.7133V61.2003L47.9149 48.5566ZM1.99677 9.83281V48.5566L23.9562 61.199V49.7145L12.4841 43.2219L12.4804 43.2194L12.4754 43.2169C12.4368 43.1945 12.4044 43.1621 12.3682 43.1347C12.3371 43.1097 12.3009 43.0898 12.2735 43.0624L12.271 43.0586C12.2386 43.0275 12.2162 42.9888 12.1887 42.9539C12.1638 42.9203 12.1339 42.8916 12.114 42.8567L12.1127 42.853C12.0903 42.8156 12.0766 42.7707 12.0604 42.7283C12.0442 42.6909 12.023 42.656 12.013 42.6161C12.0005 42.5688 11.998 42.5177 11.9931 42.4691C11.9881 42.4317 11.9781 42.3943 11.9781 42.3569V15.5801L6.18848 12.2446L1.99677 9.83281ZM12.9777 2.36177L2.99764 8.10652L12.9752 13.8513L22.9541 8.10527L12.9752 2.36177H12.9777ZM18.1678 38.2138L23.9574 34.8809V9.83281L19.7657 12.2459L13.9749 15.5801V40.6281L18.1678 38.2138ZM48.9133 9.14105L38.9344 14.8858L48.9133 20.6305L58.8909 14.8846L48.9133 9.14105ZM47.9149 22.3593L42.124 19.0252L37.9323 16.6121V27.9844L43.7219 31.3174L47.9149 33.7317V22.3593ZM24.9533 47.987L39.59 39.631L46.9065 35.4555L36.9352 29.7145L25.4544 36.3242L14.9907 42.3482L24.9533 47.987Z" fill="#FF2D20"/>
                    </svg>
                </div>

                <div class="mt-16">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
                        <a href="https://laravel.com/docs" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-7 h-7 stroke-red-500">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                                    </svg>
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Documentation</h2>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                    Laravel has wonderful documentation covering every aspect of the framework. Whether you are a newcomer or have prior experience with Laravel, we recommend reading our documentation from beginning to end.
                                </p>
                            </div>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </a>

                        <a href="https://laracasts.com" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-7 h-7 stroke-red-500">
                                        <path stroke-linecap="round" d="M15.75 10.5l4.72-4.72a.75.75 0 011.28.53v11.38a.75.75 0 01-1.28.53l-4.72-4.72M4.5 18.75h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25h-9A2.25 2.25 0 002.25 7.5v9a2.25 2.25 0 002.25 2.25z" />
                                    </svg>
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Laracasts</h2>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                    Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them out, see for yourself, and massively level up your development skills in the process.
                                </p>
                            </div>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </a>

                        <a href="https://laravel-news.com" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-7 h-7 stroke-red-500">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z" />
                                    </svg>
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Laravel News</h2>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                    Laravel News is a community driven portal and newsletter aggregating all of the latest and most important news in the Laravel ecosystem, including new package releases and tutorials.
                                </p>
                            </div>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </a>

                        <div class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-7 h-7 stroke-red-500">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.115 5.19l.319 1.913A6 6 0 008.11 10.36L9.75 12l-.387.775c-.217.433-.132.956.21 1.298l1.348 1.348c.21.21.329.497.329.795v1.089c0 .426.24.815.622 1.006l.153.076c.433.217.956.132 1.298-.21l.723-.723a8.7 8.7 0 002.288-4.042 1.087 1.087 0 00-.358-1.099l-1.33-1.108c-.251-.21-.582-.299-.905-.245l-1.17.195a1.125 1.125 0 01-.98-.314l-.295-.295a1.125 1.125 0 010-1.591l.13-.132a1.125 1.125 0 011.3-.21l.603.302a.809.809 0 001.086-1.086L14.25 7.5l1.256-.837a4.5 4.5 0 001.528-1.732l.146-.292M6.115 5.19A9 9 0 1017.18 4.64M6.115 5.19A8.965 8.965 0 0112 3c1.929 0 3.716.607 5.18 1.64" />
                                    </svg>
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Vibrant Ecosystem</h2>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                    Laravel's robust library of first-party tools and libraries, such as <a href="https://forge.laravel.com" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Forge</a>, <a href="https://vapor.laravel.com" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Vapor</a>, <a href="https://nova.laravel.com" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Nova</a>, and <a href="https://envoyer.io" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Envoyer</a> help you take your projects to the next level. Pair them with powerful open source libraries like <a href="https://laravel.com/docs/billing" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Cashier</a>, <a href="https://laravel.com/docs/dusk" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dusk</a>, <a href="https://laravel.com/docs/broadcasting" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Echo</a>, <a href="https://laravel.com/docs/horizon" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Horizon</a>, <a href="https://laravel.com/docs/sanctum" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Sanctum</a>, <a href="https://laravel.com/docs/telescope" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Telescope</a>, and more.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-center mt-16 px-0 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 dark:text-gray-400 sm:text-left">
                        <div class="flex items-center gap-4">
                            <a href="https://github.com/sponsors/taylorotwell" class="group inline-flex items-center hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="-mt-px mr-1 w-5 h-5 stroke-gray-400 dark:stroke-gray-600 group-hover:stroke-gray-600 dark:group-hover:stroke-gray-400">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                </svg>
                                Sponsor
                            </a>
                        </div>
                    </div>

                    <div class="ml-4 text-center text-sm text-gray-500 dark:text-gray-400 sm:text-right sm:ml-0">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </div>
                </div>
            </div>
        </div>
    </body>
</html> --}}