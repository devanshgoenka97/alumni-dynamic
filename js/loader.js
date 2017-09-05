$(window).on('load',function(){
    $("#overlay").css('visibility','visible');
    setTimeout(function(){
    $("#home").trigger('click');
    $("#overlay").css('visibility','hidden');
    $('.carousel').carousel({
          interval: 2000
      });
    },3000);
});