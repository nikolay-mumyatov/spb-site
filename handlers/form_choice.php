<?php
    include($_SERVER['DOCUMENT_ROOT'] . '/blocks/head.php');
?>
<head>
    <link rel="stylesheet" href="/styles/popup_menu/popup_menu.css">
    <link rel="stylesheet" href="/styles/style_form/form_choice_style.css">
    <link rel="stylesheet" href="/styles/footer_style/footer.css">
</head>
<body>

<?php

// Добавление пользователя

include($_SERVER['DOCUMENT_ROOT'] . '/config/config.php');

$query = "INSERT INTO `users` (`name`, `email`, `tel`) 
            VALUES ('{$_POST['fio']}', '{$_POST['email']}', '{$_POST['tel']}');";

$result = mysqli_query($db, $query);
    if ($result) { // Сразу приходит булево значение, можно не указывать = true, fals
        // echo 'Данные пользователя успешно сохранены!';
        $userId = mysqli_insert_id($db);
    } else {
        // echo 'Не удалось сохранить данные пользователя. Попробуйте снова.';
    }  

//  Занесение в Базу Данных выбора клиента
    if ($userId) {    
        $query = "INSERT INTO `orders` (`id`, `excursion_name`, `quantity`, `user_id`, `order_date`) 
                        VALUES ('', '{$_POST['excursion']}', '{$_POST['quantity']}', $userId, NOW() );";
        
        $result = mysqli_query($db, $query);
            if ($result) { 
                // echo 'Заказ успешно сохранен!';
            } else {
                // echo 'Не удалось сохранить заказ. Попробуйте снова.';
            }   
    }
?>

<!-- Проверка выбора клиентом услуги -->

    <?php
        $number = false;

        if (isset($_POST['excursion'])) {
            if ($_POST['excursion'] == 'Захватывающие крыши Санкт-Петербурга') {
                $number = 1;
            } elseif ($_POST['excursion'] == 'Квест по центру Петербурга') {
                $number = 2;
            } elseif ($_POST['excursion'] == 'Реки и каналы города') {
                $number = 3;
            } elseif ($_POST['excursion'] == 'Организация мероприятий') {
                $number = 4;
            }
        }
    ?>

 <!-- Проверка выбора клиентом количества человек -->

    <?php
        $quantityOption = false;

        if (isset($_POST['quantity']) && $_POST['quantity'] != '0') {
            if ($_POST['quantity'] == '1-5') {
                $quantityOption = 1;
            } elseif ($_POST['quantity'] == '5-10') {
                $quantityOption = 2;
            } elseif ($_POST['quantity'] == '10-20') {
                $quantityOption = 3;
            } elseif ($_POST['quantity'] == 'Более 20') {
                $quantityOption = 4;
            }
        }
    ?>


<!-- Замена фона в соответствии с выбором клиента -->

    <?php if ($number) : ?>
        <div class="form_page<?=$number; ?>">
            <?php include($_SERVER['DOCUMENT_ROOT'] . '/blocks/top.php');?>
            </div>
    <?php else: ?>
        Вы не выбрали услугу, письмо не отправлено!
    <?php endif; ?>

<!-- Ответ клиенту в сообщении -->

    </div>
        <div class="form_answer">
            <div class="fone">
                <?php
                    if (isset($_POST['excursion'])) {
                        echo "Добрый день! Вы выбрали услугу: \"{$_POST['excursion']}\". ";
                        } else {
                            echo "Вы указали некорректные данные!";
                    };
                ?>
                <br>

<!-- Проверка выбора клиентом способа связи и вывод в сообщение на экране -->

                <?php

                    if ( isset( $_POST['form_connection_choice'] ) && !empty( $_POST['email'] ) && $_POST['form_connection_choice'] == 'По Email' ) {
                            echo "Мы свяжемся с вами по эл.почте: {$_POST['email']}"; 
                        } elseif ( isset( $_POST['form_connection_choice'] ) && !empty( $_POST['tel'] ) && $_POST['form_connection_choice'] == 'По телефону' ) {
                            echo "Мы свяжемся с вами по телефону: {$_POST['tel']}";

                        } else {
                            echo "Вы указали некорректные данные!";
                    };
                ?>
            </div>  
        </div>        
    </div>

<?php        
    include($_SERVER['DOCUMENT_ROOT'] . '/blocks/footer.php');
?>