var userFio = $('[name="fio"]');
var userEmail = $('[name="email"]');
var userTel = $('[name="tel"]');
var userQuestion = $('[name="question"]');

$('form').submit(function(event){
    // console.log(event);

    if (userFio.val() === '') {
        userFio.css('border', '1px solid red');
    } else {
        userFio.css('border', '');    
    }

    if (userEmail.val() === '') {
        userEmail.css('border', '1px solid red');
    } else {
        userEmail.css('border', '');
    }

    if (userTel.val() === '') {
        userTel.css('border', '1px solid red');
    } else {
        userTel.css('border', '');
    }

    if (userQuestion.val() === '') {
        userQuestion.css('border', '1px solid red');
    } else {
        userQuestion.css('border', '');
    }


    return false;
});

userFio.keyup(function(event){
    if (userFio.val() === '') {
        userFio.css('border', '1px solid red');
    } else {
        userFio.css('border', '');    
    }
});

userEmail.keyup(function(){
    if (userEmail.val() === '') {
        userEmail.css('border', '1px solid red');
    } else {
        userEmail.css('border', '');    
    }
});

userTel.keyup(function(){
    if (userTel.val() === '') {
        userTel.css('border', '1px solid red');
    } else {
        userTel.css('border', '');    
    }
});

userQuestion.keyup(function(){
    if (userQuestion.val() === '') {
        userQuestion.css('border', '1px solid red');
    } else {
        userQuestion.css('border', '');    
    }
});