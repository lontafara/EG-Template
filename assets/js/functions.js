jQuery( document ).ready(function() {
 
    jQuery(window).scroll(function(){
    jQuery('.topnav').toggleClass('bg-white navbar-light shadow-sm scrollednav py-0', jQuery(this).scrollTop() > 50);
    });

    jQuery('#modal_newsletter').on('show.bs.modal', function () {
      jQuery('.downloadzip')[0].click();
    });

    jQuery('.dropdown-toggle.nav-link ').attr({
    id:"navbarDropdown", 
    role:"button",
    "data-toggle":"dropdown",
    "aria-haspopup":"true",
     "aria-expanded":"false"// attributes which contain dash(-) should be covered in quotes.
    });
    jQuery( ".dropdown-toggle.nav-link" ).parent().addClass( " dropdown " );

    jQuery('.carousel').on('slide.bs.carousel', function (event) {
      var height = jQuery(event.relatedTarget).height();
      var $innerCarousel = jQuery(event.target).find('.carousel-inner');
      $innerCarousel.animate({
        height: height
      });
    });
    jQuery(function () {
      jQuery('[data-toggle="popover"]').popover()
    })
    jQuery('.popover-dismiss').popover({
      trigger: 'focus'
    })
    jQuery(function () {
      jQuery('[data-toggle="tooltip"]').tooltip()
    })




    
});




