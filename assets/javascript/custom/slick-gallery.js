$(document).ready(function(){
	$('.featured-gallery').slick({
		dots: false,
		infinite: true,
		fade: true,
		autoplay: true,
		speed: 1000,
		autoplaySpeed: 3000,
		slidesToShow: 1,
		centerMode: false,
		lazyLoad: 'ondemand',
		variableWidth: false,
		adaptiveHeight: false,
		pauseOnHover: false
	});
	$('.brands-gallery').slick({
		dots: false,
	  autoplay: true,
	  infinite: true,
	  autoplaySpeed: 6000,
	  speed: 1000,
	  swipeToSlide: true,
	  slidesToShow: 6,
	  slidesToScroll: 1,
	  responsive: [
	    {
	      breakpoint: 600,
	      settings: {
	        slidesToShow: 2,
	        slidesToScroll: 2
	      }
	    },
	    {
	      breakpoint: 480,
	      settings: {
	        slidesToShow: 1,
	        slidesToScroll: 1
	      }
	    }
	    // You can unslick at a given breakpoint now by adding:
	    // settings: "unslick"
	    // instead of a settings object
	  ]
	});
	$('.lightbox-link').magnificPopup({type:'image'});
});