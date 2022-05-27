<?php
/*
  Template Name: Home
 */

get_header();
?>

<!-- START BANNER -->
<section class="slider_sec position-relative">
   <div id="carouselExampleControls" class="carousel slide carousel-fade" data-ride="carousel" data-interval="3000">
      <div class="carousel-inner">
         <ol class="carousel-indicators">
            <li data-target="#carouselExampleControls" data-slide-to="0" class="active">01</li>
            <li data-target="#carouselExampleControls" data-slide-to="1">02</li>
            <li data-target="#carouselExampleControls" data-slide-to="2">03</li>
         </ol>
         <div class="carousel-item active">
			 <?php
			 // Custom WP query query
               $args_query = array(
	'post_type' => array('bannerimg'),
	'posts_per_page' => 1,
	'order' => 'DESC',);
      $query = new WP_Query( $args_query );
   if ( $query->have_posts() ) {
	while ( $query->have_posts() ) {
		$query->the_post();
			 ?>
  <?php $backgImg = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full'); ?>
            <img class="w-100" src="<?php echo $backgImg[0]; ?>">
            <div class="carousel-caption w-100">
               <div class="cust-container1">
                  <div class="row">
                     <div class="col-md-6">
                        <div class="caption-area position-relative text-left">
                           <h4><?php the_title('');?></h4>
                           <?php the_content(''); ?>   
                        </div>
                     </div>
                  </div>
               </div>
            </div>
			  <?php
            }
        } else {
            echo '<h2>No more posts</h2>';
        }
        wp_reset_postdata();
        ?>
         </div>
      </div>



      <div class="container position-relative">
         <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
         <span class="carousel-control-prev-icon" aria-hidden="true"></span>
         <span class="sr-only">Previous</span>
         </a>
         <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
         <span class="carousel-control-next-icon" aria-hidden="true"></span>
         <span class="sr-only">Next</span>
         </a>
      </div>
   </div>


<!-- 	keyfeture -->
	
</section>
<section class="bnr-btm">
   <div class="cust-container1">
      <div class="row">
		  <? 
		  // Custom WP query querykeyfuture
$args_querykeyfuture = array(
	'post_type' => array('keyfuture'),
	'posts_per_page' => 4,
	'order' => 'ASC',
);

$querykeyfuture = new WP_Query( $args_querykeyfuture );

if ( $querykeyfuture->have_posts() ) {
	while ( $querykeyfuture->have_posts() ) {
		$querykeyfuture->the_post();
		  ?>
        <div class="col-md-3">
           <div class="btm-stp">
			   <?php $keyfutur = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full'); ?>
              <img src="<?php echo $keyfutur[0]; ?>">
              <h6><?php the_title(''); ?></h6>
           </div>
        </div>
		  <?php
		  }
        } else {
            echo '<h2>No more posts</h2>';
        }
        wp_reset_postdata();
        ?> 
      </div>
   </div>
</section>



<section class="we-best py-5">
   <div class="cust-container1">
      <h4>Know Why We are <span>Best</span></h4>
      <div class="row">
		  <?php
		  // Custom WP query querywearebest
$args_querywearebest = array(
	'post_type' => array('wearebest'),
	'posts_per_page' => 3,
	'order' => 'ASC',
);

$querywearebest = new WP_Query( $args_querywearebest );

if ( $querywearebest->have_posts() ) {
	while ( $querywearebest->have_posts() ) {
		$querywearebest->the_post();
		  ?>
         <div class="col-md-4">
            <div class="single-bs-grid">
				 <?php $keyfutur = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full'); ?>
               <img src="<?php echo $keyfutur[0]; ?>">
               <a href="<?php echo(get_the_excerpt()); ?>"><p><? the_title('');?></p><img class="w-auto" src="<?php bloginfo('template_directory'); ?>/assets/images/go.png"></a>
            </div>
         </div>
		   <?php
		  }
        } else {
            echo '<h2>No more posts</h2>';
        }
        wp_reset_postdata();
        ?> 
      </div>
   </div>
</section>



