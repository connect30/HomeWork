<?php
$sit = 'google.ru';

$ip = gethostbyname($sit);

echo gethostbyaddr($ip);
