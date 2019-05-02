$(document).ready(function(){
	
 $(".header_right ul li").click(function(){
    $(".header_right ul li ul ").toggle();
})

	

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
  
 