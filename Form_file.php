<?php
require_once 'function_file.php';

?>

<html>
    <head></head>
    <body>
        <form action="" method="post">
            <textarea name="text">
                <?php echo $str_load;?>
            </textarea>
            <input type="submit" name="Save" value="Save"/>
            <input type="submit" name="Load" value="Load"/>
            <input type="submit" name="Delete" value="Delete"/>
        </form>
        <div>
            
        </div>
    </body>
</html>
