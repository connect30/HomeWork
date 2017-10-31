<?php
$str_password = md5('362061');
$login = 'Admin';
$result = false;

if (isset($_POST['submit'])){
    if (($_POST['login'] == $login)&&(md5($_POST['password']) == $str_password)){
        $result = 'Welcome!!!';
    } else {
            $result = 'Error login!!!';
    }
}



