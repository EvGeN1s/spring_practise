import './about_me.css';
import $ from 'jquery';
import './components/slider/slider.js';

import Slider from "./components/slider/Slider";

const slider = new Slider(".slidewrapper", ".viewport",
  ".nextBtn", ".prevBtn", ".slideNavBtn"
);
let slideNow = 1;
const slideCount = $('.slidewrapper_1').children().length;
var slideInterval = 5000;
var navBtnId = 0;
var translateWidth = 0;

$(document).ready(function () {
  slider.initialize();
  var switchInterval2 = setInterval(nextSlide('slidewrapper_2', 'images_2'), slideInterval);
  var switchInterval3 = setInterval(nextSlide('slidewrapper_3', 'images_3'), slideInterval);


  $('.images_2').hover(function () {
    clearInterval(switchInterval2);
  }, function () {
    switchInterval2 = setInterval(nextSlide('slidewrapper_2', 'images_2'), slideInterval);
  });
  $('.images_3').hover(function () {
    clearInterval(switchInterval3);
  }, function () {
    switchInterval3 = setInterval(nextSlide('slidewrapper_3', 'images_3'), slideInterval);
  });


  $('.next-btn_2').click(function () {
    nextSlide('slidewrapper_2', 'images_2');
  });

  $('.prev-btn_2').click(function () {
    prevSlide('slidewrapper_2', 'images_2');
  });

  $('.slide-nav-btn_2').click(function () {
    navBtnId = $(this).index();

    if (navBtnId + 1 != slideNow) {
      translateWidth = -$('.images_2').width() * (navBtnId);
      $('.slidewrapper_2').css({
        'transform': 'translate(' + translateWidth + 'px, 0)',
        '-webkit-transform': 'translate(' + translateWidth + 'px, 0)',
        '-ms-transform': 'translate(' + translateWidth + 'px, 0)',
      });
      slideNow = navBtnId + 1;
    }
  });

  $('.next-btn_3').click(function () {
    nextSlide('slidewrapper_3', 'images_3');
  });

  $('.prev-btn_3').click(function () {
    prevSlide('slidewrapper_3', 'images_3');
  });

  $('.slide-nav-btn_3').click(function () {
    navBtnId = $(this).index();

    if (navBtnId + 1 != slideNow) {
      translateWidth = -$('.images_3').width() * (navBtnId);
      $('.slidewrapper_3').css({
        'transform': 'translate(' + translateWidth + 'px, 0)',
        '-webkit-transform': 'translate(' + translateWidth + 'px, 0)',
        '-ms-transform': 'translate(' + translateWidth + 'px, 0)',
      });
      slideNow = navBtnId + 1;
    }
  });
});


function nextSlide(slidewrapper, images) {
  if (slideNow == slideCount || slideNow <= 0 || slideNow > slideCount) {
    $('.' + slidewrapper).css('transform', 'translate(0, 0)');
    slideNow = 1;
  } else {
    translateWidth = -$('.' + images).width() * (slideNow);
    $('.' + slidewrapper).css({
      'transform': 'translate(' + translateWidth + 'px, 0)',
      '-webkit-transform': 'translate(' + translateWidth + 'px, 0)',
      '-ms-transform': 'translate(' + translateWidth + 'px, 0)',
    });
    slideNow++;
  }
}

function prevSlide(slidewrapper, images) {
  if (slideNow == 1 || slideNow <= 0 || slideNow > slideCount) {
    translateWidth = -$('.' + images).width() * (slideCount - 1);
    $('.' + slidewrapper).css({
      'transform': 'translate(' + translateWidth + 'px, 0)',
      '-webkit-transform': 'translate(' + translateWidth + 'px, 0)',
      '-ms-transform': 'translate(' + translateWidth + 'px, 0)',
    });
    slideNow = slideCount;
  } else {
    translateWidth = -$('.' + images).width() * (slideNow - 2);
    $('.' + slidewrapper).css({
      'transform': 'translate(' + translateWidth + 'px, 0)',
      '-webkit-transform': 'translate(' + translateWidth + 'px, 0)',
      '-ms-transform': 'translate(' + translateWidth + 'px, 0)',
    });
    slideNow--;
  }
}