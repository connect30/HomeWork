<?php
define('DIR', 'C:\APACHE\WWW\HomeWork\'');

function Create_Dir($count_dir) {
$i = 0;
$d = __DIR__;
while ($i<$count_dir) {
    $rand =  mt_rand('0', '99');
     $dir_id = uniqid($rand,FALSE);  
      mkdir("{$d}/{$dir_id}");
       $i++;       
}

}

function Open_random_DIR() {
    $dd = __DIR__;
    $dir_name = scandir($dd);
    $dir_arr = [];
        foreach ($dir_name as $dir_value) {
        //echo '<pre>'.$dir_value;
            if (is_dir($dir_value) && ($dir_value!='.')&& ($dir_value!='..')&&($dir_value!='.git')&&($dir_value!='nbproject'))
                 $dir_arr[] = $dir_value;
                 }
                 $n = count($dir_arr);
                 $i = mt_rand(0, $n-1);
                 $ch_dir = $dir_arr[$i]; 
                 $rand_file =  mt_rand('0', '99');
                 $file_id = uniqid($rand_file,FALSE);  
                 file_put_contents("{$ch_dir}/{$file_id}".'.'.'txt', 'Test');
                 
        
}

function Delete_DIR() {
    $dd = __DIR__;
    $dir_name = scandir($dd);
    $dir_arr = [];
        foreach ($dir_name as $dir_value) {
        if (is_dir($dir_value) && $dir_value !='.' && $dir_value !='..' && $dir_value !='.git' && $dir_value != 'nbproject')
            //&&($dir_value!='.git') && ($dir_value!='nbproject'));
         $dir_arr[] = $dir_value;
        }
      
     foreach ($dir_arr as $value_file) {
         if (file_exists('')) continue;
            $f = $dd.'/'.$value_file;
           echo '<br>'.$f;
           if (is_dir($f)) Delete_DIR ($f);                            
        }

}

///Create_Dir(10);            
        

//Open_random_DIR();

Delete_DIR();
