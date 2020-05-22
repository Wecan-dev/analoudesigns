$(function () {
  $('.filter').first().css('border-top-left-radius', '1rem')
  $('.filter').first().css('border-bottom-left-radius', '1rem')
  $('.filter').last().css('border-bottom-right-radius', '1rem')
  $('.filter').last().css('border-top-right-radius', '1rem')
  $('#Container').mixItUp();
  setTimeout(function () {
    $('#eapps-instagram-feed-1').find('a').last().css('display', 'none')
  }, 1500)
});

// ANIMATE
wow = new WOW(
  {
    animateClass: 'animated',
    offset: 100,
    mobile: false,
    callback: function (box) {
    }
  }
);
wow.init();


// function parallax() {
//   var img1 = document.getElementById('particle1');
//   var img2 = document.getElementById('particle2');

//   img1.style.top = +(window.pageYOffset / 50) + 'px';
//   img2.style.top = +(window.pageYOffset / 40) + 'px';

// }

// window.addEventListener('scroll', parallax, false)
jQuery(document).ready(function () {
  $(window).scroll(function (e) {
    parallaxScroll();
  });

  function parallaxScroll() {
    var scrolled = $(window).scrollTop();
    $('#parallax-bg-1').css('top', (0 - (scrolled * .2)) + 'px');
    $('#parallax-bg-2').css('top', (0 - (scrolled * .1)) + 'px');
    $('#parallax-bg-3').css('top', (0 - (scrolled * .1)) + 'px');
    $('#parallax-bg-4').css('top', (0 - (scrolled * .1)) + 'px');

  }

}); 


// Menú fixed
$(window).scroll(function () {
  if ($(document).scrollTop() > 70 && ($(window).width() >= 0)) {

    $('.navbar-custom').addClass('navbar-fixed');

  } else {
    $('.navbar-custom').removeClass('navbar-fixed');

  }
});


// jQuery(function(){
//     jQuery(window).scroll(function(){
//         if(jQuery(this).scrollTop() < 20) {
//             jQuery('.navbar-custom')
//                 .css({'background':'transparent'})
//                 .attr('src','<?php echo get_template_directory_uri();?>/assets/img/Enmascarar grupo 202.png');
//         }
//         if(jQuery(this).scrollTop() > 20) {
//             jQuery('.navbar-custom')
//                 .css({'background':'#fff',
//     '-webkit-transition':'all 0.5s ease',
//     '-moz-transition':'all 0.5s ease',
//     '-ms-transition':'all 0.5s ease',
//     '-o-transition':'all 0.5s ease',
//     'transition':'all 0.5s ease'
//                   })    
//                 .attr('src','<?php echo get_template_directory_uri();?>/assets/img/Enmascarar grupo 202.png');
//         }
//     });
// });