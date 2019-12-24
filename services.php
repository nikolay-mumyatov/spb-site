<?php
include($_SERVER['DOCUMENT_ROOT'] . '/blocks/head.php');
?>

<head>
    <link rel="stylesheet" href="/styles/popup_menu/popup_menu.css">
    <link rel="stylesheet" href="/styles/page_services/style_services.css">
    <link rel="stylesheet" href="/styles/footer_style/footer.css">

</head>

<body>
    <?php
    include($_SERVER['DOCUMENT_ROOT'] . '/blocks/top.php');
    ?>
    <div class="top_info">
        <div class="logo">
            <a href="#"></a>
        </div>
        <div class="info_h2">
            <h2>Агенство интересных маршрутов</h2>
        </div>
    </div>
    </div>
    </div>
    <div class="middle_services">
        <div class="headline">Наши услуги</div>
        <div class="strip"></div>
        <div class="flex">
            <div class="flex_services_foto flex_services_foto_1"></div>
            <div class="flex_services_price">
                <h2>Захватывающие крыши Санкт-Петербурга</h2>
                <p>Каждое наше мероприятие - уникально и неповторимо, потому что мы точно знаем где красиво, а где не очень. Уверены, что посетив наш тур, вы узнаете много нового и интересного о крышах Петербурга, а также насладитесь невероятными видами с высоты.</p>
                <p>Попав на крышу, вы будете покорены видами и пейзажем под открытым небом. Вашему взгляду будут доступны виды на Неву, мосты и достопримечательности нашего города.</p>
                <p class="price">1200руб / чел. </p>
                <div class="button"></div>
            </div>
            <div class="flex_services_price">
                <h2>Квест по центру Петербурга</h2>
                <p>Санкт-Петербург - город-музей под открытым небом. Его достопримечательности живут своей, тайной жизнью. Хочешь узнать,о чем молчат и куда ведут дома, памятники, улицы и фонари? Как связаны они с окружающей действительностью и как к ней относятся? Узнаем в ходе квеста - городские объекты сами расскажут тебе свою историю!</p>
                <p>Готовьтесь удивляться новым фактам и восхищаться неожиданными деталями, узнавать интересные истории и находить все новые и новые поводы влюбляться в этот прекрасный город!
                    Так что, если Вы хотите продегустировать все те культурные и исторические «вкусности», которые готов предложить Вам Санкт-Петербург, ни шагу назад! :) Вперед, на квест-экскурсию!</p>
                <p class="price">1.5 часа - 1500руб / чел.</p>
                <div class="button"></div>
            </div>
            <div class="flex_services_foto flex_services_foto_2"></div>
            <div class="flex_services_foto flex_services_foto_3"></div>
            <div class="flex_services_price">
                <h2>Реки и каналы города</h2>
                <p>Петербургские мосты и каналы – вот ради чего сюда приезжают и возвращаются туристы со всех концов мира. Находятся такие Романтики, которые после первого визита даже решают переехать в Петербург навсегда. Мойка, Фонтанка, канал Грибоедова, Зимняя Канавка, Адмиралтейский канал – перечисление рукавов и притоков Невы может занять много времени.
                    Если хотите провести время с пользой для души и узнать нечто новое, экскурсия по рекам и каналам Санкт-Петербурга станет лучшим времяпрепровождением. Забронировать поездку можно день в день, за день, или за пару недель до планируемой даты.</p>
                <h4>Тематика водных прогулок по Северной Столице очень разнообразна:</h4>
                <ul>
                    <li>Исторические и обзорные водные экскурсии по рекам и каналам Санкт Петербурга</li>
                    <li>Развлекательные туры под звуки джаза и блюза</li>
                    <li>Ночные прогулки на развод мостов</li>
                    <li>Поездка на «Метеоре» к дворцовому комплексу Петергофа</li>
                    <li>Водные экскурсии на «речном трамвайчике»</li>
                </ul>
                <p class="price">2 часа - 1600руб / чел.</p>
                <div class="button"></div>
            </div>
            <div class="flex_services_price">
                <h2>Организация мероприятий</h2>
                <p>Наша компания организует лучшее мероприятие для Вас и Вашего коллектива. С ностальгией Вы будете вспоминать время, проведенное в обществе коллег и друзей.</p>
                <p>Мы так же сотрудничаем с одними из лучших организаторов вечеринок в Санкт-Петербурге. Знаем о самых топовых мероприятиях города.
                    Если уже все билеты проданы, или вы просто не знаете куда пойти, то вы точно по адресу.
                </p>
                <div class="button"></div>
            </div>
            <div class="flex_services_foto flex_services_foto_4"></div>
        </div>
    </div>
    <!-- <div class="middle_choice"> -->
    <form method="POST" action="/handlers/form_choice.php">
        <div class="form_choice">
            <div class="form_service">
                <p>Выбирите услуги из списка и мы свяжемся с Вами!</p>
                <input type="radio" name="excursion" value="Захватывающие крыши Санкт-Петербурга">Захватывающие крыши Санкт-Петербурга <br>
                <input type="radio" name="excursion" value="Квест по центру Петербурга">Квест по центру Петербурга <br>
                <input type="radio" name="excursion" value="Реки и каналы города">Реки и каналы города <br>
                <input type="radio" name="excursion" value="Организация мероприятий">Организация мероприятий
                <p>Колличество человек:</p>
                <select name="quantity">
                    <option value="0" selected>Выбирите колличество</option>
                    <option value="1-5">1-5</option>
                    <option value="5-10">5-10</option>
                    <option value="10-20">10-20</option>
                    <option value="Более 20">Более 20</option>
                </select>
            </div>
            <div class="form_service">
                <input type="text" name="fio" placeholder="Введите ФИО">
                <p>Как с Вами связаться?</p>
                <div class="form_connection_tel">
                    <input type="radio" name="form_connection_choice" value="По телефону">По телефону <br>
                    <input type="tel" name="tel" placeholder="Введите телефон">
                </div>
                <div class="form_connection_email">
                    <input type="radio" name="form_connection_choice" value="По Email">По Email <br>
                    <input type="email" name="email" placeholder="Введите адрес Email">
                </div>
                <input type="submit" value="Отправить">
            </div>
        </div>
    </form>
    <!-- </div> -->

    <?php
    include($_SERVER['DOCUMENT_ROOT'] . '/blocks/footer.php');
    ?>