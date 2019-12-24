//  СЛАЙДЕР 

let cloneElement = $('.slider-item').eq(0).clone();

let slider = $('.slider');
slider.append(cloneElement);

let slideRight = $('.slide-right, .right-arrow');

let slideLeft = $('.slide-left, .left-arrow');

let sliderItem = $('.slider-item');

let circleSlider = $('.circle-slider');

let sliderBottom = $('.slider-bottom');

let circle = $('.circle')



let j = 1;
while (j < (sliderItem.length - 1)) {             // Добавляю точки в зависимости от кол-ва слайдов
    sliderBottom.append(circle.eq(0).clone());
    j++;
}


let i = 1;       // Начало счетчика для кликов вправо влево

// Далее взависимости от того, будет ли клик по точке, начало счетчика либо остается не изменным, либо перезаписывается после клика по точке

$('.circle').click(function () {      // клик по точке
    // console.log($(this).index());

    let index = $(this).index();      

    slider.animate({
        'left' : '-' + (index - 1) * 100 + '%'     // двигаем slider взависимости от индекса точки (элемента массива circle)
    }, 500);

    circleSlider.css({
        'left' : ( (index - 1) * 100 / (sliderItem.length - 1) ) + '%'    // Двигаем круглишок взависимости от индекса точки
    });

    i = index;        // перезаписываем счетчик
});


slideRight.click(function () {                 

    if (i == sliderItem.length - 1) {

        circleSlider.css({
            'left' : '0'
        });

        slider.animate({
            
            'left' : '-' + (100 * i) + '%'

        }, 500, function () {

            slider.css({
                'left' : '0'
            });
    
        });

        i = 1;

    }else{

        circleSlider.css({
            'left' : (i * 100 / (sliderItem.length - 1)) + '%'
        });

        slider.animate({
            'left' : '-' + (100 * i) + '%'
        }, 500);

        i++;

    }

});


slideLeft.click(function () {

    if (i == 1) {

        circleSlider.css({
            'left' : (sliderItem.length - 2) * 100 / (sliderItem.length - 1) + '%'
        });

        slider.css({
            'left' : '-' + 100 * (sliderItem.length - 1) + '%'
        });

        slider.animate({
            'left' : '-' + 100 * (sliderItem.length - 2) + '%'
        }, 500);

        i = sliderItem.length - 1;

    }else{
        
        circleSlider.css({
            'left' : (i - 2) * 100 / (sliderItem.length - 1) + '%'
        });

        slider.animate({
            'left' : '-' + ( 100 * (i - 2) ) + '%'
        }, 500);

        i--;
    }

});
         
         