<section class="tutors-sec">
   <div class="row m-0">
      <div class="col-md-12 p-0">
         <h2>Great Tutors Great <span>Learning</span></h2>
      </div>
      <div class="col-md-12 p-0">
         <div class="tutor-slider1 owl-carousel">
            
               <!--section 1 here -->
               <a class="t-grid" href="#">
                  <img src="<?php bloginfo('template_directory'); ?>/assets/images/hd1.png">
                  <h4>Christelle H</h4>
                  <div class="starsec">
                     <span class="fa fa-star"></span>
                     <span class="fa fa-star"></span>
                     <span class="fa fa-star"></span>
                     <span class="fa fa-star"></span>
                     <span class="fa fa-star"></span>
                  </div>
                  <h5>(BSC Hons)</h5>
                  <h6>Online tutoring</h6>
                  <div class="duty">
                     <h3>Private Tutor</h3>
                     <span>100 Students</span>
                  </div>
                  <p>Lpsum dolor sit amet, consect Etur adipiscing.</p>
                  <div class="dt-price">
                     <div class="lft-price">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/time.png">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/loc1.png">
                        <h3>$455 <span>$3499</span></h3>
                     </div>
                     <div class="pr-tag">
                        <img class="tg1" src="<?php bloginfo('template_directory'); ?>/assets/images/tag1.png">
                        <img class="tg2" src="<?php bloginfo('template_directory'); ?>/assets/images/tag2.png">
                     </div>
                  </div>
               </a>     
			 
			 
               <a class="t-grid" href="#">
                  <img src="<?php bloginfo('template_directory'); ?>/assets/images/hd2.png">
                  <h4>Christelle H</h4>
                  <div class="starsec">
                     <span class="fa fa-star"></span>
                     <span class="fa fa-star"></span>
                     <span class="fa fa-star"></span>
                     <span class="fa fa-star"></span>
                     <span class="fa fa-star"></span>
                  </div>
                  <h5>(BSC Hons)</h5>
                  <h6>Online tutoring</h6>
                  <div class="duty">
                     <h3>Private Tutor</h3>
                     <span>100 Students</span>
                  </div>
                  <p>Lpsum dolor sit amet, consect Etur adipiscing.</p>
                  <div class="dt-price">
                     <div class="lft-price">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/time.png">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/loc1.png">
                        <h3>$455 <span>$3499</span></h3>
                     </div>
                     <div class="pr-tag">
                        <img class="tg1" src="<?php bloginfo('template_directory'); ?>/assets/images/tag1.png">
                        <img class="tg2" src="<?php bloginfo('template_directory'); ?>/assets/images/tag2.png">
                     </div>
                  </div>
               </a>
               <a class="t-grid" href="#">
                  <img src="<?php bloginfo('template_directory'); ?>/assets/images/hd3.png">
                  <h4>Nancy O</h4>
                  <div class="starsec">
                     <span class="fa fa-star"></span>
                     <span class="fa fa-star"></span>
                     <span class="fa fa-star"></span>
                     <span class="fa fa-star"></span>
                     <span class="fa fa-star"></span>
                  </div>
                  <h5>(BSC Hons)</h5>
                  <h6>Online tutoring</h6>
                  <div class="duty">
                     <h3>Private Tutor</h3>
                     <span>100 Students</span>
                  </div>
                  <p>Lpsum dolor sit amet, consect Etur adipiscing.</p>
                  <div class="dt-price">
                     <div class="lft-price">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/time.png">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/loc1.png">
                        <h3>$455 <span>$3499</span></h3>
                     </div>
                     <div class="pr-tag">
                        <img class="tg1" src="<?php bloginfo('template_directory'); ?>/assets/images/tag1.png">
                        <img class="tg2" src="<?php bloginfo('template_directory'); ?>/assets/images/tag2.png">
                     </div>
                  </div>
               </a>
               <a class="t-grid" href="#">
                  <img src="<?php bloginfo('template_directory'); ?>/assets/images/hd4.png">
                  <h4>Alexander W</h4>
                  <div class="starsec">
                     <span class="fa fa-star"></span>
                     <span class="fa fa-star"></span>
                     <span class="fa fa-star"></span>
                     <span class="fa fa-star"></span>
                     <span class="fa fa-star"></span>
                  </div>
                  <h5>(BSC Hons)</h5>
                  <h6>Online tutoring</h6>
                  <div class="duty">
                     <h3>Private Tutor</h3>
                     <span>100 Students</span>
                  </div>
                  <p>Lpsum dolor sit amet, consect Etur adipiscing.</p>
                  <div class="dt-price">
                     <div class="lft-price">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/time.png">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/loc1.png">
                        <h3>$455 <span>$3499</span></h3>
                     </div>
                     <div class="pr-tag">
                        <img class="tg1" src="<?php bloginfo('template_directory'); ?>/assets/images/tag1.png">
                        <img class="tg2" src="<?php bloginfo('template_directory'); ?>/assets/images/tag2.png">
                     </div>
                  </div>
               </a>
               <a class="t-grid" href="#">
                  <img src="<?php bloginfo('template_directory'); ?>/assets/images/hd5.png">
                  <h4>Anushri S</h4>
                  <div class="starsec">
                     <span class="fa fa-star"></span>
                     <span class="fa fa-star"></span>
                     <span class="fa fa-star"></span>
                     <span class="fa fa-star"></span>
                     <span class="fa fa-star"></span>
                  </div>
                  <h5>(BSC Hons)</h5>
                  <h6>Online tutoring</h6>
                  <div class="duty">
                     <h3>Private Tutor</h3>
                     <span>100 Students</span>
                  </div>
                  <p>Lpsum dolor sit amet, consect Etur adipiscing.</p>
                  <div class="dt-price">
                     <div class="lft-price">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/time.png">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/loc1.png">
                        <h3>$455 <span>$3499</span></h3>
                     </div>
                     <div class="pr-tag">
                        <img class="tg1" src="<?php bloginfo('template_directory'); ?>/assets/images/tag1.png">
                        <img class="tg2" src="<?php bloginfo('template_directory'); ?>/assets/images/tag2.png">
                     </div>
                  </div>
               </a>
               <a class="t-grid" href="#">
                  <img src="<?php bloginfo('template_directory'); ?>/assets/images/hd6.png">
                  <h4>Pouya M</h4>
                  <div class="starsec">
                     <span class="fa fa-star"></span>
                     <span class="fa fa-star"></span>
                     <span class="fa fa-star"></span>
                     <span class="fa fa-star"></span>
                     <span class="fa fa-star"></span>
                  </div>
                  <h5>(BSC Hons)</h5>
                  <h6>Online tutoring</h6>
                  <div class="duty">
                     <h3>Private Tutor</h3>
                     <span>100 Students</span>
                  </div>
                  <p>Lpsum dolor sit amet, consect Etur adipiscing.</p>
                  <div class="dt-price">
                     <div class="lft-price">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/time.png">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/loc1.png">
                        <h3>$455 <span>$3499</span></h3>
                     </div>
                     <div class="pr-tag">
                        <img class="tg1" src="<?php bloginfo('template_directory'); ?>/assets/images/tag1.png">
                        <img class="tg2" src="<?php bloginfo('template_directory'); ?>/assets/images/tag2.png">
                     </div>
                  </div>
               </a>
               <a class="t-grid" href="#">
                  <img src="<?php bloginfo('template_directory'); ?>/assets/images/hd7.png">
                  <h4>Monique R</h4>
                  <div class="starsec">
                     <span class="fa fa-star"></span>
                     <span class="fa fa-star"></span>
                     <span class="fa fa-star"></span>
                     <span class="fa fa-star"></span>
                     <span class="fa fa-star"></span>
                  </div>
                  <h5>(BSC Hons)</h5>
                  <h6>Online tutoring</h6>
                  <div class="duty">
                     <h3>Private Tutor</h3>
                     <span>100 Students</span>
                  </div>
                  <p>Lpsum dolor sit amet, consect Etur adipiscing.</p>
                  <div class="dt-price">
                     <div class="lft-price">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/time.png">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/loc1.png">
                        <h3>$455 <span>$3499</span></h3>
                     </div>
                     <div class="pr-tag">
                        <img class="tg1" src="<?php bloginfo('template_directory'); ?>/assets/images/tag1.png">
                        <img class="tg2" src="<?php bloginfo('template_directory'); ?>/assets/images/tag2.png">
                     </div>
                  </div>
               </a>
            
         </div>
         
      </div>
   </div>
