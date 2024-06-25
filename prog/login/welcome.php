<html>
	<body>
		<head><title>Air-India</title></head>
		<button type="button" class="btn" id="logout" onclick="logout()">Logout</button>
	<body>
</html>
<?php
	session_start();
	$Login_flag = $_SESSION['Login_flag'];
	if($Login_flag == 0)
	{
		header("Location:index.php");
	}
?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
function logout()
{
	jQuery.ajax({
		url:'logout.php',
		type:'post',
		data:{},
		success:function(result)
		{
			if(result == 0)
			{
				location.reload(true);	
			}
		}
	});
}
</script>
<style>
body
{
	background-image: url('img/Welcome-Picture.png');
	//background-size: cover, contain, auto;
}
.btn
{
	background-color: #e32526;
    width: 86px;
    height: 33px;
	border-color: #e32526;
	margin-left: 92%;
}
</style>