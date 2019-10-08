<!-- Navbar -->
<nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
    <div class="container">

        <!-- Brand -->
        <a class="navbar-brand pt-0 waves-effect" href="">
            <img src="<?php echo get_template_directory_uri() . '/img/images/foot.png' ?>" alt="MDB logo">
        </a>

        <!-- Collapse -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Links -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <!-- Left -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link waves-effect" href="#">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle waves-effect" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">Categories </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="">Marketing Automation</a>
                        <a class="dropdown-item" href="">Web Push Notifications</a>
                        <a class="dropdown-item" href="">Analytics & Tag Manager</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link waves-effect" href="https://mdbootstrap.com/docs/jquery/getting-started/download/" target="_blank">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link waves-effect" href="https://mdbootstrap.com/education/bootstrap/" target="_blank">Link</a>
                </li>
            </ul>

            <!-- Right -->
            <ul class="navbar-nav nav-flex-icons">
                <li class="nav-item">
                    <a href="https://www.facebook.com/mdbootstrap" class="nav-link waves-effect" target="_blank">
                        <i class="fa fa-facebook-f"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="https://twitter.com/MDBootstrap" class="nav-link waves-effect" target="_blank">
                        <i class="fa fa-twitter"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="https://github.com/mdbootstrap/bootstrap-material-design" class="nav-link border border-light rounded waves-effect"
                        target="_blank">
                        <i class="fa fa-github mr-2"></i>MDB GitHub
                    </a>
                </li>
            </ul>

        </div>

    </div>
</nav>
<!-- Navbar -->
  <hr class="my-5">
<!-- =================================================================================== -->


<!--Section: Gallery-->
<section id="gallery">

    <!-- Heading -->
    <h2 class="mb-5 font-weight-bold text-center category-title">
        <?php single_cat_title() ?></h2>

    <!--Grid row-->
    <div class="row ">

        <!--Grid column-->
<!--        <div class="col-md-6 mb-4">



        </div> -->
      <!--Grid column-->
<div class="col-md-6 mb-4">

  <!--Carousel Wrapper-->
  <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
    <!--Indicators-->
    <ol class="carousel-indicators">
      <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-1z" data-slide-to="1"></li>
      <li data-target="#carousel-example-1z" data-slide-to="2"></li>
    </ol>
    <!--/.Indicators-->
    <!--Slides-->
    <div class="carousel-inner" role="listbox">
      <!--First slide-->
      <div class="carousel-item active">
        <img class="d-block w-100" src="<?php echo get_template_directory_uri() . '/img/images/Hot air balloon rides in Luxor-1.png' ?>" alt="First slide">
      </div>
      <!--/First slide-->
      <!--Second slide-->
      <div class="carousel-item">
        <img class="d-block w-100" src="<?php echo get_template_directory_uri() . '/img/images/gettyimages-nile.jpg' ?>" alt="Second slide">
      </div>
      <!--/Second slide-->
      <!--Third slide-->
      <div class="carousel-item">
        <img class="d-block w-100" src="<?php echo get_template_directory_uri() . '/img/images/traveling on camel.png' ?>" alt="Third slide">
      </div>
      <!--/Third slide-->
    </div>
    <!--/.Slides-->
    <!--Controls-->
    <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
    <!--/.Controls-->
  </div>
  <!--/.Carousel Wrapper-->

</div>
<!--Grid column-->
<div class="col-md-6">

    <!--Excerpt-->
    <a href="" class="teal-text">
        <h6 class="pb-1"><i class="fa fa-heart"></i><strong> Lifestyle </strong></h6>
    </a>
    <span class="mb-1"><strong>Articles: 20</strong></span>
    <div class="category-description">
    <?php echo category_description(); ?>
        
    </div>

   
    <p>by <a><strong>Jessica Clark</strong></a>, 26/08/2016</p>
    <a class="btn btn-primary btn-md">Read more</a>

</div>
<!--Grid column-->

    </div>
    <!--Grid row-->

</section>
<!--Section: Gallery-->

        <hr class="my-5">