</section>


<section class="w-subjsec" style="background: url('<?php bloginfo('template_directory'); ?>/assets/images/crs-bg.png') no-repeat center;">
   <div class="cust-container1">
      <div class="row">
         <div class="col-md-12">
            <div class="w-subj-head">
               <h5>WHAT SUBJECTS</h5>
               <h6>Do you want to improve in?</h6>
               <p>Middle School, High School, College and University.</p>
            </div>
         </div>
         <div class="col-md-3">
            <div class="subj1">
				<?php 
				// Custom WP query querysubject
           $args_querysubject = array(
	'post_type' => array('whatsubjects'),
	'posts_per_page' => 2,
	'order' => 'ASC',
);
$querysubject = new WP_Query( $args_querysubject );

if ( $querysubject->have_posts() ) {
	while ( $querysubject->have_posts() ) {
		$querysubject->the_post();
				?>
               <a href="<?php echo(get_the_excerpt()); ?>">
				   <?php $keyfutur = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full'); ?>
                  <img src="<?php echo $keyfutur[0]; ?>">
                  <p><?php the_title('');?></p>
               </a>
				 <?php
		  }
        } else {
            echo '<h2>No more posts</h2>';
        }
        wp_reset_postdata();
        ?>	
            </div>
         </div>
         <div class="col-md-6">
            <div class="main-simg">
               <img class="w-100" src="<?php bloginfo('template_directory'); ?>/assets/images/crs-main.png">
            </div>
         </div>
         <div class="col-md-3">
            <div class="subj2">
				<?php 
				// Custom WP query querysubject
           $args_querysubject = array(
	'post_type' => array('whatsubjects'),
	'posts_per_page' => 2,
	'order' => 'DESC',
);
$querysubject = new WP_Query( $args_querysubject );

if ( $querysubject->have_posts() ) {
	while ( $querysubject->have_posts() ) {
		$querysubject->the_post();
				?>
               <a href="<?php echo(get_the_excerpt()); ?>">
				   <?php $keyfutur1 = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full'); ?>
                  <img src="<?php echo $keyfutur1[0]; ?>">
                  <p><?php the_title(''); ?></p>
               </a>
				 <?php
		  }
        } else {
            echo '<h2>No more posts</h2>';
        }
        wp_reset_postdata();
        ?>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="f-diff">
   <div class="cust-container1">
      <div class="row">
         <div class="col-md-12">
            <div class="m-cont">
               <h5>The <span><img src="<?php bloginfo('template_directory'); ?>/assets/images/fglogo.png"></span> Difference</h5>
               <div class="lap-img">
                  <img src="<?php bloginfo('template_directory'); ?>/assets/images/laptop.png">
               </div>
               <a href="#">Browse Tutor</a>
            </div>
         </div>
      </div>
   </div>
</section>
<?php
get_footer();