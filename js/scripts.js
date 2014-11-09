$(function(){
	
  enquire.register("screen and (max-width:940px)", {
    match: function(){
      $('.header-logo').attr('src', 'wp-content/themes/molitor/img/phrichards-small.png');
    },
    unmatch: function(){
      $('.header-logo').attr('src', 'wp-content/themes/molitor/img/phrichards-big.png');
    }
  });

  enquire.register("screen and (max-width:768px)", {
    match: function(){
      $('.header-logo').attr('src', 'wp-content/themes/molitor/img/phrichards-smaller.png');
      $('nav').addClass('768-nav');
    },
    unmatch: function(){
      $('.header-logo').attr('src', 'wp-content/themes/molitor/img/phrichards-small.png');
    }
  });

  enquire.register("screen and (max-width:640px)", {
    match: function(){
      $('.header-logo').attr('src', 'wp-content/themes/molitor/img/phrichards-smallest.png');
    },
    umatch: function(){
      $('.header-logo').attr('src', 'wp-content/themes/molitor/img/phrichards-smaller.png');
    }
  });

  enquire.register("screen and (max-width:480px)", {
    match: function(){
      $('.header-logo').attr('src', 'wp-content/themes/molitor/img/header-lettermark.png');
    },
    unmatch: function(){
      $('.header-logo').attr('src', 'wp-content/themes/molitor/img/phrichards-smallest.png');
    }
  });

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