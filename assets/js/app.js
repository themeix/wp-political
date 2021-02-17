

(function ($) {
	"use strict";

 /*  Preloader */
$(window).on('load',function(){
  var preLoder = $(".preloader");
  preLoder.fadeOut(1000);
   
}); 

/*  Mean Menu */
  jQuery(document).ready(function () {
      jQuery('.navbar-mean').meanmenu({
        meanScreenWidth: "991",
        meanMenuOpen: "<i class='im im-layer'></i>",
        meanMenuContainer: '.header-navbar', 
      });
  });
/*  Fixed Header*/
 $(window).scroll(function() {
        if ($(this).scrollTop() > 90) {
            $(".header-area").addClass("fixed");
        } else {
            $(".header-area").removeClass("fixed");
        }
});
/* Banner Slider */
    function bannerslider() {
        var BasicSlider = $('.hero-slider');
        BasicSlider.on('init', function(e, slick) { 
            var $firstAnimatingElements = $('.hero-item:first-child').find('[data-animation]');
            doAnimations($firstAnimatingElements);
        });
        BasicSlider.on('beforeChange', function(e, slick, currentSlide, nextSlide) { 
            var $animatingElements = $('.hero-item[data-slick-index="' + nextSlide + '"]').find('[data-animation]');
            doAnimations($animatingElements);
        });
        BasicSlider.slick({
            autoplay: true,
            autoplayspeed:2000,
            infinite: true, 
            dots: true,
            fade: true,  
            arrows: true,
            speed: 0, 
            prevArrow: $('.hero-prev'), 
            nextArrow: $('.hero-next'),
        });   

        function doAnimations(elements) {
            var animationEndEvents = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
            elements.each(function() {
                var $this = $(this);
                var $animationDelay = $this.data('delay');
                var $animationType = 'animated ' + $this.data('animation');
                $this.css({
                    'animation-delay': $animationDelay,
                    '-webkit-animation-delay': $animationDelay
                });
                $this.addClass($animationType).one(animationEndEvents, function() {
                    $this.removeClass($animationType);
                });
            });
        }
    }
    bannerslider();
/*  Slider */
  $('.testimonail-slider').slick({
      autoplay: true,
      autoplayspeed:2000,
      infinite: false, 
      dots: true,
      fade: true,  
      arrows: false,
      speed: 0, 
      responsive: [
          { breakpoint: 767, settings: {  dots: false, arrows: false} }
      ]
  });   

$('.feature-slider').slick({
  dots: true,
  arrows:false, 
  infinite: false,
  speed: 300,
  slidesToShow: 3,
  slidesToScroll: 3,
  responsive: [
    {
      breakpoint: 991,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
      }
    },
    {
      breakpoint: 767,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
}); 

/*  Active Class*/
$('.language-select').on('click' , function(){
  $(this).toggleClass('active');
});
/*  AOS  */ 
AOS.init({
  offset: 120,
  delay: 0, 
  duration: 400,
  easing: 'ease', 
  once: true, 
  mirror: false, 
  anchorPlacement: 'top-bottom', 

});		 
/*  Flag Animation  */
var h = $('.footer-flag').width();
for(var i = 0; i < h; i++){
    var flagElement = $("<div class='flag-element'>");
    flagElement.css('background-position', -i + "px 0");
    flagElement.css('-webkit-animation-delay', i * 10 + 'ms');
    flagElement.css('-moz-animation-delay', i * 10 + 'ms');
    flagElement.css('-ms-animation-delay', i * 10 + 'ms');
    flagElement.css('animation-delay', i * 10 + 'ms');
    $('.footer-flag').append(flagElement);
}

/*  Scrolltop  */
  function scrolltop(){

      
      var wind = $(window);
  
      wind.on("scroll" ,function(){
  
          var scrollTop = wind.scrollTop();
  
          if(scrollTop >=500) {
  
              $(".footer-back").addClass("show");
  
          } else {
          
              $(".footer-back").removeClass("show");
          }
          
  });

  $(".footer-back").on("click", function(){

      var bodyTop =  $("html, body");
 
        bodyTop.animate({scrollTop: 0},500,"easeOutCubic");
  });
 
  }
    

    scrolltop();
	

 // day counter
 if ($('#countdown').length) {
  const second = 1000,
    minute = second * 60,
    hour = minute * 60,
    day = hour * 24;
  let birthday = "Dec 01, 2022 00:00:00",
    countDown = new Date(birthday).getTime(),
    x = setInterval(function () {
      let now = new Date().getTime(),
        distance = countDown - now;

      (document.getElementById("days").innerText = Math.floor(distance / day)),
        (document.getElementById("hours").innerText = Math.floor(
          (distance % day) / hour
        )),
        (document.getElementById("minutes").innerText = Math.floor(
          (distance % hour) / minute
        )),
        (document.getElementById("seconds").innerText = Math.floor(
          (distance % minute) / second
        ));
      //seconds
    }, 0);
}

// init Isotope
var $grid = $('.filter-grid').isotope({
  itemSelector: '.filter-item',
  layoutMode: 'fitRows',
});

// Video modal
$('#video-modal').venobox();  
// filter functions
var filterFns = {
  numberGreaterThan50: function() {
    var number = $(this).find('.number').text();
    return parseInt( number, 10 ) > 50;
  },
};
$('#filters').on( 'click', 'button', function() {
  var filterValue = $( this ).attr('data-filter');
  filterValue = filterFns[ filterValue ] || filterValue;
  $grid.isotope({ filter: filterValue });
});

// change active class on buttons
$('.navbar-list').each( function( i, buttonGroup ) {
  var $buttonGroup = $( buttonGroup );
  $buttonGroup.on( 'click', 'button', function() {
    $buttonGroup.find('.active').removeClass('active');
    $( this ).addClass('active');
  });
});
  
//fix navbar
$('.menu-item-has-children > a').addClass('toogler');
$('.dropdown ul').addClass('sub-dropdown');

$('.dropdown-menu').parent().hover(function() {
  var menu = $(this).find("ul");
  var menupos = $(menu).offset();
  var test = menupos.left + menu.width();
  if (test > $(window).width()) {
      var newpos = -$(menu).width();
      menu.css({ left: newpos });
  }
});

}(jQuery));

