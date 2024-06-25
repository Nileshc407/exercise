<html>
<head><title>upload file</title></head>
<body>
	<form method="post" action="#" enctype="multipart/form-data">
		<input type="file" name="input_file" id="input_file">
		<button type="submit" name="submit">upload</button>
	</form>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
	$target_path = 'upload/';
	$file_path = $target_path.basename($_FILES['input_file']['name']);
	$result = move_uploaded_file($_FILES['input_file']['tmp_name'],$file_path);
	if($result)
	{
		echo 'file uploaded successfully!';
	}
	else
	{
		echo 'error in file uploading';
	}
	
}
?>