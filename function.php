<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script>
$('#review-slider').owlCarousel({
	loop:true,
	margin:10,
	nav:false,
	dots: false,
	autoplay:true,
	autoplaytimeout: 1000,
	responsive:{
	    0:{
	        items:1
	    },
	    600:{
	        items:3
	    },
	    1000:{
	        items:4
	    }
	}
})
jQuery(".progress-bar").each(function(i) {
  jQuery(this).delay(delay * i).animate({
    width: jQuery(this).attr('aria-valuenow') + '%'
  }, delay);

  jQuery(this).prop('Counter', 0).animate({
    Counter: jQuery(this).text()
  }, {
    duration: delay,
    easing: 'swing',
    step: function(now) {
      jQuery(this).text(Math.ceil(now) + '%');
    }
  });
});
jQuery('.count').each(function () {
    jQuery(this).prop('Counter',0).animate({
        Counter: jQuery(this).text()
    }, {
        duration: 4000,
        easing: 'swing',
        step: function (now) {
            jQuery(this).text(Math.ceil(now));
        }
    });
});
</script>