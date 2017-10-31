<?php
require_once 'function.php';
$result = false;
$name = false;
if (isset($_GET['submit'])) {
    if (isset($_GET['in']) && (!empty($_GET['in']))) {
        $name = $_GET['in'];
    }
    if (is_numeric($name)) {
        if ($name < 0) {
            $result = 'Число должно быть 0 или больше 0';
        } else {
            $result = fact2($name);
        }
    } else {
        $result = 'Вы ввели не число!!!';
    }
}
?>

<form  metod="GET">
    <input type="text" name="in"/>
    <input type="submit" name="submit"/>
</form>
<p>
    <?php echo $result; ?>
</p>