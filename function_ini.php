<?php
define('INI_FILE', 'color.ini');
$ini = parse_ini_file(INI_FILE);

$color = $ini['color'];
$font_size = $ini['font-size'];

echo '<pre>';

function pars_lan() {
    $ru_ini_file = parse_ini_file('ru.ini');
    $en_ini_file = parse_ini_file('en.ini');
    $ru = iconv('Windows-1251', 'UTF-8', ($ru_ini_file['TITLE']));
    $en = $en_ini_file['TITLE'];
    $lang = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
if (substr($lang, 0, 2) == 'ru'){
    return $ru;
} else {
        return $en;
}
}



