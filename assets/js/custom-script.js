    //Search Popup
    if($('#search-modal').length){
        //Show Popup
        $('.searchBoxs').on('click', function() {
            $('#search-modal').addClass('popup-visible');
        });
        $(document).keydown(function(e){
            if(e.keyCode === 27) {
                $('#search-modal').removeClass('popup-visible');
            }
        });
        //Hide Popup
        $('.close-search,.search-modal .overlay-layer').on('click', function() {
            $('#search-modal').removeClass('popup-visible');
        });
    }

    // header toggle menu
    $(document).ready(function(){ 
        body = document.querySelector('body');
        $('.menu-icon').click(function(){
            $(body).toggleClass("menuShow");
        });
    });

    //Fact Counter + Text Count
    $('.counter-test').appear(function(){

        var $t = $(this),
            n = $t.find(".count-text").attr("data-stop"),
            r = parseInt($t.find(".count-text").attr("data-speed"), 10);
            
        if (!$t.hasClass("counted")) {
            $t.addClass("counted");
            $({
                countNum: $t.find(".count-text").text()
            }).animate({
                countNum: n
            }, {
                duration: r,
                easing: "linear",
                step: function() {
                    $t.find(".count-text").text(Math.floor(this.countNum));
                },
                complete: function() {
                    $t.find(".count-text").text(this.countNum);
                }
            });
        }
        
    });

    // banner-carousel
	if ($('.banner-carousel').length) {
        $('.banner-carousel').owlCarousel({
            loop:true,
			margin:0,
			nav:true,
			animateOut: 'fadeOut',
    		animateIn: 'fadeIn',
    		active: true,
            dots: false,
			smartSpeed: 1000,
			autoplay: 6000,
            navText: [ '<span class="fa fa-angle-left"></span>', '<span class="fa fa-angle-right"></span>' ],
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:1
                },
                800:{
                    items:1
                },
                1024:{
                    items:1
                }
            }
        });
    }

        //testimonial
	if ($('#testimonial').length) {
		$('#testimonial').owlCarousel({
			loop:true,
			margin:30,
			nav:true,
			smartSpeed: 1000,
			autoplay: 500,
			navText: false,
			responsive:{
				0:{
					items:1
				},
				480:{
					items:1
				},
				600:{
					items:2,
                    margin:20
				},
				800:{
					items:2,
                    margin:20
				},
				1024:{
					items:3
				}
			}
		});    		
	}

   
        //plan-slider
		$('.plan-carousel').owlCarousel({
			loop:false,
			margin:30,
			nav:true,
            dots:($('.plan-carousel .owl-item').length < 3 ) ? true: false,
			smartSpeed: 1000,
			autoplay: 500,
			navText: false,
			responsive:{
				0:{
					items:1
				},
				560:{
					items:2,
                    margin:15
				},
				600:{
					items:2,
                    margin:15
				},
				992:{
					items:3,
                    margin:15
				},
				1199:{
					items:3,
				}
			}
		});  
