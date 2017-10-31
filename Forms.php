<?php
require_once 'function_str.php';
?>

<html>
    <head>       
        
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
                    Длина текста: <?php echo mb_strlen($_POST['ta1']);?>
                </p>
            </div>
        </body>
    </main>

</html>
