<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fastgrades
 */

?>

	<!-- START UPPER FOOTER -->
<footer style="background: url('<?php bloginfo('template_directory'); ?>/assets/images/footer-bg.png') no-repeat center;">
  <section class="footerm">
    <div class="cust-container1">
      <div class="upr-logosec">
        <div class="row align-items-center">
          <div class="col-md-9">
            <div class="left-lg-bef">
				
              <img class="w-100" src="<?php bloginfo('template_directory'); ?>/assets/images/f-lgbef.png">
            </div>
          </div>
          <div class="col-md-3">
            <div class="right-logo">
              <img class="w-100" src="<?php bloginfo('template_directory'); ?>/assets/images/f-logo.png">
            </div>
          </div>
        </div>
      </div>
      <div class="lower-gridsec">
        <div class="row">
          <div class="w-20">
            <div class="f-grd">
              <h6>About <span>fastgrades</span></h6>
					<?php
                            $argsNav = array(
                                'menu_class' => '',
                                'menu' => '(about-fastgrades-menu)',
                                'container' => false,
                                'theme_location' => 'about-fastgrades-menu'
                            );
                            wp_nav_menu($argsNav);
                            ?>
				
            </div>
          </div>
          <div class="w-20">
            <div class="f-grd">
              <h6>Using <span>fastgrades</span></h6>
              	<?php
                            $argsNav = array(
                                'menu_class' => '',
                                'menu' => '(using-fastgrades-menu)',
                                'container' => false,
                                'theme_location' => 'using-fastgrades-menu'
                            );
                            wp_nav_menu($argsNav);
                            ?>
            </div>
          </div>
          <div class="w-20">
            <div class="f-grd">
              <h6>Need some <span>help?</span></h6>
             	<?php
                            $argsNav = array(
                                'menu_class' => '',
                                'menu' => '(need-some-help)',
                                'container' => false,
                                'theme_location' => 'need-some-help'
                            );
                            wp_nav_menu($argsNav);
                            ?>
            </div>
          </div>
          <div class="w-20">
            <div class="f-grd">
              <h6>Popular <span>Subjects</span></h6>
             <?php
                            $argsNav = array(
                                'menu_class' => '',
                                'menu' => '(popular-subjects)',
                                'container' => false,
                                'theme_location' => 'popular-subjects'
                            );
                            wp_nav_menu($argsNav);
                            ?>
            </div>
          </div>
          <div class="w-20">
            <div class="f-grd">
              <h6>Get <span>In Touch</span></h6>
              <ul class="contsec">
                <li>
                  <img src="<?php bloginfo('template_directory'); ?>/assets/images/location.png">
                  <p>3 Chalfont Rd,Etobicoke,<br> Ontario,Canada</p>
                </li>
                <li>
                  <img src="<?php bloginfo('template_directory'); ?>/assets/images/phone.png">
                  <a href="#">613-293-7181</a>
                </li>
                <li>
                  <img src="<?php bloginfo('template_directory'); ?>/assets/images/email.png">
                  <a href="#">lukemckenz@yahoo.ca</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="f-copysocial">
    <ul class="soc-icos">
      <li>
        <a href=""><img src="<?php bloginfo('template_directory'); ?>/assets/images/facebook.png"></a>
      </li>
      <li>
        <a href=""><img src="<?php bloginfo('template_directory'); ?>/assets/images/twitter.png"></a>
      </li>
      <li>
        <a href=""><img src="<?php bloginfo('template_directory'); ?>/assets/images/linkedin.png"></a>
      </li>
      <li>
        <a href=""><img src="<?php bloginfo('template_directory'); ?>/assets/images/instagram.png"></a>
      </li>
    </ul>
     <p>Copyright © 2021. Design and Developed by designzcloud.com all Rights Reserved.</p>
  </section>
</footer>
<div class="modal fade" id="form" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header border-bottom-0">
        <h5 class="modal-title" id="exampleModalLabel">Fill The Form</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form>
        <div class="modal-body">
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" aria-describedby="naemHelp" placeholder="Enter Name">                    
          </div>
          <div class="form-group">
            <label for="phone">Phone</label>
            <input type="tel" class="form-control" id="phone" aria-describedby="phoneHelp" placeholder="Enter Phone No">                     
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter Email">                   
          </div>
          <div class="form-group">
            <label for="que">Question</label>
            <textarea class="form-control"></textarea>                  
          </div>
        </div>
        <div class="modal-footer border-top-0 d-flex justify-content-center">
          <button type="submit" class="web_btn">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>
</main>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/popper.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/bootstrap.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery-migrate-1.3.0.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/bootstrap.bundle.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/owl.carousel.min.js"></script>
<script type="text/javascript">
  $('.video').parent().click(function () {
    if($(this).children(".video").get(0).paused){
        $(this).children(".video").get(0).play();
        $(this).children(".playpause").fadeOut();
    }else{
       $(this).children(".video").get(0).pause();
        $(this).children(".playpause").fadeIn();
    }
  });
</script>
<script type="text/javascript">
  document.addEventListener("DOMContentLoaded", function(){
    
    window.addEventListener('scroll', function() {
         
      if (window.scrollY > 200) {
        document.getElementById('navbar_top').classList.add('fixed-top');
        // add padding top to show content behind navbar
        navbar_height = document.querySelector('.navbar').offsetHeight;
        document.body.style.paddingTop = navbar_height + 'px';
      } else {
        document.getElementById('navbar_top').classList.remove('fixed-top');
         // remove padding top from body
        document.body.style.paddingTop = '0';
      } 
    });
  });
</script>

<script type="text/javascript">
  $('#carouselExampleControls').carousel({
      pause: "false"
  });
</script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.prettyPhoto.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/main.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<script>
  baguetteBox.run('.tz-gallery');
</script>

<?php wp_footer(); ?>

</body>
</html>
