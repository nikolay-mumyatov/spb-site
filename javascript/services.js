//Плавный скролл страницы

$('a').click(function() {

    let linkHref = $(this).attr('href'); //Получить значение из АТРИБУТА href

    let scrollHeight = $(linkHref).offset().top; //Получить значение растояния от элемента до верха страницы

    $('html, body').animate({
        scrollTop : scrollHeight //Зарегистрированное значение JS
    }, 300)
});