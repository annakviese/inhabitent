
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
  
})( jQuery );

