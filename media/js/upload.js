$(function(){
        $('#multi').MultiFile({
          accept:'jpg|gif|bmp|png', max:15, STRING: {
            remove:'<img src="/media/img/delete.png"> ',
            selected:'Выбраны: $file',
            denied:'Неверный тип файла: $ext!',
            duplicate:'Этот файл уже выбран:\n$file!'
        }});
    });
	
$(document).ready(function() {
    //Удаление картинки в админ меню
     $(".dellimg").on('click',function(){
         //Вопрос на удаление
         if(confirm('Удалить эту фотографию ?')){
             //получаем текущии элементы
        var del = $(this).siblings('#numberimg').text();
        var img = $(this).siblings('.fancybox-thumb');
        var imgdel = $(this);
            //Отпровляем запрос     
                    $.ajax({
                        type: "POST",
                        data: "del=" + del,
                        url: "/ajax/delfoto",
                        dataType: "json",
                    }).done(function (data){
                        {
                            //Обрабатываем ответ
                            img.css('display','none');
                            imgdel.css('display','none')
                                //$( "img ").css('width', '250px');
                           
                        }
                    })
                }         
    });
    ////
	$(".fancybox-button").fancybox({
		prevEffect		: 'none',
		nextEffect		: 'none',
		closeBtn		: false,
		helpers		: {
			title	: { type : 'inside' },
			buttons	: {}
		}
	});
});
