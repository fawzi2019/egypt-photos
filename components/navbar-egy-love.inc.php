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

<?php /*
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
                  <!--   <?php  //mdb_bootstrap_menu() ?> -->
                   <?php wp_nav_menu(array('theme_location' => 'primary')); ?>



                </li>
            </ul>
 */?>            
            <?php  mdb_bootstrap_menu() ?>

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
      <!-- Start Slider -->
<div class="slider">
    <div id="main-slider" class="carousel slide" data-ride="carousel">
      
        <div class="carousel-inner">
          <!-- $value = get_field( "text_field" ); -->
            <?php 

           /* $welcome_h1 = get_field( "welcome_h1" ); 

             */?>
           <!--  <h1> <?php// echo $welcome_h1; ?></h1>
 -->
           <!-- <h1>Fall In Love With <span>Egypt </span><br /><br />Vist <span>Egypt </span>Free!</h1>  -->
            <div class="overlay">
              
            </div>
            <div class="carousel-item carousel-one active">
             <img class="d-block w-100" src="<?php echo get_template_directory_uri() . '/img/images/elite-04.jpg' ?>" alt="First slide"> 
            </div>
            <div class="carousel-item carousel-two">
              <img class="d-block w-100" src="<?php echo get_template_directory_uri() . '/img/images/egy-12.jpg' ?>" alt="First slide">
            </div>
            <div class="carousel-item carousel-three">
              <img class="d-block w-100" src="<?php echo get_template_directory_uri() . '/img/images/elite03.jpg' ?>" alt="First slide">
            </div>
            
            <div class="carousel-item carousel-four">
              <img class="d-block w-100" src="<?php echo get_template_directory_uri() . '/img/images/beautiful-egypt-1.jpg' ?>" alt="First slide">
            </div>
            <div class="carousel-item carousel-five">
              <img class="d-block w-100" src="<?php echo get_template_directory_uri() . '/img/images/beautiful-egypt-2.jpg' ?>" alt="First slide">
            </div>
            <div class="carousel-item carousel-sex">
             <img class="d-block w-100" src="<?php echo get_template_directory_uri() . '/img/images/beautiful-egypt-3.jpg' ?>" alt="First slide"> 
            </div>
            <div class="carousel-item carousel-sevin">
              <img class="d-block w-100" src="<?php echo get_template_directory_uri() . '/img/images/val-of-the-kings.jpg' ?>" alt="First slide">
            </div>
          

        </div>
        <ol class="carousel-indicators">
          <li data-target="#main-slider" data-slide-to="0" class="active"></li>
          <li data-target="#main-slider" data-slide-to="1"></li>
          <li data-target="#main-slider" data-slide-to="2"></li>
          <li data-target="#main-slider" data-slide-to="3"></li>
          <li data-target="#main-slider" data-slide-to="4"></li>
          <li data-target="#main-slider" data-slide-to="5"></li>
          <li data-target="#main-slider" data-slide-to="6"></li>
        </ol>
        
      </div>
  </div>

  <!-- End Slider -->
  <!-- Start Menus 
  <div class="container menus">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="<?php //bloginfo('url') ?>"> <?php //bloginfo('name') ?></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <?php// my_theme_main_menu();?>
        
       <ul class="navbar-nav mr-auto"> 
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Dropdown
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>
          
        </ul>
        
      </div>
  </nav>
</div>
End Menus -->