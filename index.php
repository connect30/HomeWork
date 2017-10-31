<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
     <?php
     require_once 'function.php';
     require_once 'Array_function.php';
   define('FONT', '22px');
   const COLOR = 'RED';
        ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            #p1 {
                font-size:<?=FONT;?>;
                color:<?=COLOR;?>;
                            }
        </style>
    </head>
    <body>
        <div>
        <p id="p1">To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.</p>
        </div>
        <div>
            <p id="p2">
                               
                                <?= Arr();?>
            </p>
        </div>
        <div>
            <p>
                <?=sh($arr_obj2);?>
        </div>
        
    </body>
</html>
