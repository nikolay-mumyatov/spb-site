// Валидация формы.

var userFio = $('[name="fio"]');
var userEmail = $('[name="email"]');
var userTel = $('[name="tel"]');
var userQuestion = $('[name="question"]');

$('form').submit(function(event){

    if (userFio.val() === '') {
        userFio.css('border', '2px inset red');
    } else {
        userFio.css('border', '');    
    }

    if (userEmail.val() === '') {
        userEmail.css('border', '2px inset red');
    } else {
        userEmail.css('border', '');
    }

    if (userTel.val() === '') {
        userTel.css('border', '2px inset red');
    } else {
        userTel.css('border', '');
    }

    if (userQuestion.val() === '') {
        userQuestion.css('border', '2px inset red');
    } else {
        userQuestion.css('border', '');
    }

    if (userQuestion.val() !== '' || userTel.val() !== '' || userEmail.val() !== '' || userFio.val() !== '') {
        $('form').submit();
    }


    // console.log(userFio.val());

    return false;
});


// Отмена красной рамки при начале ввода данных.

userFio.keyup(function(event){
    if (userFio.val() === '') {
        userFio.css('border', '2px inset red');
    } else {
        userFio.css('border', '');    
    }
});

userEmail.keyup(function(){
    if (userEmail.val() === '') {
        userEmail.css('border', '2px inset red');
    } else {
        userEmail.css('border', '');    
    }
});

userTel.keyup(function(){
    if (userTel.val() === '') {
        userTel.css('border', '2px inset red');
    } else {
        userTel.css('border', '');    
    }
});

userQuestion.keyup(function(){
    if (userQuestion.val() === '') {
        userQuestion.css('border', '2px inset red');
    } else {
        userQuestion.css('border', '');    
    }
});



