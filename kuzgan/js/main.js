$(function () {
  $('[data-toggle="tooltip"]').tooltip()
});

$(window).scroll(function () {
  var scroll = $(window).scrollTop();
  if (scroll > 5) {

    $(".background-change-on-scroll").css("background", "#F8F9FA !important");
    $(".background-change-on-scroll").css("box-shadow", "none");
    $("#logoimg").attr("src", "./res/completelogo-black.png");
    $("nav").removeClass("navbar-dark");
    $("nav").addClass("navbar-light");
    $(".nav-link").removeClass("text-light");
    $("#action-btn").addClass("btn-dark");
    $("#action-btn").removeClass("btn-light");
    $(".navbar").removeClass("bg-transparent");
  } else {
    $(".background-change-on-scroll").css("background", "#F8F9FA !important");
    $("#logoimg").attr("src", "res/completewhitelogo-thick.png");
    $("nav").removeClass("navbar-light");
    $("nav").addClass("navbar-dark");
    $(".nav-link").addClass("text-light");
    $("#action-btn").addClass("btn-light");
    $("#action-btn").removeClass("btn-dark");
    $(".navbar").addClass("bg-transparent");
  }
});



var TxtRotate = function (el, toRotate, period) {
  this.toRotate = toRotate;
  this.el = el;
  this.loopNum = 0;
  this.period = parseInt(period, 10) || 2000;
  this.txt = '';
  this.tick();
  this.isDeleting = false;
};

TxtRotate.prototype.tick = function () {
  var i = this.loopNum % this.toRotate.length;
  var fullTxt = this.toRotate[i];

  if (this.isDeleting) {
    this.txt = fullTxt.substring(0, this.txt.length - 1);
  } else {
    this.txt = fullTxt.substring(0, this.txt.length + 1);
  }

  this.el.innerHTML = '<span class="wrap">' + this.txt + '</span>';

  var that = this;
  var delta = 300 - Math.random() * 100;

  if (this.isDeleting) {
    delta /= 2;
  }

  if (!this.isDeleting && this.txt === fullTxt) {
    delta = this.period;
    this.isDeleting = true;
  } else if (this.isDeleting && this.txt === '') {
    this.isDeleting = false;
    this.loopNum++;
    delta = 500;
  }

  setTimeout(function () {
    that.tick();
  }, delta);
};

window.onload = function () {
  var elements = document.getElementsByClassName('txt-rotate');
  for (var i = 0; i < elements.length; i++) {
    var toRotate = elements[i].getAttribute('data-rotate');
    var period = elements[i].getAttribute('data-period');
    if (toRotate) {
      new TxtRotate(elements[i], JSON.parse(toRotate), period);
    }
  }
  // INJECT CSS
  var css = document.createElement("style");
  css.type = "text/css";
  css.innerHTML = ".txt-rotate > .wrap { border-right: 0.08em solid #666 }";
  document.body.appendChild(css);
};

if ($('#back-to-top').length) {
  var scrollTrigger = 100, // px
    backToTop = function () {
      var scrollTop = $(window).scrollTop();
      if (scrollTop > scrollTrigger) {
        $('#back-to-top').addClass('show');
      } else {
        $('#back-to-top').removeClass('show');
      }
    };
  backToTop();
  $(window).on('scroll', function () {
    backToTop();
  });
  $('#back-to-top').on('click', function (e) {
    e.preventDefault();
    $('html,body').animate({
      scrollTop: 0
    }, 700);
  });
}

AOS.init();