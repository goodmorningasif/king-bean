/**
*
* A is for Airplane
*
*/

var $j = jQuery.noConflict();

$j( document ).ready(function(){
  
  
  $j('.menu-toggle').click(function(e){
    e.preventDefault();
  	var opacity = parseInt( $j('.menu-popup').css("opacity") );
  	if (opacity === 0) {
      $j('.menu-popup').css({"opacity": "1", "z-index": "500"});
  	} else {
      $j('.menu-popup').removeAttr("style");
  	}
  });

});