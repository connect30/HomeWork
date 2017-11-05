<?php

$start = microtime(true);
for($i = 0; $i < 10**7; $i++);
//echo microtime(true) - $start;

function time1() {
    $time1 = time() + mt_rand(1, 10) * 1000;
 
    echo '<br />';
    echo date('d-m-Y H:i:s');
    echo '<br />';
    echo date('d-m-Y H:i:s', $time1);
    
    
    echo '<br />';
    echo date('H:i:s', ($time1 - time()));
    
}
function getgm($local) {
    $offset = date("Z", $local);
    return $local - $offset;    
}

function getlm($gm, $offset ) {
    return $gm + $offset;    
}
function res() {
    $gmt = false;
    if (isset($_POST['gmt'])){
    $gmt = $_POST['gmt'];}
    return date('Y.m.d H:i:s', getlm(getgm(time()), 3600 * $gmt));
    
}
//echo '<br />'.date('Y.m.d H:i:s', getlm(getgm(time()), 3600*3));
?>
<form action="function_date.php" method="post">
    <select name="gmt">
        <option value='3'>GMT+1</option>
        <option value='4'>GMT+2</option>
        <option value='5'>GMT+3</option>
    </select>
    <p><input type="submit" value="Отправить"></p>
</form>
<p>
    <?php echo res();?>
</p>


