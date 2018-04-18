$(function () {
	
	$('.service_button').click(function () {
		$(this).children('.info-window').toggleClass('active');
		$('.info-window').not($(this).children()).removeClass('active');
	});
	
	// REMOVE EMPTY P TAGS
	$('p').each(function() {
	    var $this = $(this);
	    if($this.html().replace(/\s|&nbsp;/g, '').length == 0)
	        $this.remove();
	});
	
	if($.trim($(".et-social-icons").html())=='') {
		$('.et-social-icons').css('margin', '0');
	}
	
	function pageHeight() {
		$('#page-container').css('padding-top', $('#main-header').height());
	}
	
	function navHeight() {
		$('#top-menu').css('height', $('#main-header').height());
	}
	
	$(document).ready(function () {
		pageHeight();
		navHeight();
		
		$('.slick-bg').slick({
		  dots: true,
		  autoplay: true,
		  arrows: true
		});
		
		$('.et_pb_scroll_top.et-pb-icon').insertAfter('#page-container');
	});
	
	$(window).resize(function () {
		pageHeight();
		navHeight();
	});
	
	// HIDE/SHOW HEADER ON SCROLL
	var didScroll;
	var lastScrollTop = 0;
	var delta = 5;
	var navbarHeight = $('header').outerHeight();
	
	$(window).scroll(function(event){
	    didScroll = true;
	});
	
	setInterval(function() {
	    if (didScroll) {
	        hasScrolled();
	        didScroll = false;
	    }
	}, 250);
	
	function hasScrolled() {
	    var st = $(this).scrollTop();
	    
	    // Make sure they scroll more than delta
	    if(Math.abs(lastScrollTop - st) <= delta)
	        return;
	    
	    // If they scrolled down and are past the navbar, add class .nav-up.
	    // This is necessary so you never see what is "behind" the navbar.
	    if (st > lastScrollTop && st > navbarHeight){
	        // Scroll Down
	        $('header, .hamburger').removeClass('nav-down').addClass('nav-up');
	    } else {
	        // Scroll Up
	        if(st + $(window).height() < $(document).height()) {
	            $('header, .hamburger').removeClass('nav-up').addClass('nav-down');
	        }
	    }
	    
	    lastScrollTop = st;
	}

});