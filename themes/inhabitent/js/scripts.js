
// creating animation on search field 

(function( $ ) {
  //shows the search input field on click 
  $('.icon-search').on('click', function(event){
    event.preventDefault();
    $('.header-search .search-field').animate({width: 200}).focus();
  });
  //hides the search input field when not in focus
  $('.header-search .search-field').on('focusout', function(){
    $(this).animate({width: 0});
  });
  



//changing header colors when scrolling past the banner 
     
 //Set Variables with Banner images 
  var homeBanner = $("body").hasClass("home");
  var aboutBanner = $("body").hasClass("page-id-128");
 
 //when scrolling pass one of these banner images it will reverse the nav 
  if(homeBanner || aboutBanner){
    $(".site-header").addClass("reverse-site-header");
    $(window).scroll(function() {
      var scroll = $(window).scrollTop();
      var height = $(window).height();
      if (scroll >= height & (homeBanner|| aboutBanner)) {
          $(".site-header").removeClass("reverse-site-header");
      } else {
          $(".site-header").addClass("reverse-site-header");
      }
    });
  }
})( jQuery );
