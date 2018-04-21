<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Accordion | Material</title>

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
                    <a class="dropdown-item active" href="accordion.php">Accordions</a>
                    <a class="dropdown-item" href="pricing.php">Pricing Tables</a>
                    <a class="dropdown-item" href="buttons.php">Buttons</a>
                    <a class="dropdown-item" href="icons.php">Icons</a>
                    <a class="dropdown-item" href="carousel.php">Carousel</a>
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
                  <a class="active" href="accordion.php">Accordions</a>
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
                    <a href="carousel.php">Carousel</a>
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
                              <h1 class="page-title text-center">Accordion</h1>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <!-- Page Titile Area End -->

      <!-- Accirdion Section -->
      <section class="Material-accordion-section section-padding">
        <div class="container">
          <div class="row">
            <div class="col-md-6 wow animated fadeInUp" data-wow-delay=".2s">
              <h3 class="small-title">
                Default Color
              </h3>
              <div class="panel-group Material-default-accordion" id="Material-accordion" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default mb-3">
                  <div class="panel-heading" role="tab" id="headingOne">
                    <h4 class="panel-title">
                      <a role="button" data-toggle="collapse" data-parent="#Material-accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        About Material Agency
                      </a>
                    </h4>
                  </div>
                  <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                    <div class="panel-body">
                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                  </div>
                </div>
                <div class="panel panel-default mb-3">
                  <div class="panel-heading" role="tab" id="headingTwo">
                    <h4 class="panel-title">
                      <a class="collapsed" role="button" data-toggle="collapse" data-parent="#Material-accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        What We Do
                      </a>
                    </h4>
                  </div>
                  <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                    <div class="panel-body">
                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                  </div>
                </div>
                <div class="panel panel-default mb-3">
                  <div class="panel-heading" role="tab" id="headingThree">
                    <h4 class="panel-title">
                      <a class="collapsed" role="button" data-toggle="collapse" data-parent="#Material-accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Services We Provide
                      </a>
                    </h4>
                  </div>
                  <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                    <div class="panel-body">
                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-6 wow animated fadeInUp" data-wow-delay=".4s">
              <h3 class="small-title">
                Default Color
              </h3>
              <div class="panel-group Material-default-accordion" id="Material-accordion" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default mb-3">
                  <div class="panel-heading" role="tab" id="headingOne">
                    <h4 class="panel-title">
                      <a role="button" data-toggle="collapse" data-parent="#Material-accordion" href="#collapseOne1" aria-expanded="true" aria-controls="collapseOne">
                        <i class="mdi mdi-checkbox-multiple-blank"></i>
                        About Material Agency
                      </a>
                    </h4>
                  </div>
                  <div id="collapseOne1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                    <div class="panel-body">
                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                  </div>
                </div>
                <div class="panel panel-default mb-3">
                  <div class="panel-heading" role="tab" id="headingTwo">
                    <h4 class="panel-title">
                      <a class="collapsed" role="button" data-toggle="collapse" data-parent="#Material-accordion" href="#collapseTwo1" aria-expanded="false" aria-controls="collapseTwo">
                        <i class="mdi mdi-briefcase-check"></i>
                        What We Do
                      </a>
                    </h4>
                  </div>
                  <div id="collapseTwo1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                    <div class="panel-body">
                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                  </div>
                </div>
                <div class="panel panel-default mb-3">
                  <div class="panel-heading" role="tab" id="headingThree">
                    <h4 class="panel-title">
                      <a class="collapsed" role="button" data-toggle="collapse" data-parent="#Material-accordion" href="#collapseThree1" aria-expanded="false" aria-controls="collapseThree">
                        <i class="mdi mdi-account-multiple"></i>
                        Services We Provide
                      </a>
                    </h4>
                  </div>
                  <div id="collapseThree1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                    <div class="panel-body">
                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="mt-5"></div>

          <div class="row">
            <div class="col-md-6 wow animated fadeInUp" data-wow-delay=".2s">
              <h3 class="small-title">
                Dark Color
              </h3>
              <div class="panel-group Material-default-accordion Material-accordion-2" id="Material-accordion" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default mb-3">
                  <div class="panel-heading" role="tab" id="headingOne2">
                    <h4 class="panel-title">
                      <a role="button" data-toggle="collapse" data-parent="#Material-accordion2" href="#collapseOne2" aria-expanded="true" aria-controls="collapseOne2">
                        <i class="mdi mdi-briefcase-check"></i>
                        What People say about us
                      </a>
                    </h4>
                  </div>
                  <div id="collapseOne2" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne2">
                    <div class="panel-body">
                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                  </div>
                </div>
                <div class="panel panel-default mb-3">
                  <div class="panel-heading" role="tab" id="headingTwo2">
                    <h4 class="panel-title">
                      <a class="collapsed" role="button" data-toggle="collapse" data-parent="#Material-accordion2" href="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo2">
                        <i class="mdi mdi-information"></i>
                        Frequently asked questions
                      </a>
                    </h4>
                  </div>
                  <div id="collapseTwo2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo2">
                    <div class="panel-body">
                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                  </div>
                </div>
                <div class="panel panel-default mb-3">
                  <div class="panel-heading" role="tab" id="headingThree2">
                    <h4 class="panel-title">
                      <a class="collapsed" role="button" data-toggle="collapse" data-parent="#Material-accordion2" href="#collapseThree2" aria-expanded="false" aria-controls="collapseThree2">
                        <i class="mdi mdi-checkbox-multiple-blank"></i>
                        Know more about us
                      </a>
                    </h4>
                  </div>
                  <div id="collapseThree2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree2">
                    <div class="panel-body">
                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-6 wow animated fadeInUp" data-wow-delay=".4s">
              <h3 class="small-title">
                Dark Color
              </h3>
              <div class="panel-group Material-default-accordion Material-accordion-2" id="Material-accordion2" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default mb-3">
                  <div class="panel-heading" role="tab" id="headingOne3">
                    <h4 class="panel-title">
                      <a role="button" data-toggle="collapse" data-parent="#Material-accordion2" href="#collapseOne3" aria-expanded="true" aria-controls="collapseOne3">
                        What People say about us
                      </a>
                    </h4>
                  </div>
                  <div id="collapseOne3" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne3">
                    <div class="panel-body">
                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                  </div>
                </div>
                <div class="panel panel-default mb-3">
                  <div class="panel-heading" role="tab" id="headingTwo3">
                    <h4 class="panel-title">
                      <a class="collapsed" role="button" data-toggle="collapse" data-parent="#Material-accordion3" href="#collapseTwo3" aria-expanded="false" aria-controls="collapseTwo3">
                        Frequently asked questions
                      </a>
                    </h4>
                  </div>
                  <div id="collapseTwo3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo3">
                    <div class="panel-body">
                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                  </div>
                </div>
                <div class="panel panel-default mb-3">
                  <div class="panel-heading" role="tab" id="headingThree3">
                    <h4 class="panel-title">
                      <a class="collapsed" role="button" data-toggle="collapse" data-parent="#Material-accordion3" href="#collapseThree3" aria-expanded="false" aria-controls="collapseThree3">
                        Know more about us
                      </a>
                    </h4>
                  </div>
                  <div id="collapseThree3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree3">
                    <div class="panel-body">
                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </section>
      <!-- Accirdion Section End -->

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