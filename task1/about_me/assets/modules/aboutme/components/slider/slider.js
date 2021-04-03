require('./slider.css')
var slideNow = 1;
var slideCount = ('.slidewrapper').children().length;
var slideInterval = 2000;
var translateWidth = 0;

$(document).ready(function ()
{
    setInterval(nextSlide, slideInterval);
});

function nextSlide()
{
    if (slideNow == slideCount || slideNow <= 0 || slideNow > slideCount)
    {
        $('.slidewrapper').css('transform', 'translate(0, 0)');
        slideNow = 1;
    }
    else
    {
        translateWidth = -$('.images').width() * (slideNow);
        $('.slidewrapper').css({
            'transform': 'translate(' + translateWidth + 'px, 0)',
            '-webkit-transform': 'translate(' + translateWidth + 'px, 0)',
            '-ms-transform': 'translate(' + translateWidth + 'px, 0)',
        });
        slideNow++;
    }
}

