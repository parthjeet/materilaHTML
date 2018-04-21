<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Carousel | Material</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Meterial Icon CSS -->
    <link rel="stylesheet" href="assets/css/materialdesignicons.min.css">
    <!-- Material CSS -->
    <link rel="stylesheet" href="assets/css/material.min.css">
    <!-- Ripples CSS -->
    <link rel="stylesheet" href="assets/css/ripples.min.css">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="assets/css/owl.carousel.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!-- Slicknav CSS -->
    <link rel="stylesheet" href="assets/css/slicknav.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="assets/css/responsive.css">

    
    <!-- Color CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="assets/css/colors/indigo.css" media="screen" />

  </head>
  <body>

      <!-- Header Start -->
      <header id="header">
        <nav class="navbar navbar-expand-lg fixed-top scrolling-navbar nav-bg">
          <div class="container">            
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="sr-only">Toggle navigation</span>
                <span class="mdi mdi-menu"></span>
                <span class="mdi mdi-menu"></span>
                <span class="mdi mdi-menu"></span>
              </button>
              <a class="navbar-brand" href="index.php"><img src="assets/images/logo.png" alt=""></a>
            </div>
            <div class="collapse navbar-collapse" id="main-navbar">
              <ul class="navbar-nav mr-auto w-100 justify-content-end">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Home
                  </a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="index.php">Home V1</a>
                    <a class="dropdown-item" href="index-2.php">Home V2</a>
                  </div>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Pages
                  </a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="about-us.php">About Us 1</a>
                    <a class="dropdown-item" href="about-us2.php">About Us 2</a>
                    <a class="dropdown-item" href="team.php">Team Members</a>
                    <a class="dropdown-item" href="services.php">Services</a>
                    <a class="dropdown-item" href="contact-us.php">Contact Us 1</a>
                    <a class="dropdown-item" href="contact-us2.php">Contact Us 2</a>
                    <a class="dropdown-item" href="404.php">404</a>
                  </div>
                </li>
                <li class="nav-item dropdown active">
                  <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Components
                  </a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="tab.php">Tabs</a>
                    <a class="dropdown-item" href="alert.php">Alert</a>
                    <a class="dropdown-item" href="accordion.php">Accordions</a>
                    <a class="dropdown-item" href="pricing.php">Pricing Tables</a>
                    <a class="dropdown-item" href="buttons.php">Buttons</a>
                    <a class="dropdown-item" href="icons.php">Icons</a>
                    <a class="dropdown-item active" href="carousel.php">Carousel</a>
                    <a class="dropdown-item" href="counter.php">Counter</a>
                    <a class="dropdown-item" href="map.php">Google Map</a>
                  </div>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Portfolio
                  </a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="portfolio-2.php">Portfolio 2 columns</a>
                    <a class="dropdown-item" href="portfolio.php">Portfolio 3 columns</a>
                    <a class="dropdown-item" href="portfolio-single.php">Portfolio Single</a>
                  </div>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Blog
                  </a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="blog.php">Blog Page</a>
                    <a class="dropdown-item" href="blog-single.php">Blog Single Page</a>
                  </div>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Contact Us
                  </a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="contact-us.php">Contact Us 1</a>
                    <a class="dropdown-item" href="contact-us2.php">Contact Us 2</a>
                  </div>
                </li>
              </ul>
              <!-- Search Box Start -->
              <div class="search-icon">
                <span class="open-search">
                  <i class="mdi mdi-magnify btn btn-common"></i>
                </span>
              </div>
              <form role="search" class="navbar-form">
                <div class="container">
                  <div class="row">
                    <div class="form-group has-feedback">
                      <input type="text" placeholder="Type and search ..." class="form-control">
                      <div class="close"><i class="mdi mdi-close"></i></div>
                    </div>
                  </div>
                </div>
              </form>
              <!-- Search Box End -->
            </div>
          </div>
          <!-- Mobile Menu Start -->
          <ul class="wpb-mobile-menu">
            <li>
              <a href="#">
              Home
              </a>
              <ul class="dropdown">
                <li>
                  <a href="index.php">Home v1</a>
                </li>
                <li>
                  <a href="index-2.php">Home v2</a>
                </li>
              </ul>
            </li>
            <li>
              <a href="#">
              Pages
              </a>
              <ul class="dropdown">
                <li>
                  <a href="about-us.php">About Us 1</a>
                </li>
                <li>
                  <a href="about-us2.php">About Us 2</a>
                </li>
                <li>
                  <a href="team.php">Team Members</a>
                </li>
                <li>
                  <a href="services.php">Services</a>
                </li>
                <li>
                    <a href="contact-us.php">Contact Us 1</a>
                </li>
                <li>
                    <a href="contact-us2.php">Contact Us 2</a>
                </li>
                <li>
                    <a href="404.php">404</a>
                </li>
              </ul>
            </li>
            <li>
              <a class="active" href="#">
              Elements
              </a>
              <ul class="dropdown">
                <li>
                  <a href="tab.php">Tabs</a>
                </li>
                <li>
                  <a href="alert.php">Alert</a>
                </li>
                <li>
                  <a href="accordion.php">Accordions</a>
                </li>
                <li>
                 <a href="pricing.php">Pricing Tables</a>
                </li>
                <li>
                    <a href="buttons.php">Buttons</a>
                </li>
                <li>
                    <a href="icons.php">Icons</a>
                </li>
                <li>
                    <a class="active" href="carousel.php">Carousel</a>
                </li>
                <li>
                    <a href="counter.php">Counter</a>
                </li>
                <li>
                   <a href="map.php">Google Map</a>
                </li>
              </ul>
            </li>
            <li>
              <a href="#">
              Portfolio
              </a>
              <ul class="dropdown">
                <li>
                  <a href="portfolio-2.php">Portfolio 2 columns</a>
                </li>
                <li>
                  <a href="portfolio.php">Portfolio 3 columns</a>
                </li>
                <li>
                  <a href="portfolio-single.php">Portfolio Single</a>
                </li>
              </ul>
            </li>
            <li>
              <a href="about.php">
              Blog
              </a>
              <ul class="dropdown">
                <li>
                  <a href="blog.php">Blog Page</a>
                </li>
                <li>
                  <a href="blog-single.php">Blog Single Page</a>
                </li>
              </ul>
            </li>
            <li>
              <a href="#">
              Contact Us
              </a>
              <ul class="dropdown">
                <li>
                  <a href="contact-us.php">Contact Us 1</a>
                </li>
                <li>
                  <a href="contact-us2.php">Contact Us 2</a>
                </li>
              </ul>
            </li>
          </ul>
          <!-- Mobile Menu End -->
        </nav>
      </header>
      <!-- Header End --> 
        
      <!-- Page Titile Area -->
      <section class="page-title-section section-padding">
          <div class="container">
              <div class="row">
                  <div class="col-md-12">
                      <div class="title-center">
                          <div class="title-middle">
                              <h2 class="page-tagline">Temaplate Shortcode</h2>
                              <h1 class="page-title text-center">Carousel</h1>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <!-- Page Titile Area End -->

      <!-- Material Carousel Section  -->
      <section class="Material-carousel-section section-padding">
        <div class="container">
          <div class="row wow animated fadeInUp"  data-wow-delay=".2s">
            <div class="col-md-12">
              <h3 class="small-title">Carousel With Image</h3>
              <div id="Material-image-carousel" class="owl-carousel owl-theme">
                <div class="item active">
                  <img src="assets/images/portfolio/work1.jpg" class="img-thumbnail" alt="">
                </div>
                <div class="item">
                  <img src="assets/images/portfolio/work2.jpg" class="img-thumbnail" alt="">
                </div>
                <div class="item">
                  <img src="assets/images/portfolio/work3.jpg" class="img-thumbnail" alt="">
                </div>
                <div class="item">
                  <img src="assets/images/portfolio/work4.jpg" class="img-thumbnail" alt="">
                </div>
                <div class="item">
                  <img src="assets/images/portfolio/work5.jpg" class="img-thumbnail" alt="">
                </div>
                <div class="item">
                  <img src="assets/images/portfolio/work6.jpg" class="img-thumbnail" alt="">
                </div>
                <div class="item">
                  <img src="assets/images/portfolio/work3.jpg" class="img-thumbnail" alt="">
                </div>
                <div class="item">
                  <img src="assets/images/portfolio/work5.jpg" class="img-thumbnail" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Material Carousel Section End  -->

      <!-- Team Carousel -->
      <section id="team-slide" class="section-padding section-dark">
        <div class="container">
          <div class="col-md-12">
            <div class="row wow animated fadeInUp"  data-wow-delay=".3s">
              <h3 class="small-title">Carousel With Team</h3>
              <div id="team-carousel" class="owl-carousel owl-theme">
                <div class="item active">
                  <!-- Single Team Widget -->
                  <div class="single-team-widget">
                      <img src="assets/images/team/team1.jpg" class="img-fluid" alt="">
                      <div class="team-member-info">
                          <div class="know-more">
                              <a class="btn btn-round btn-fab btn-xs" href="javascript:void(0)"><i class="material-icons mdi mdi-arrow-right"></i><div class="ripple-container"></div></a>
                          </div>
                          <h2 class="subtitle">Rob Percy</h2>
                          <p>Co-Founder</p>
                            <div class="social-profiles">
                              <a href="#"><i class="mdi mdi-twitter"></i></a>
                              <a href="#"><i class="mdi mdi-facebook"></i></a>
                              <a href="#"><i class="mdi mdi-dribbble"></i></a>
                              <a href="#"><i class="mdi mdi-linkedin"></i></a>
                          </div>
                      </div>
                  </div>
                </div>

                <div class="item item">
                  <!-- Single Team Widget -->
                  <div class="single-team-widget">
                      <img src="assets/images/team/team2.jpg" class="img-fluid" alt="">
                      <div class="team-member-info">
                          <div class="know-more">
                              <a class="btn btn-round btn-fab btn-xs" href="javascript:void(0)"><i class="material-icons mdi mdi-arrow-right"></i><div class="ripple-container"></div></a>
                          </div>
                          <h2 class="subtitle">Jennifer L.</h2>
                          <p>Graphic Designer</p>
                          <div class="social-profiles">
                            <a href="#"><i class="mdi mdi-twitter"></i></a>
                            <a href="#"><i class="mdi mdi-facebook"></i></a>
                            <a href="#"><i class="mdi mdi-dribbble"></i></a>
                            <a href="#"><i class="mdi mdi-linkedin"></i></a>
                          </div>
                      </div>
                  </div>
                </div>

                <div class="item">
                   <!-- Single Team Widget -->
                    <div class="single-team-widget">
                        <img src="assets/images/team/team3.jpg" class="img-fluid" alt="">
                        <div class="team-member-info">
                            <div class="know-more">
                                <a class="btn btn-round btn-fab btn-xs" href="javascript:void(0)"><i class="material-icons mdi mdi-arrow-right"></i><div class="ripple-container"></div></a>
                            </div>
                            <h2 class="subtitle">Tom Hanks.</h2>
                            <p>SEO Speacialist</p>
                            <div class="social-profiles">
                              <a href="#"><i class="mdi mdi-twitter"></i></a>
                              <a href="#"><i class="mdi mdi-facebook"></i></a>
                              <a href="#"><i class="mdi mdi-dribbble"></i></a>
                              <a href="#"><i class="mdi mdi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item">
                  <!-- Single Team Widget -->
                  <div class="single-team-widget">
                      <img src="assets/images/team/team4.jpg" class="img-fluid" alt="">
                      <div class="team-member-info">
                          <div class="know-more">
                              <a class="btn btn-round btn-fab btn-xs" href="javascript:void(0)"><i class="material-icons mdi mdi-arrow-right"></i><div class="ripple-container"></div></a>
                          </div>
                          <h2 class="subtitle">Emma Watson</h2>
                          <p>Head Of Ideas</p>
                          <div class="social-profiles">
                            <a href="#"><i class="mdi mdi-twitter"></i></a>
                            <a href="#"><i class="mdi mdi-facebook"></i></a>
                            <a href="#"><i class="mdi mdi-dribbble"></i></a>
                            <a href="#"><i class="mdi mdi-linkedin"></i></a>
                          </div>
                      </div>
                  </div>
                </div>


                <div class="item">
                  <!-- Single Team Widget -->
                  <div class="single-team-widget">
                      <img src="assets/images/team/team1.jpg" class="img-fluid" alt="">
                      <div class="team-member-info">
                          <div class="know-more">
                              <a class="btn btn-round btn-fab btn-xs" href="javascript:void(0)"><i class="material-icons mdi mdi-arrow-right"></i><div class="ripple-container"></div></a>
                          </div>
                          <h2 class="subtitle">Rob Percy</h2>
                          <p>Co-Founder</p>
                          <div class="social-profiles">
                            <a href="#"><i class="mdi mdi-twitter"></i></a>
                            <a href="#"><i class="mdi mdi-facebook"></i></a>
                            <a href="#"><i class="mdi mdi-dribbble"></i></a>
                            <a href="#"><i class="mdi mdi-linkedin"></i></a>
                          </div>
                      </div>
                  </div>
                </div>

                <div class="item item">
                  <!-- Single Team Widget -->
                    <div class="single-team-widget">
                        <img src="assets/images/team/team2.jpg" class="img-fluid" alt="">
                        <div class="team-member-info">
                            <div class="know-more">
                                <a class="btn btn-round btn-fab btn-xs" href="javascript:void(0)"><i class="material-icons mdi mdi-arrow-right"></i><div class="ripple-container"></div></a>
                            </div>
                            <h2 class="subtitle">Jennifer L.</h2>
                            <p>Graphic Designer</p>
                            <div class="social-profiles">
                              <a href="#"><i class="mdi mdi-twitter"></i></a>
                              <a href="#"><i class="mdi mdi-facebook"></i></a>
                              <a href="#"><i class="mdi mdi-dribbble"></i></a>
                              <a href="#"><i class="mdi mdi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item">
                   <!-- Single Team Widget -->
                    <div class="single-team-widget">
                        <img src="assets/images/team/team3.jpg" class="img-fluid" alt="">
                        <div class="team-member-info">
                            <div class="know-more">
                                <a class="btn btn-round btn-fab btn-xs" href="javascript:void(0)"><i class="material-icons mdi mdi-arrow-right"></i><div class="ripple-container"></div></a>
                            </div>
                            <h2 class="subtitle">Tom Hanks.</h2>
                            <p>SEO Speacialist</p>
                            <div class="social-profiles">
                              <a href="#"><i class="mdi mdi-twitter"></i></a>
                              <a href="#"><i class="mdi mdi-facebook"></i></a>
                              <a href="#"><i class="mdi mdi-dribbble"></i></a>
                              <a href="#"><i class="mdi mdi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item">
                  <!-- Single Team Widget -->
                  <div class="single-team-widget">
                      <img src="assets/images/team/team4.jpg" class="img-fluid" alt="">
                      <div class="team-member-info">
                          <div class="know-more">
                              <a class="btn btn-round btn-fab btn-xs" href="javascript:void(0)"><i class="material-icons mdi mdi-arrow-right"></i><div class="ripple-container"></div></a>
                          </div>
                          <h2 class="subtitle">Emma Watson</h2>
                          <p>Head Of Ideas</p>
                          <div class="social-profiles">
                            <a href="#"><i class="mdi mdi-twitter"></i></a>
                            <a href="#"><i class="mdi mdi-facebook"></i></a>
                            <a href="#"><i class="mdi mdi-dribbble"></i></a>
                            <a href="#"><i class="mdi mdi-linkedin"></i></a>
                          </div>
                      </div>
                  </div>
                </div>
                <div class="item">
                  <!-- Single Team Widget -->
                  <div class="single-team-widget">
                      <img src="assets/images/team/team1.jpg" class="img-fluid" alt="">
                      <div class="team-member-info">
                          <div class="know-more">
                              <a class="btn btn-round btn-fab btn-xs" href="javascript:void(0)"><i class="material-icons mdi mdi-arrow-right"></i><div class="ripple-container"></div></a>
                          </div>
                          <h2 class="subtitle">Emma Watson</h2>
                          <p>Head Of Ideas</p>
                          <div class="social-profiles">
                            <a href="#"><i class="mdi mdi-twitter"></i></a>
                            <a href="#"><i class="mdi mdi-facebook"></i></a>
                            <a href="#"><i class="mdi mdi-dribbble"></i></a>
                            <a href="#"><i class="mdi mdi-linkedin"></i></a>
                          </div>
                      </div>
                  </div>
                </div>
                <div class="item">
                  <!-- Single Team Widget -->
                  <div class="single-team-widget">
                      <img src="assets/images/team/team2.jpg" class="img-fluid" alt="">
                      <div class="team-member-info">
                          <div class="know-more">
                              <a class="btn btn-round btn-fab btn-xs" href="javascript:void(0)"><i class="material-icons mdi mdi-arrow-right"></i><div class="ripple-container"></div></a>
                          </div>
                          <h2 class="subtitle">Emma Watson</h2>
                          <p>Head Of Ideas</p>
                          <div class="social-profiles">
                            <a href="#"><i class="mdi mdi-twitter"></i></a>
                            <a href="#"><i class="mdi mdi-facebook"></i></a>
                            <a href="#"><i class="mdi mdi-dribbble"></i></a>
                            <a href="#"><i class="mdi mdi-linkedin"></i></a>
                          </div>
                      </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Team Carousel End -->

      <!-- Full Carousel Slider Start -->
      <section class="section-padding">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h3 class="small-title">
                Full-width carousel
              </h3>
              <div id="carousel-full" class="owl-carousel owl-theme">
                <div class="item active">
                  <img class="img-fluid" src="assets/images/slider/slider-bg1.jpg" alt="">
                </div>
                <div class="item">
                 <img class="img-fluid"  src="assets/images/slider/slider-bg2.jpg" alt="">
                </div>
                <div class="item">
                  <img class="img-fluid"  src="assets/images/slider/slider-bg3.jpg" alt="">
                </div>
              </div>   
            </div>
          </div>
        </div>
      </section>
      <!-- Full Carousel Slider End -->
        
    <?php include "footer.php"; ?>
                    

    <!-- Back To Top -->
    <a href="#" class="back-to-top">
      <div class="ripple-container"></div>
      <i class="mdi mdi-arrow-up">
      </i>
    </a>
    
    <!-- Preloader -->
    <div id="preloader">
      <div class="loader" id="loader-1"></div>
    </div>
    <!-- End Preloader -->

    <!-- Optional JavaScript -->
    <script src="assets/js/jquery-min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.mixitup.min.js"></script>
    <script src="assets/js/jquery.inview.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/scroll-top.js"></script>
    <script src="assets/js/smoothscroll.js"></script>
    <script src="assets/js/material.min.js"></script>
    <script src="assets/js/ripples.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/form-validator.min.js"></script>
    <script src="assets/js/contact-form-script.min.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/jquery.vide.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/jquery.slicknav.js"></script>
    <script src="assets/js/main.js"></script>

  </body>
</html>