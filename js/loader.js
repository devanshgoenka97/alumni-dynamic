$(window).on('load',function(){
    $("#overlay").css('visibility','visible');
    setTimeout(function(){
    $("#home").trigger('click');
    $("#overlay").css('visibility','hidden');
    },3000);
});