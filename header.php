<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fastgrades
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="icon" href="<?php bloginfo('template_directory'); ?>/assets/images/favicon.png" type="image/gif" sizes="16x16">  
    <title>LearnDotCom</title>
    <link href="<?php bloginfo('template_directory'); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/font-awesome.min.css" type="text/css">
    <link href="<?php bloginfo('template_directory'); ?>/assets/css/owl.carousel.min.css" rel="stylesheet">
    <link href="<?php bloginfo('template_directory'); ?>/assets/css/owl.theme.default.min.css" rel="stylesheet">
    <link href="<?php bloginfo('template_directory'); ?>/assets/css/animation.css" rel="stylesheet">
    <link href="<?php bloginfo('template_directory'); ?>/assets/css/prettyPhoto.css" rel="stylesheet"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://rawgit.com/LeshikJanz/libraries/master/Bootstrap/baguetteBox.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    
      <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
	
	

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<main role="main">
    <!-- START NAVBAR -->
<header>
    <div class="top-header" id="navbar_top">
       <div class="container-fluid">
           <div class="row align-items-center">
               <div class="col-md-12 d-flex justify-content-between align-items-center"> 
                   <div class="left-head d-flex justify-content-start align-items-center">
                     <!-- Website Logo Code here -->
                      <a href="<?php echo get_option('home'); ?>" class="logo">
          <?php 
            $custom_logo_id = get_theme_mod( 'custom_logo' );
            $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
            if ( has_custom_logo() ) {
                echo '<img src="'. esc_url( $logo[0] ) .'">';
            } else {
                echo '<h1>'. get_bloginfo( 'name' ) .'</h1>';
            }
         ?>
      </a>
					   
					   
					   
                       <div class="dropdown subjt">
                          <button class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Subject
                          </button>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                          </div>
                       </div>
                       <div class="scsec-hd">
                            <form action="">
                              <input type="text" placeholder="What do you want to learn?" name="search">
                              <button type="submit"><img src="<?php bloginfo('template_directory'); ?>/assets/images/search.png"></button>
                            </form>
                       </div>
                   </div>                   
                   <div class="right-head d-flex justify-content-end align-items-center">
                       <div class="nav-mnsec">
                           <a href="">How to join</a>
                           <a href="">Find a Tutor</a>
                           <a href="">Subjects</a>
                       </div>
                       <div class="notif-sec">
                           <a href="#"><img src="<?php bloginfo('template_directory'); ?>/assets/images/bell.png"><span>02</span></a>
                       </div>
                       <div class="logreg-btns">
                           <a href="#">Sign in</a>
                           <a href="#">Register</a>
                       </div> 
                       <div class="dropdown lang1">
                          <button class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/images/lang.png">
                          </button>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">English</a>
                            <a class="dropdown-item" href="#">French</a>
                          </div>
                       </div>
                   </div>
               </div>              
           </div>
       </div> 
    </div>
</header>  
  <div id="myOverlay" class="overlay">
    <span class="closebtn" onclick="closeSearch()" title="Close Overlay">×</span>
    <div class="overlay-content">
      <form action="/action_page.php">
        <input type="text" placeholder="Search.." name="search">
        <button type="submit"><i class="fa fa-search"></i></button>
      </form>
    </div>
  </div>
