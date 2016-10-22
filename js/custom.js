/*
    =======
        Menu Animation Mobile
    =======
*/

jQuery(document).ready(function(){
   jQuery('#hamburgerMenuBtn').click(function(){
      jQuery(this).toggleClass('open');
      jQuery('.extendebleMenus').toggleClass('active');
   });     
});


jQuery('#contactForm_hi input').click(function()
{
    if( jQuery(this).val().length > 5 ) {
        jQuery(this).next('label').children('.fa').addClass('done');
        alert('vaaa');
    }
});




jQuery(document).ready(function($){
    function fullscreen(){
        jQuery('#home').css({
            height: jQuery(window).height()
        });
      
//        jQuery('.introducer').css({
//            height: jQuery(window).height()
//        });
      
    }
  
    fullscreen();

  jQuery(window).resize(function() {
       fullscreen();         
    });

});











