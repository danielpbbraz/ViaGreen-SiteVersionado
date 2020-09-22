(function($){
    $.fn.isOnScreen = function(p){
        var $this = $(this),
            $window = $(window);

        var windowHeight = $(window).height();
        var scrollTop = $(window).scrollTop();
        var top = $(this).offset().top;
        var height = $(this).height();

        return ((scrollTop + windowHeight - p) >= top && scrollTop < (top + height));
    };
})(jQuery);

var IsMobile = {
    ANDROID:    navigator.userAgent.match(/Android/i),
    BLACKBERRY: navigator.userAgent.match(/BlackBerry/i),
    IOS:        navigator.userAgent.match(/iPhone|iPad|iPod/i),
    OPERA:      navigator.userAgent.match(/Opera Mini/i),
    WINDOWS:    navigator.userAgent.match(/IEMobile/i)
};

IsMobile.any = function() {
    return (IsMobile.ANDROID || IsMobile.BLACKBERRY || IsMobile.IOS || IsMobile.OPERA || IsMobile.WINDOWS) || window.innerWidth <= 1024;
};

var Events = {
    RESIZE: IsMobile.ANY ? 'orientationchange' : 'resize',
    OVER:   IsMobile.ANY ? 'touchstart' : 'mouseover',
    OUT:    IsMobile.ANY ? 'touchend' : 'mouseout',
    START:  IsMobile.ANY ? 'touchstart' : 'mousedown',
    MOVE:   IsMobile.ANY ? 'touchmove' : 'mousemove',
    END:    IsMobile.ANY ? 'touchend' : 'mouseup',
    CANCEL: IsMobile.ANY ? 'touchcancel' : 'mouseup',
    CLICK:  IsMobile.ANY ? 'click' : 'click'
};

