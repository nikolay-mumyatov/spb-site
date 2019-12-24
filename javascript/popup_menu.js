$('.nav_d_n').click(function(){

    let navAttr = $('.navigation').attr('style');
    console.log(navAttr);

    if (navAttr == undefined) {
        $('.navigation').css('left', '0');
    } else {
        $('.navigation').removeAttr('style');
    }
});


$('.nav_d_n').click(function(){
    $('.nav_none').toggleClass('nav_display');
});   


//Плавный скролл страницы

$('a').click(function() {

    let linkHref = $(this).attr('href'); //Получить значение из АТРИБУТА href

    let scrollHeight = $(linkHref).offset().top; //Получить значение растояния от элемента до верха страницы

    $('html, body').animate({
        scrollTop : scrollHeight //Зарегистрированное значение JS
    }, 300)
});