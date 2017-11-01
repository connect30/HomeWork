<?php

$res = false;
$str_text = false;
$str_load = false;
$str_load_file = false;
define('FILE_NAME', 'test_text.txt');
if (isset($_POST['Save']))
    Save();
elseif (isset($_POST['Load']))
    $str_load = Load();
elseif (isset($_POST['Delete']))
    Delete();

function Save() {
    if (isset($_POST['text'])) {

        $str_text = $_POST['text'];
        if ((file_put_contents(FILE_NAME, $str_text)) == true) {
            results(1);
        }
    }
}

function Load() {
    if ((file_exists(FILE_NAME)) == FALSE) {
        results(2);
        $str_load_file = FALSE;
    } else {
        $str_load_file = file_get_contents(FILE_NAME);
    }
    return $str_load_file;
}

function Delete() {
    if ((file_exists(FILE_NAME)) == FALSE) {
        results(2);
    } elseif (unlink(FILE_NAME) == TRUE) {
    results(3);     
}
}

function results($res) {
    switch ($res) {
        case 1:
            echo '<p>Сохранение прошло успешно<p>';
            break;
        case 2:
            echo '<p>Файл не существует<p>';
            break;
        case 3:
            echo '<p>Файл успешно удалён<p>';
            break;
    }
}