$(document).ready(function() {
	var $window = $(window);
	var wW = $window.width();
	var hH = $window.height();

	Pace.on('done', function(){
        TweenLite.to('.overlay-pace', .4, {opacity: 0, onComplete: function(){
            TweenLite.set('.overlay-pace', {display:'none'});
        }});

        $window.trigger('scroll');
    });

    if (navigator.userAgent.indexOf('Mac OS X') != -1) {
        $('body').addClass('mac');
    }

    if (IsMobile.any()) {
        $('body').addClass('mobile');
    } else {
        $('body').addClass('desktop');
    }

	if($('.slider-banner-home').length) {
		$('.slider-banner-home').slick({
			arrows: false,
            dots: true,
			fade: true,
			autoplay: true,
  			autoplaySpeed: 4000,
			pauseOnFocus: false,
			pauseOnHover: false,
		});
	}

	if($('.fancybox').length) {
		$(".fancybox").fancybox({
			openEffect	: 'elastic',
			closeEffect	: 'elastic',
            maxWidth    : '80%',
            prevEffect  : 'fade',
            nextEffect  : 'fade',
            padding     :  0
		});
	}

	$('#header .menu-mobile').on('click', function(){
        $(this).toggleClass('is-active');
        $('#header #menu').toggleClass('show');
        $('#header').toggleClass('show-menu');
    });

	if (!IsMobile.any()) {
        $('.menu-specialties-home a').on('mouseover',function(){
            $(this).parent().siblings('li').addClass('blur');
        });

        $('.menu-specialties-home a').on('mouseleave',function(){
            $(this).parent().siblings('li').removeClass('blur');
        });

		var controller = new ScrollMagic.Controller();


        //Scene banners
        var scene = new ScrollMagic.Scene({
                triggerElement: ".banner",
                triggerHook: "onLeave",
                duration: "100%"
            })
            .setTween(TweenMax.to(".banner figure", 1, {y: '60%', ease: Linear.easeNone}))
            .addTo(controller);

        //Scene Viagreen
        var animationViagreen = new TimelineMax()
            .add([
                TweenMax.from(".viagreen-home .line-map", 1, {y:'-50%', ease: Linear.easeNone}),
                TweenMax.from(".viagreen-home .cloud-01", 1, {y:'-60%', ease: Linear.easeNone}),
                TweenMax.from(".viagreen-home .cloud-02", 1, {y:'-250%', ease: Linear.easeNone}),
                TweenMax.from(".viagreen-home .cloud-03", 1, {y:'-300%', ease: Linear.easeNone}),
                TweenMax.from(".viagreen-home .cloud-04", 1, {y:'20%', ease: Linear.easeNone}),
                TweenMax.from(".viagreen-home .cloud-05", 1, {y:'40%', ease: Linear.easeNone}),
                TweenMax.from(".viagreen-home .globe", 1, {y:'40%', ease: Linear.easeNone}),
                TweenMax.from(".viagreen-home .text-01", 1, {y:'60%', ease: Linear.easeNone}),
                TweenMax.from(".viagreen-home .text-02 .cloud-co2", 1, {y:'-40%', ease: Linear.easeNone}),
                TweenMax.from(".viagreen-home .text-02 .seal-vgp", 1, {y:'-20%', ease: Linear.easeNone})
            ]);

        var scene = new ScrollMagic.Scene({
                triggerElement: ".viagreen-home",
                triggerHook: "onEnter",
                duration: '100%'
            })
            .setTween(animationViagreen)
            //.addIndicators() // add indicators (requires plugin)
            .addTo(controller);

        //Scene Viagreen 2
        var animationViagreen2 = new TimelineMax()
            .add([
                TweenMax.to(".viagreen-home .line-map", 1, {y:'50%', ease: Linear.easeNone}),
                TweenMax.to(".viagreen-home .cloud-01", 1, {y:'40%', ease: Linear.easeNone}),
                TweenMax.to(".viagreen-home .cloud-02", 1, {y:'-150%', ease: Linear.easeNone}),
                TweenMax.to(".viagreen-home .cloud-03", 1, {y:'150%', ease: Linear.easeNone}),
                TweenMax.to(".viagreen-home .cloud-04", 1, {y:'-80%', ease: Linear.easeNone}),
                TweenMax.to(".viagreen-home .cloud-05", 1, {y:'-60%', ease: Linear.easeNone}),
                TweenMax.to(".viagreen-home .globe", 1, {y:'-40%', ease: Linear.easeNone}),
                TweenMax.to(".viagreen-home .text-01", 1, {y:'-60%', ease: Linear.easeNone}),
                TweenMax.to(".viagreen-home .text-02 .cloud-co2", 1, {y:'-70%', ease: Linear.easeNone}),
                TweenMax.to(".viagreen-home .text-02 .text", 1, {y:'-70%', ease: Linear.easeNone}),
                TweenMax.to(".viagreen-home .text-02 .seal-vgp", 1, {y:'-50%', ease: Linear.easeNone})
            ]);

        var scene = new ScrollMagic.Scene({
                triggerElement: ".viagreen-home",
                triggerHook: "onLeave",
                duration: '120%'
            })
            .setTween(animationViagreen2)
            //.addIndicators() // add indicators (requires plugin)
            .addTo(controller);


        //Scene Viagreen interna
        var duration = $('.viagreen-internal').height();
        var animationViagreen3 = new TimelineMax()
            .add([
                TweenMax.to(".viagreen-internal .cloud-01", 1, {y:'110%', ease: Linear.easeNone}),
                TweenMax.to(".viagreen-internal .cloud-02", 1, {y:'-100%', ease: Linear.easeNone}),
                TweenMax.to(".viagreen-internal .cloud-03", 1, {y:'450%', ease: Linear.easeNone}),
                TweenMax.to(".viagreen-internal .cloud-04", 1, {y:'300%', ease: Linear.easeNone}),
                TweenMax.to(".viagreen-internal .cloud-05", 1, {y:'-60%', ease: Linear.easeNone}),
                TweenMax.to(".viagreen-internal .globe", 1, {y:'30%', ease: Linear.easeNone}),
                TweenMax.to(".viagreen-internal .text-01", 1, {y:'-60%', ease: Linear.easeNone}),
                TweenMax.to(".viagreen-internal .text-02", 1, {y:'-70%', ease: Linear.easeNone}),
                TweenMax.to(".viagreen-internal .text-02 img", 1, {y:'30%', ease: Linear.easeNone}),
                TweenMax.to(".viagreen-internal .text-03", 1, {y:'-50%', ease: Linear.easeNone}),
                TweenMax.from(".viagreen-internal .text-03 img", 1, {y:'30%', ease: Linear.easeNone}),
                TweenMax.to(".viagreen-internal .text-04", 1, {y:'-50%', ease: Linear.easeNone}),
                TweenMax.from(".viagreen-internal .text-04 img", 1, {y:'30%', ease: Linear.easeNone})
            ]);

        var scene = new ScrollMagic.Scene({
                triggerElement: ".viagreen-internal",
                triggerHook: "onLeave",
                duration: duration
            })
            .setTween(animationViagreen3)
            //.addIndicators() // add indicators (requires plugin)
            .addTo(controller);

	}

    $('.btn-next-section').on('click', function(){
        var hHeader = $('header').height();
        var pos = $(this).parents('section').next().offset().top;

        if (IsMobile.any()) {
            pos = pos - hHeader;
        }

        TweenLite.to($window, IsMobile.any() ? .6 : 2, {scrollTo: {y: pos, autoKill:false}, ease: Power2.easeOut});
    });

	$window
		.on('scroll', function(){
			var wait = 0;

			if(wW > 1024 || $('body').attr('id') == 'fique-informado') {
				if($(this).scrollTop() > 150) {
					$('#header').addClass('header-small');
				} else {
					$('header').removeClass('header-small');
				}
			}

			$('[data-ani-type]:not([data-animated])').each(function(i){
                if ($window.width() > 1024) {
                    var $this   = $(this);
                    var p       = $this.attr('data-ani-show') || 100;
                    var delay   = $this.attr('data-ani-delay') || .2;
                    var time    = $this.attr('data-ani-time') || .6;

                    delay = parseFloat(delay);

                    if ($this.isOnScreen(p)) {
                        $this.attr('data-animated', true);

                        wait += delay;

                        if ($this.attr('data-ani-type') == 'text') {

                            var tl = new TimelineLite,
                                st = new SplitText($this, {type: 'words,chars'}),
                                chars = st.chars;

                            tl.staggerFrom(chars, time, {delay: wait, opacity: 0, scale: 0, y: 50, rotationX: 90, transformOrigin: '0% 50% -50', ease: Quint.easeOut}, 0.01, '+=0');
                        } else if ($this.attr('data-ani-type') == 'fade') {
                            TweenLite.from($this, time, {delay: wait, opacity: 0, ease: Quint.easeOut});
                        } else if ($this.attr('data-ani-type') == 'fade-top') {
                            TweenLite.from($this, time, {delay: wait, opacity: 0, y: 60, ease: Quint.easeOut});
                        } else if ($this.attr('data-ani-type') == 'fade-right') {
                            TweenLite.from($this, time, {delay: wait, opacity: 0, x: -60, ease: Quint.easeOut});
                        } else if ($this.attr('data-ani-type') == 'fade-bottom') {
                            TweenLite.from($this, time, {delay: wait, opacity: 0, y: -60, ease: Quint.easeOut});
                        } else if ($this.attr('data-ani-type') == 'fade-left') {
                            TweenLite.from($this, time, {delay: wait, opacity: 0, x: 60, ease: Quint.easeOut});
                        }
                    }
                }
            });
		})
		.on('mousewheel DOMMouseScroll', function(event){
            if (!$('body').is('.mac') && !IsMobile.any()) {
                event.preventDefault();

                var delta = event.originalEvent.wheelDelta/120 || -event.originalEvent.detail/3;
                var scrollTop = $(this).scrollTop();
                var finalScroll = scrollTop - parseInt(delta * 100) * 3;

                TweenMax.to($(this), 1, {scrollTo : {y: finalScroll, autoKill:true}, ease: Power2.easeOut});
            }
        });

        


    var maskBehavior = function (val) {
        return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
    },
    options = {onKeyPress: function(val, e, field, options) {
        field.mask(maskBehavior.apply({}, arguments), options);
        }
    };


    $('[name="tel"]').mask(maskBehavior, options);

    $('#form-contact').validate({
        errorElement: 'span',
        errorClass: 'error',
        errorPlacement: function(error, element) {
            //console.log(error);
            return false;
        }
    });

    $('.images img').waitForImages(function() {
        $('.images').slick({
            dots: false,
            arrows: false,
            infinite: true,
            speed: 500,
            fade: true,
            cssEase: 'linear',
            autoplay: true,
            autoplaySpeed: 4000
        });
    });
    
    $('.list-anchor-vgp a').on('click', function(e){
        var id = $(this).attr('href');

        e.preventDefault();

        TweenMax.to(window, 3, {scrollTo:{y:$(id).offset().top-130}});
    });

    $('#evolution ul li a').on('click', function(e){
        var year = $(this).attr('href');

        e.preventDefault();
        $('#evolution ul li a ').removeClass('active');
        $(this).addClass('active');

        $('.item-timeline').removeClass('active');
        $('.item-timeline[data-year="'+year+'"]').addClass('active');
    });

    if(!$('body').hasClass('mobile')){
        $('#menu-lateral .btn').on('click', function(e){
            e.preventDefault();
            //$(this).parent().toggleClass('open');
        });
    }

    $('.box-menu-produtos-mobile button').on('click', function(e){
        $(this).toggleClass('is-active');
        $(this).closest('#menu-lateral').toggleClass('open');
    });

    $('#consulting .list h2').on('click', function(){
        var $this = $(this);

        $('#consulting .list h2').not($this).removeClass('active');
        $this.toggleClass('active');
        $('#consulting .list p').not($this.next()).hide();

        $this.next().slideToggle();
    });

    svg4everybody();
});
