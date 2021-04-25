import '../about_me.css';
import $ from 'jquery';


class Slider
{
    constructor(slidewrapper,  viewport, nextBtn, prevBtn, slideNavBtn)
    {
        this.slidewrapper = slidewrapper;
        this.viewport = viewport;
        this.nextBtn = nextBtn;
        this.slideNavBtn = slideNavBtn;
    }

    slideNow = 1;
    slideCount = $(this.slidewrapper).children().length;
    slideInterval = 3000;
    navBtnId = 0;
  //  translateWidth = 0;
/*

    $(document).ready(function() {
    var switchInterval = setInterval(nextSlide, this.slideInterval);

    $('.images').hover(function() {
        clearInterval(switchInterval);
    }, function() {
        switchInterval = setInterval(nextSlide, this.slideInterval);
    });

    $('.next-btn').click(function() {
        nextSlide();
    });

    $('.prev-btn').click(function() {
        prevSlide();
    });

    $('.slide-nav-btn').click(function() {
        navBtnId = $(this).index();

        if (navBtnId + 1 != slideNow) {
            translateWidth = -$('.images').width() * (navBtnId);
            $('.slidewrapper').css({
                'transform': 'translate(' + translateWidth + 'px, 0)',
                '-webkit-transform': 'translate(' + translateWidth + 'px, 0)',
                '-ms-transform': 'translate(' + translateWidth + 'px, 0)',
            });
            slideNow = navBtnId + 1;
        }
    });
});






}






function nextSlide() {
    if (slideNow == slideCount || slideNow <= 0 || slideNow > slideCount) {
        $('.slidewrapper').css('transform', 'translate(0, 0)');
        slideNow = 1;
    } else {
        translateWidth = -$('.images').width() * (slideNow);
        $('.slidewrapper').css({
            'transform': 'translate(' + translateWidth + 'px, 0)',
            '-webkit-transform': 'translate(' + translateWidth + 'px, 0)',
            '-ms-transform': 'translate(' + translateWidth + 'px, 0)',
        });
        slideNow++;
    }
}

function prevSlide() {
    if (slideNow == 1 || slideNow <= 0 || slideNow > slideCount) {
        translateWidth = -$('.images').width() * (slideCount - 1);
        $('.slidewrapper').css({
            'transform': 'translate(' + translateWidth + 'px, 0)',
            '-webkit-transform': 'translate(' + translateWidth + 'px, 0)',
            '-ms-transform': 'translate(' + translateWidth + 'px, 0)',
        });
        slideNow = slideCount;
    } else {
        translateWidth = -$('.images').width() * (slideNow - 2);
        $('.slidewrapper').css({
            'transform': 'translate(' + translateWidth + 'px, 0)',
            '-webkit-transform': 'translate(' + translateWidth + 'px, 0)',
            '-ms-transform': 'translate(' + translateWidth + 'px, 0)',
        });
        slideNow--;
    }*/
}
