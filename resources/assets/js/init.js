$(document).ready(function(){

    $('.sidenav').sidenav();

    $('.slider').slider({
      indicators: false
    });

    $('select').formSelect();


    $('#next').on('click', function () {
        $('slider').slider('pause');
        $('slider').slider('next');
    });
});
