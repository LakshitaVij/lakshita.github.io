#!/usr/local/bin/php
<?php
$namef = "./$imgtitle-$namef" . $_GET['file']. ".png";
$max_time = 1.; 
$start = microtime(true);
while( !file_exists($fileName) && microtime(true) - $start < $max_time){
    ;
}
echo (int) file_exists($namef); 
exit();
?>