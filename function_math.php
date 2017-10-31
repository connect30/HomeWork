<?php
$res = false;
if (isset($_POST['submit'])) {
//    if ((isset($_POST['val1']) && (!empty($_POST['val1']))) || (isset($_POST['val2']) && (!empty($_POST['val2'])))) {
//        $val1 = $_POST['val1'];
//        $val2 = $_POST['val2'];
//        
//        if ($val1 < $val2) {
//            $min = $val1;
//            $max = $val2;
//            $result = result($min, $max);
//        } elseif ($val1 > $val2) {
//            $max = $val1;
//            $min = $val2;
//            $result = result($min, $max);
//        } else {
//            $min = false;
//            $max = false;
//            $result = 'Ошибка при вводе чисел';
//        }
//      if ((isset($_POST['val3']) || (!empty($_POST['val3'])))) {
//          $arr = [];    
//          $val3 = $_POST['val3'];
//          $arr[] = explode(" ", $val3);
//          foreach ($arr as $value) {
//          $max = max($value);
//          $min = min($value);
//          $res = result($min, $max);
//          }
//      }  
//      }
//
//function result($min, $max) {
//    $res = mt_rand($min, $max);
//        return $res;
//}

//$arr1 = [20,55.0,21.01,77];
//$arr2 = [];
//foreach ($arr1 as $value) {
//        echo '<br>'.'Цена: '.$value;
//    $total = $value - ($value*0.23);  
//    echo '<br>'.'Цена - 23%: '.$total;    
//    $arr2[] = round($total, 2);   
//    }
//    echo '<hr>';
//    foreach ($arr2 as $value2) {
//echo '<br>'.$value2;    
//}

if ((isset($_POST['val3']) || (!empty($_POST['val3'])))) {
          $arr = [];    
          $val3 =  $_POST['val3']??false;
          
          for ($i=0; $i<mb_strlen($val3); $i++){
          $arr[] = $val3[$i];
          
          }
      foreach ($arr as $value) {
          $count++;          
          if ($count%2 != 0)  echo iconv ('CP866', 'UTF-8', $value); 
//$arr[] = explode('',$val3);
          //foreach ($arr as $value) {
//          $max = max($value);
//          $min = min($value);
//          $res = result($min, $max);
       // print_r($arr);                
     
          }
           
          }
    
      

}

?>



<html>
    <head>       
        
    </head>
    <main>
        <body>
            <div>
                <form action="" method="post">
                    <input type="text" name="val1"/>
                    <input type="text" name="val2"/>
                    <input type="text" name="val3"/>ARRAYS
                    <input type="submit" name="submit"/>                
                </form>
            </div>
            <div>
                <p>
                    Result: <?= $res; ?>
                </p>
            </div>
        </body>
    </main>

</html>

