//скрытие и отображение блоков
//<a href="#" class="img-circle circle" onclick="diplay_hide('#parts-{{$post->id}}', this);return false;"><i class="glyphicon glyphicon-menu-down"></i></a>
// function diplay_hide (blockId, that){
//     if ($(blockId).css('display') == 'none'){
//         $(blockId).animate({height: 'show'}, 500);
//         $(that).children().removeClass('glyphicon-menu-down').addClass('glyphicon-menu-up')
//     }
//     else {
//         $(blockId).animate({height: 'hide'}, 500);
//         $(that).children().removeClass('glyphicon-menu-up').addClass('glyphicon-menu-down')
//     }
// }
$(document).ready(function(){
//Parallax Scrolling animation

    $('section[data-type="background"]').each(function(){
        var $bgobj = $(this); // создаем объект
        $(window).scroll(function() {
            var yPos = -($(window).scrollTop() / $bgobj.data('speed')); // вычисляем коэффициент 
            // Присваиваем значение background-position
            var coords = 'center '+ yPos + 'px';
            // Создаем эффект Parallax Scrolling
            $bgobj.css({ backgroundPosition: coords });
        });
    });
});