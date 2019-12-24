<?php
    include($_SERVER['DOCUMENT_ROOT'] . '/blocks/head.php');
?>
<head>
    <link rel="stylesheet" href="/styles/page_contacts/style_contacts.css">
    <link rel="stylesheet" href="/styles/style_form/form.css">
    <link rel="stylesheet" href="/styles/footer_style/footer.css">
</head>

<body>

    <?php include($_SERVER['DOCUMENT_ROOT'] . '/blocks/top.php'); ?>

        <div class="top_info" id="wrap">
                    <div class="logo">
                        <a href="#"></a>
                    </div>
                    <div class="info_h2">
                        <h2>Агенство интересных маршрутов</h2>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
 

    <?php
        
    include($_SERVER['DOCUMENT_ROOT'] . '/config/config.php');
    include($_SERVER['DOCUMENT_ROOT'] . '/handlers/debager.php');

    $error = '';

    if (!empty($_GET)){
            if (!empty($_GET['search'])) {
                if ((strlen($_GET['search']) > 3)) {
                    
                    $query = "SELECT `orders`.`excursion_name` AS `excursion`,
                                     `orders`.`user_id` AS `user_order_id`,
                                     `users`.`id` AS `user_db_id`,
                                     `users`.`name` AS `user_name`
                                FROM `orders`
                                LEFT JOIN `users`
                                ON `users` . `id` = `orders` . `user_id`
                                WHERE `orders` . `excursion_name` = 'Квест по центру Петербурга' ";

                    $result = mysqli_query($db, $query);

                    while ($result_array = mysqli_fetch_assoc($result)){
                        d($result_array);
                    }
                    
                
                } else {
                    $error = 'Длина запроса должна быть больше 3-х симвалов';
                }
            
        } else {
            $error = 'Впишите данные в запрос!';
        }
    }
    
    
    ?>

    <div class="answer_form">
        <form method="GET" action="">
            <input type="text" name="search">
            <input type="submit" value="Найти">
        </form>
        <div class="error">
            <?=$error?>
            <?=parseDate(date('Y-m-d'))?>
        </div>
    </div>

<script src="/javascript/vanilla.js"></script>

<?php        
    include($_SERVER['DOCUMENT_ROOT'] . '/blocks/footer.php');
?>