<?php
echo "************write file operation**************<br>";	

$file = fopen('upload/about.txt','w');
$content = 'this is about file contents information about exercise!';
fwrite($file,$content);
echo 'file written successfully!';
fclose($file);

echo "<br>************append file operation**************<br>";	

$file = fopen('upload/about.txt','a');
$content = 'file handling is a important part of web application!';
fwrite($file,$content);
echo 'file appended successfully!';
fclose($file); 

echo "<br>************read file operation**************<br>";	
$read = fopen('upload/about.txt','r');
echo fread($read,filesize('upload/about.txt'));
fclose($read);

echo "<br>************delete file operation**************<br>";	

$file = 'upload/about.txt';
unlink($file);
echo 'file is deleted successfully!';
?>