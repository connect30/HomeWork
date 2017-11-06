<?php
$reg = '#^\w...c$#i';
$str = '57abc';
 //echo preg_match($reg, $str, $m);
 //print_r($m);
 
 
 $str1 = date('Y.m.d H:i:s');
 
 $reg1 = '#^(\d{4})\.(\d{2})\.(\d{2})\s(\d{2})\W(\d{2})\W(\d{2,})$#';
 
 preg_match($reg1, $str1, $m);
 foreach ($m as $value) {
   //  echo '<br />'.$value;
    
}

$str2 = 'Внизу страницы www.mts.com, после укороченной горизонтальной линии, этот номер повторяется, и за ним следуют библиографические сведения об источнике. Зачастую требуется, также указание  номера www.ukrtelecom.ua цитируемой страницы www.mysi.com.';
//$reg2 = '#www\.([a-z0-9_-]+)\.([a-z]){2,4}#';
$reg2 = '#www\.([a-z0-9]+)\.([a-z]){2,4}#';
//$str3 = 'www.mts.com';
  //preg_match($reg2, $str3, $m);
 //print_r($m);


//echo preg_replace($reg2, 'Ссылки запрещены', $str2);
if (isset($_POST['submit'])){
    $ustr = $_POST['ext1']; 
    $ureg = '#^([a-z0-9_-]{3,16})$#i';    
    
    if (preg_match($ureg, $ustr)){
        echo 'Password valid!!';
    } else {
        echo 'BAD Password!!';    
    }

}
?>

<form action="" method="post">
                    <input type="text" name="ext1" />
                    <input type="submit" name="submit"/>
                </form>