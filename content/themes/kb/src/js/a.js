/**
*
* Functions that need to run on document ready
* or need to load before other functions.
*
*/

var $j = jQuery.noConflict();

$j( document ).ready(function(){


  /*
  * 
  *  POPUP NEWSLETTER CONTROLLERS
  *
  */

  var cookie = getCookie('newsletter');

  if ( !cookie ) {
    $j('.newsletter-popup').addClass('newsletter-opacity');
    setCookie('newsletter','signedup', 30);
  }

  $j('.newsletter-toggle').click( function() {
    $j('.newsletter-popup').removeClass('newsletter-opacity');
  });


  /*
  * 
  *  NAVIGATION CONTROLLERS
  *
  */
  
  // Checks if page has large feature image (manual)
  var isIndex = $j('.navigation').hasClass('index');
  var isWholesale = $j('.navigation').hasClass('wholesale');
  var isLearn = $j('.navigation').hasClass('learn');

  if ( isIndex || isWholesale || isLearn ) {

    // remove styles from navigation
    $j('.navigation').addClass('white');

    var featureHeight = $j('.feature').height();
    var navHeight = $j('.navigation').height();
    var marker = featureHeight - navHeight;
   
    // monitor the page scroll location
    $j( window ).scroll(function(){
      var currentPosition = $j( window ).scrollTop();

      if ( currentPosition >= marker ){
        $j('.navigation').addClass('opaque');
        $j('.navigation').removeClass('white');
      }
      if ( currentPosition < marker ){
        $j('.navigation').removeClass('opaque');
        $j('.navigation').addClass('white');
      }  
    });

  // If no feature, add class opaque
  } else {
    $j('.navigation').addClass('opaque');
  }


  /*
  * 
  *  POPUP MENU CONTROLLERS
  *
  */

  // Toggles Popup Menu
  $j('.menu-toggle').click(function(e){
    e.preventDefault();
    var opacity = parseInt( $j('.menu-popup').css("opacity") );
    if (opacity === 0) {
      $j('.menu-popup').css({"opacity": "1", "z-index": "500"});
    } else {
      $j('.menu-popup').removeAttr("style");
    }
  });


  /*
  * 
  *  EMAIL SUBMISSION CONTROLLERS 
  *  FOR DEV ENVIRONMENT ONLY
  *
  */

  
  // $j('form').submit( function(e) {
  //   e.preventDefault();
  //   var successMessagePopup = "<p class='success'>Thank you for signing up. We'll be in touch shortly!</p>";
  //   var successMessageFooter = "<h3>Thank you for signing up.</h3>";
  //   $j('form').remove();
  //   $j('.form-message').remove();
  //   $j('.newsletter-container').append(successMessagePopup);
  //   $j('.col3 .top').append(successMessageFooter);
  // });

});




