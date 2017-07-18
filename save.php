<?php
$action = $_GET["action"];
$myText = $_POST["mytext"];
$myPass = $_POST["pass"];

if($action = "save") {
  $targetFolder = "/path/to/folder";
  file_put_contents($targetFolder."mytext.txt", $myText);
  file_put_contents($targetFolder."mytext.txt", $myPass);
}
?>
