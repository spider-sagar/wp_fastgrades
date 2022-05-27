//this is only for demonstration of different fly-in directions
var changeClass = function(name){
  $('#search, #nav ul').removeAttr('class').addClass(name);
}




$("a[rel^='prettyPhoto']").prettyPhoto({social_tools:false});        


var owl = $(".product-slide");
		owl.owlCarousel({
			loop: true,
			autoplay : true,
			autoplayTimeout:2000,
			autoplayHoverPause:false,
			items: 4,
			margin:20,
			dots:false,
			nav: true,
			responsive: {
				0: {
					items:2,
				},
				600: {
					items:3,
				},
				1000: {
					items: 4,
				},
			},
		});


var owl = $(".h-serv-slide");
		owl.owlCarousel({
			loop: false,
			autoplay : false,
			autoplayTimeout:2000,
			autoplayHoverPause:false,
			margin:10,
			items: 5,
			pagination:true,
			dots:true,
			nav: false,
			responsive: {
				0: {
					items:1,
				},
				600: {
					items:1,
				},
				1000: {
					items: 5,
				},
			},
		});



jQuery(document).ready(function() {

   jQuery(".tutor-slider1").owlCarousel({
    autoplay: true,
    loop:true,  
   	navText:  false,
    dots: true,       
    nav : false,
    mouseDrag:true,
    margin : 10,
    dotsEach : true,
    lazyLoad : false,
    smartSpeed: 2000,
    items: 7,
    responsive:{
        0:{
            nav : true
        },
        767:{
            nav : true
        },
        768:{            
            nav : true
        },
        1000:{            
            nav : true
        }
    }
      }); 
                  
 }); 