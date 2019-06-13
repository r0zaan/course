(function($) {

	'use strict';

	// bootstrap dropdown hover

  // loader
  var loader = function() {
    setTimeout(function() { 
      if($('#loader').length > 0) {
        $('#loader').removeClass('show');
      }
    }, 1);
  };
  loader();

  $('.service').click(function () {
      // alert('gege');
      $('.service-click')[0].click();
  });
  $('.gallery').click(function () {
      // alert('gege');
      $('.gallery-click')[0].click();
  });
  $('.contact').click(function () {
      // alert('gege');
      $('.contact-click')[0].click();
  });




	
	$('nav .dropdown').hover(function(){
		var $this = $(this);
		$this.addClass('show');
		$this.find('> a').attr('aria-expanded', true);
		$this.find('.dropdown-menu').addClass('show');
	}, function(){
		var $this = $(this);
			$this.removeClass('show');
			$this.find('> a').attr('aria-expanded', false);
			$this.find('.dropdown-menu').removeClass('show');
	});


	$('#dropdown04').on('show.bs.dropdown', function () {
	  console.log('show');
	});

	// home slider
	$('.home-slider').owlCarousel({
    loop:true,
    autoplay: true,
    margin:10,
    animateOut: 'fadeOut',
    animateIn: 'fadeIn',
    nav:true,
    autoplayHoverPause: true,
    items: 1,
    navText : ["<span class='ion-chevron-left'></span>","<span class='ion-chevron-right'></span>"],
    responsive:{
      0:{
        items:1,
        nav:false
      },
      600:{
        items:1,
        nav:false
      },
      1000:{
        items:1,
        nav:true
      }
    }
	});

	// owl carousel
	var majorCarousel = $('.js-carousel-1');
	majorCarousel.owlCarousel({
    loop:true,
    autoplay: true,
    stagePadding: 7,
    margin: 20,
    animateOut: 'fadeOut',
    animateIn: 'fadeIn',
    nav: true,
    autoplayHoverPause: true,
    items: 3,
    navText : ["<span class='ion-chevron-left'></span>","<span class='ion-chevron-right'></span>"],
    responsive:{
      0:{
        items:1,
        nav:false
      },
      600:{
        items:2,
        nav:false
      },
      1000:{
        items:3,
        nav:true,
        loop:false
      }
  	}
	});

	// owl carousel
	var major2Carousel = $('.js-carousel-2');
	major2Carousel.owlCarousel({
    loop:true,
    autoplay: true,
    stagePadding: 7,
    margin: 20,
    animateOut: 'fadeOut',
    animateIn: 'fadeIn',
    nav: true,
    autoplayHoverPause: true,
    items: 4,
    navText : ["<span class='ion-chevron-left'></span>","<span class='ion-chevron-right'></span>"],
    responsive:{
      0:{
        items:1,
        nav:false
      },
      600:{
        items:3,
        nav:false
      },
      1000:{
        items:4,
        nav:true,
        loop:false
      }
  	}
	});


	var contentWayPoint = function() {
		var i = 0;
		$('.element-animate').waypoint( function( direction ) {

			if( direction === 'down' && !$(this.element).hasClass('element-animated') ) {
				
				i++;

				$(this.element).addClass('item-animate');
				setTimeout(function(){

					$('body .element-animate.item-animate').each(function(k){
						var el = $(this);
						setTimeout( function () {
							var effect = el.data('animate-effect');
							if ( effect === 'fadeIn') {
								el.addClass('fadeIn element-animated');
							} else if ( effect === 'fadeInLeft') {
								el.addClass('fadeInLeft element-animated');
							} else if ( effect === 'fadeInRight') {
								el.addClass('fadeInRight element-animated');
							} else {
								el.addClass('fadeInUp element-animated');
							}
							el.removeClass('item-animate');
						},  k * 100);
					});
					
				}, 100);
				
			}

		} , { offset: '95%' } );
	};
	contentWayPoint();



})(jQuery);

(function () {
    $(document).on('submit', '.ajax-post', function () {
        $('.error-message').each(function () {
            $(this).removeClass('make-visible');
            $(this).html('');
        });

        $('input').each(function () {
            $(this).removeClass('errors');
        });
        $('.loader-report img.loader').addClass('make-visible');
        var url = $(this).attr('action');

        var form = $(this);
        var formData = false;
        if (window.FormData) {
            formData = new FormData(form[0]);
        }
        $.ajax({
            headers: {'X-CSRF-TOKEN': $('input[name=_token]').val()},
            url: url,
            data: formData ? formData : form.serialize(),
            cache: false,
            contentType: false,
            processData: false,
            type: 'POST',
            success: function (response) {
                console.log(response);
                if (response.status == 'success') {
                    $('.loader-report img.loader').removeClass('make-visible');
                    swal({
                        title: "Mail Send!",
                        text: "Successfully Mail Send",
                        type: "success"
                    }, function() {
                        var href = document.URL;
                        location.reload();
                    });
                }
                if (response.status == 'fail') {
                    $('.loader-report img.loader').removeClass('make-visible');
                    for (var key in response.errors) {
                        var error_message = response.errors[key];
                        var error_form_field = form.find("[name=" + key + "]");
                        error_form_field.addClass('errors');
                        error_form_field.parent().find('.error-message').addClass('make-visible').html(error_message);
                    }
                }
            }
        });

        return false;

    });
})();