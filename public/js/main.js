//скрытие и отображение блоков
//<a href="#" class="img-circle circle" onclick="diplay_hide('#parts-{{$post->id}}', this);return false;"><i class="glyphicon glyphicon-menu-down"></i></a>
function diplay_hide (blockId, that){
    if ($(blockId).css('display') == 'none'){
        $(blockId).animate({height: 'show'}, 500);
        $(that).children().removeClass('glyphicon-menu-down').addClass('glyphicon-menu-up')
    }
    else {
        $(blockId).animate({height: 'hide'}, 500);
        $(that).children().removeClass('glyphicon-menu-up').addClass('glyphicon-menu-down')
    }
}
