$(document).ready(function(){
    $('.nav-button').click(function(){
      $('body').toggleClass('nav-open');
    });
  });

  var typed = new Typed('#typed', {
    stringsElement: '#typed-strings',
    cursorChar: ' _',
    typeSpeed: 15,
    backSpeed: 0,
  });