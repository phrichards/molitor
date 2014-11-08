$(function(){
	$('nav').scrollToFixed({
		dontSetWidth: true,
	});

  var stickyNav = function(){
    $(window).scroll(function() {
      if ($(window).scrollTop() > 650) {
        $('.lettermark').fadeIn();
      } else {
        $('.lettermark').fadeOut();
      }
    });
  };

	if ($('body').hasClass('blog') || $('body').hasClass('page-template-portfolio-php') || $('body').hasClass('single-post')) {
    $('.lettermark').css('display', 'block');
  } else {
    stickyNav();
  }


});