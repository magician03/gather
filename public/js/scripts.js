

(function($){
  $(function(){

    
$(".button-collapse").sideNav();
$('.button-collapse').sideNav({
menuWidth: 200, // Default is 240
edge: 'left', // Choose the horizontal origin
closeOnClick: true // Closes side-nav on <a> clicks, useful for Angular/Meteor
}
);
$(document).ready(function() {
    $('select').material_select();
  });
  
   $(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal-trigger').leanModal();
  });
    function form_submit() {
      this.disabled = true;
    document.getElementById("search_form").submit();
   }    
$('.carousel.carousel-slider').carousel({full_width: true});
  }); // end of document ready
})(jQuery); // end of jQuery name space
