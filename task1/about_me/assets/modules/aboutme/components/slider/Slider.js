import '../../about_me.css';
import $ from 'jquery';


export default class Slider{
  constructor(slidewrapper, viewport, nextBtn, prevBtn, slideNavBtn) {
    this.slidewrapper = slidewrapper;
    this.viewport = viewport;
    this.nextBtn = nextBtn;
    this.prevBtn = prevBtn
    this.slideNavBtn = slideNavBtn;
  }

  _slideNow = 1;
  _slideCount = $(this.slidewrapper).children().length;
  _slideInterval = 3000;
  _navBtnId = 0;
  _translateWidth = 0;

  nextSlide() {

    if (this._slideNow == this._slideCount || this._slideNow <= 0 || this._slideNow > this._slideCount) {
      $(this.slidewrapper).css('transform', 'translate(0, 0)');
      this._slideNow = 1;
    } else {
      this._translateWidth = -$(this.viewport).width() * (this._slideNow);
      $(this.slidewrapper).css({
        'transform': 'translate(' + this._translateWidth + 'px, 0)',
        '-webkit-transform': 'translate(' + this._translateWidth + 'px, 0)',
        '-ms-transform': 'translate(' + this._translateWidth + 'px, 0)',
      });
      this._slideNow++;
    }
  }

  prevSlide() {
    if (this._slideNow == 1 || this._slideNow <= 0 || this._slideNow > this._slideCount) {
      this._translateWidth = -$(this.viewport).width() * (this._slideCount - 1);
      $(this.slidewrapper).css({
        'transform': 'translate(' + this._translateWidth + 'px, 0)',
        '-webkit-transform': 'translate(' + this._translateWidth + 'px, 0)',
        '-ms-transform': 'translate(' + this._translateWidth + 'px, 0)',
      });
      this._slideNow = this._slideCount;
    } else {
      this._translateWidth = -$('.images').width() * (this._slideNow - 2);
      $('.slidewrapper').css({
        'transform': 'translate(' + this._translateWidth + 'px, 0)',
        '-webkit-transform': 'translate(' + this._translateWidth + 'px, 0)',
        '-ms-transform': 'translate(' + this._translateWidth + 'px, 0)',
      });
      this._slideNow--;
    }
  }

  initialize() {
    let switchInterval = setInterval(this.nextSlide, this._slideInterval);

    $(this.viewport).hover(function () {
      clearInterval(switchInterval);
    }, function () {
      switchInterval = setInterval(this.nextSlide, this._slideInterval);
    });

    $(this.nextBtn).click(()  => {
      this.nextSlide;
    });

    $(this.prevBtn).click(() => {
      this.prevSlide;
    });

    $(this.slideNavBtn).click(() => {
      this._navBtnId = $(this).index();

      if (this._navBtnId + 1 != this._slideNow) {
        this._translateWidth = -$(this.viewport).width() * (this._navBtnId);
        $(this.slidewrapper).css({
          'transform': 'translate(' + this._translateWidth + 'px, 0)',
          '-webkit-transform': 'translate(' + this._translateWidth + 'px, 0)',
          '-ms-transform': 'translate(' + this._translateWidth + 'px, 0)',
        });
        this._slideNow = this._navBtnId + 1;
      }
    });
  }
}












