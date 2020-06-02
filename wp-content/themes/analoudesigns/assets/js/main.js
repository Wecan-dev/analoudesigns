$(function () {
  $('.filter.active').first().css('border-top-left-radius', '1rem')
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
    $('#parallax-bg-8').css('top', (0 - (scrolled * .3)) + 'px');

  }

}); 


// Menú fixed
$(window).scroll(function () {
  if ($(document).scrollTop() > 50 && ($(window).width() >= 0)) {

    $('.navbar-custom').addClass('navbar-fixed');
    $('.logo-black').addClass('visible');
    $('.logo-white').addClass('no-visible');
  } else {
    $('.navbar-custom').removeClass('navbar-fixed');
    $('.logo-black').removeClass('visible');
    $('.logo-white').removeClass('no-visible');

  }
});

function openModal() {
  document.getElementById("myModal").style.display = "block";
}

function closeModal() {
  document.getElementById("myModal").style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
