<?php
$target_path = 'D:/';
$file_path = $target_path.basename($_FILE['input_file']['name']);
if(move_uploaded_file($_FILE['input_file']['temp_name'],$file_path))
{
	echo 'file uploaded';
}
else
{
	echo 'file not uploaded';
}
?>