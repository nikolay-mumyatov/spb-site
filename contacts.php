<?php
include($_SERVER['DOCUMENT_ROOT'] . '/blocks/head.php');
?>

<head>
    <link rel="stylesheet" href="/styles/page_contacts/style_contacts.css">
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
    <div class="middle_contacts">
        <div class="headline">Контакты</div>
        <div class="strip"></div>
        <div class="text_contacts">
            <p>Мы - команда тех, кто любит историю и любит Санкт-Петербург. </p>
            <p>Санкт-Петербург – это не только место по «заколачиванию денег» и «взращиванию карьеры»,
                а еще и бессонные ночи, развлечения, бесконечно красивые памятники природы и архитектуры.
                Активный отдых в Санкт-Петербурге – это отличная возможность вырваться навстречу приключениям.
                Принято считать, что воздух Питера пропитан свободой, творчеством и философскими разговорами.
                Креативные пространства есть не только в Питере, но именно здесь они имеют особое значение и привлекательность. </p>
            <p>Мы знаем что, как и где. И мы с удовольствием с вами поделимся!</p>
        </div>
        <div class="flex">
            <div class="flex_staff">
                <div class="staff_foto_1"></div>
                <div class="staff_text">
                    <div class="staff_info">
                        <h3>Александр Рыбаков</h3>
                        <p>директор</p>
                    </div>
                    <div class="staff_email">
                        <p>По всем вопросам пишите на почту:</p>
                        <p><a href="rybacov@sp.ru">rybacov@sp.ru</a></p>
                    </div>
                </div>
            </div>
            <div class="flex_staff">
                <div class="staff_foto_2"></div>
                <div class="staff_text">
                    <div class="staff_info">
                        <h3>Елена Белкина</h3>
                        <p>руководитель корпоративного отдела</p>
                    </div>
                    <div class="staff_email">
                        <p>По всем вопросам корпоративных экскурсий:</p>
                        <p><a href="belkina@sp.ru">belkina@sp.ru</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex_2">
            <div class="flex_contacts">
                <div class="contacts_icon">
                    <p class="contacts_adres">Санкт-Петербург, Большая Спасская д.12</p>
                    <p class="contacts_email">SP@gmail.com</p>
                    <p class="contacts_tel">+7(812)654-32-10</p>
                </div>
            </div>
            <div class="form">
                <p>Напишите нам</p>
                <form action="form.php" method="GET">
                    <input type="text" name="fio" placeholder="Имя, Фамилия">
                    <input type="email" name="email" placeholder="Email">
                    <input type="tel" name="tel" placeholder="Телефон">
                    <textarea name="question" cols="67" rows="7" placeholder="Ваше сообщение"></textarea>
                    <input type="submit" value="Отправить сообщение">
                </form>
            </div>
        </div>
    </div>
    <?php
    include($_SERVER['DOCUMENT_ROOT'] . '/blocks/footer.php');
    ?>