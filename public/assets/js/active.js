$(document).ready(function(){
	
	
	//Counter Up
	$('.counter').counterUp({
		delay: 10,
		time: 1000,
	});
		
	
	
	 ityped.init(document.querySelector("#ityped"), {
      /* showCursor: false, */
      strings: ['CSE & EEE', 'ECONOMICS & BBA', 'ENGLISH & LAW'],
	  typeSpeed: 55,
		startDelay: 200,
		backSpeed: 20,
		backDelay: 2000,
		loop: true,
		cursorChar: ".",
		
    })
	

	
	
		/* PortfolioIsotope Masonry */
		
		var $grid = $('.cat_active').isotope({
		  itemSelector: '.grid-item',
		  percentPosition: true,
		  masonry: {
			columnWidth: 1
		  }
		});		
		
/* 	 Portfolio Menu Isotope  */
		$('.cat_btn').on( 'click', 'button', function() {
		  var filterValue = $(this).attr('data-filter');
		  $grid.isotope({ filter: filterValue });
		});
			
	   /* Active Js */

		$('.cat_btn button').on('click', function(event) {
			$(this).siblings('.active').removeClass('active');
			$(this).addClass('active');
			event.preventDefault();
		});	
});		
	
	
		//Sticky Header
  $(window).on('scroll',function() {    
   var scroll = $(window).scrollTop();
   if (scroll < 20) {
    $(".sticky").removeClass("scroll-header");
   }else{
    $(".sticky").addClass("scroll-header");
   }
  }); 
  
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
 /*	
$('.latest_item').masonry({
        itemSelector: '.latest_recipe_item',
        columnWidth: 70
    });
	
	/* Onepage Active     
        $('.onepage_nav').onePageNav({
            currentClass : 'active',
            scrollSpeed : 1000,
            filter: ':not(.url)'
        }); 
		
		
	
			 var owl = $('.owl-carousel');
    owl.owlCarousel({
        loop: true,
        items: 1,
        thumbs: true,
        thumbImage: true,
        thumbContainerClass: 'owl-thumbs',
        thumbItemClass: 'owl-thumb-item'
    });  

	
	
	
	
		
		
		
new WOW().init();
	
	


*/

 