<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="this is html javascript program to change box color">
<meta name="keywords" content="javascript, change color,box">
<title>change box color</title>
</head>
<body>
	<div id="box1" class="box" style="background-color:green;" onclick="change_color('box1');">
	</div><br>
	<div id="box2" class="box" style="background-color:green;" onclick="change_color('box2');">
	</div>
</body>
</html>
<script type="text/javascript">
function change_color(id)
{
	if(id == 'box1')
	{
		var box = document.getElementById('box1');
		var color = box.style.backgroundColor;
		if(color == 'red')
		{
			box.style.backgroundColor = 'yellow';
		}
		else if(color == 'yellow')
		{
			box.style.backgroundColor = 'green';
		}
		else if(color == 'green')
		{
			box.style.backgroundColor = 'red';
		}
	}
	if(id == 'box2')
	{
		var box = document.getElementById('box2');
		var color = box.style.backgroundColor;
		if(color == 'red')
		{
			box.style.backgroundColor = 'yellow';
		}
		else if(color == 'yellow')
		{
			box.style.backgroundColor = 'green';
		}
		else if(color == 'green')
		{
			box.style.backgroundColor = 'red';
		}
	}
}
</script>
<style>
.box{
	width : 100px;
	height : 50px;
}
</style>