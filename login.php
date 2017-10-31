<?php
 require_once 'md5.php';
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
            <form method="post" action="">
                <input type="text" name="login"/>Login
                <input type="password" name="password"/>Password
                <input type="submit" name="submit" value="OK"/>
            </form>
        </div>
        <div>
            <p>
                <?=$result;?>;
            </p>
        </div>
    </body>
</html>
