<?php
//require_once 'function_str.php';
require_once 'function_ini.php';

?>

<html>
    <head>    
        <title><?=pars_lan();?></title>
        <style>
            p {color: <?=$color;?>;
              font-size:<?=$font_size;?>
                            }
            </style>
    </head>
    <main>
        <body>
            <div>
                <form action="" method="post">
                    <textarea name="ta1">
                    Лидер британского рок-коллектива The Rolling Stones Мик Джаггер закрутил роман с 22-летней кинопродюсером Нур Альфаллой, передает The Sun со ссылкой на собственный источник.    
                    </textarea>
                    <input type="text" name="val1"/>
                    <input type="submit" name="submit"/>                
                </form>
            </div>
                 <div>
                <p>
                    Лидер британского рок-коллектива The Rolling Stones Мик Джаггер закрутил роман с 22-летней кинопродюсером Нур Альфаллой, передает The Sun со ссылкой на собственный источник.    
                </p>
            </div>
        </body>
    </main>

</html>
