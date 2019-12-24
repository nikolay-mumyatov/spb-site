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

    <?php
        
    include($_SERVER['DOCUMENT_ROOT'] . '/config/config.php');
 
    
        $query = "INSERT INTO `users` (`name`, `email`, `tel`) 
                    VALUES ('{$_POST['fio']}', '{$_POST['email']}', '{$_POST['tel']}');";
        
        $result = mysqli_query($db, $query);
            if ($result) { // Сразу приходит булево значение, можно не указывать = true, fals
                // echo 'Данные успешно сохранены!';
            } else {
                // echo 'Не удалось сохранить данные. Попробуйте снова.';
            }      
    ?>

    <div class="answer_form">
        <?php
            
            if ( !empty( $_POST['fio'] ) ){
                echo "Добрый день, {$_POST['fio']}, благодарим за письмо!" ;
            } else {
                echo "Вы указали некорректные данные!";
            
            };
        ?>

        <br>
                
        <?php
            if ( isset( $_POST['connect'] ) && !empty( $_POST['email'] ) && $_POST['connect'] == 'По Email' ) {
                    echo "Мы свяжемся с вами по эл.почте: {$_POST['email']}"; 
                } elseif ( isset( $_POST['connect'] ) && !empty( $_POST['tel'] ) && $_POST['connect'] == 'По телефону' ) {
                    echo "Мы свяжемся с вами по телефону: {$_POST['tel']}";

                } else {
                    echo "Вы указали некорректные данные!";
            };
        ?>    
    </div>

<?php        
    include($_SERVER['DOCUMENT_ROOT'] . '/blocks/footer.php');
?>