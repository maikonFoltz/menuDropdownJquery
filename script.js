$(function(){

    $('li').hover(function(){
        $(this).find('.subMenu').show();
    }, function(){
        $(this).find('.subMenu').hide();
    })

});