

  jQuery('.drawer-icon, .drawer-content__item').on('click', function(e) {
    e.preventDefault();

  //   alert('click');
    jQuery('.drawer-icon').toggleClass('is-active');
    jQuery('.drawer-content').toggleClass('is-active');
    jQuery('.drawer-bg').toggleClass('is-active');
    jQuery('.drawer__logo').toggleClass('is-active');
    

    return false;
});


jQuery(window).on('scroll', function(){
    if ( 100 < jQuery(this).scrollTop()) {
      jQuery('#page-top').addClass('is-show');
    } else {
      jQuery('#page-top').removeClass('is-show');
    }
  });
  jQuery('a[href^="#"]').on('click', function() {
  
    var id = jQuery(this).attr('href');
    var position = 0;
    if ( id !='#') {
      var position = jQuery(id).offset().top;
    }
    
  jQuery('html,body').animate({
      scrollTop: position
  },
  300);
  });
  
  