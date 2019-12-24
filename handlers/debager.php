<?php 

function d($array){
    echo '<pre>';
    print_r($array);
    '</pre>';
};

function vd($array){
    echo '<pre>';
    var_dump($array);
    '</pre>';
};

function parseDate($date) {
    // 2018-02-24

    $data_pats = explode('-', $date);

    $mounth = [
        'Января',
        'Февраля',
        'Марта',
        'Апреля',
        'Мая',
        'Июня',
        'Июля',
        'Августа',
        'Сентября',
        'Октября',
        'Ноября',
        'Декабря'
    ];

    $final_date = $data_pats[2] . ' ' . $mounth[$data_pats[1] - 1] . ' ' . $data_pats[0] . ' ' . 'года';

    return $final_date;
}

?>
