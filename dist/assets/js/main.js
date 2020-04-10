"use strict";

document.addEventListener('DOMContentLoaded', function () {
  heroCanvasAnimation();
  heroTextAnimation();
  infiniteSliderInit('.js-clients-slider');

  function heroTextAnimation() {
    var heroTitle = document.querySelector('.hero__title');
    var heroSubtitle = document.querySelector('.hero__subtitle');
    heroTitle.classList.add('hero__title--fade-in');
    heroSubtitle.classList.add('hero__subtitle--fade-in');
  }

  function heroCanvasAnimation() {
    var canvas = document.querySelector('.js-hero-canvas');
    var ctx = canvas.getContext('2d');
    canvas.width = window.innerWidth;
    canvas.height = window.innerHeight;
    var width = canvas.width;
    var height = canvas.height;
    ctx.font = "bold 16px Roboto";
    render(20, 20, 10);

    function render() {
      var cellWidth = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : 20;
      var cellHeight = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : 20;
      var speed = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : 100;
      var renderCount = width / cellWidth * (height / cellHeight);
      var renderLimit = renderCount - renderCount * 0.5;
      var counter = 0;
      var positions = [];
      var colors = ['#e6e6e6', '#cdcdcd', '#b4b4b4', '#9b9b9b'];
      var interval = setInterval(function () {
        var position = {
          x: Math.ceil(getRandomRange(0, width) / cellWidth) * cellWidth,
          y: Math.ceil(getRandomRange(0, height) / cellHeight) * cellHeight
        };

        if (!positions.some(function (pos) {
          return pos.x === position.x && pos.y === position.y;
        })) {
          ctx.fillStyle = colors[getRandomRange(0, colors.length - 1)];
          ctx.fillText(getRandomSymbol(65, 122), position.x, position.y);
          counter++;
        }

        positions.push(position);

        if (counter >= renderLimit) {
          clearInterval(interval);
        }
      }, speed);
    }

    function getRandomSymbol(start, end) {
      return String.fromCharCode(getRandomRange(start, end));
    }

    function getRandomRange(min, max) {
      return Math.floor(Math.random() * (max - min + 1)) + min;
    }
  }

  function infiniteSliderInit(sliderSelector) {
    $(sliderSelector).slick({
      variableWidth: true,
      focusOnSelect: false,
      accessibility: false,
      autoplay: true,
      autoplaySpeed: 0,
      speed: 10000,
      arrows: false,
      cssEase: 'linear',
      slidesToShow: 1,
      slidesToScroll: 1
    });
  }
});
//# sourceMappingURL=main.js.map