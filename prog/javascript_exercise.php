<div class="container">
	<div id="box1" style="background-color:yellow" onclick="cheange_box_color('box1')">
		<br>Click here
	</div><br>
	<div id="box2" style="background-color:yellow" onclick="cheange_box_color('box2')">
		<br>Click here
	</div><br>
	<div id="box3" style="background-color:yellow" onclick="cheange_box_color('box3')">
		<br>Click here
	</div><br>
	<div id="box4" style="background-color:yellow" onclick="cheange_box_color('box4')">
		<br>Click here
	</div>
</div> <br>
<button type="button" id="btn1" style="background-color:white" onclick="cheange_btn_color('btn1')">Button1</button>
<button type="button" id="btn2" style="background-color:white" onclick="cheange_btn_color('btn2')">Button2</button>
<button type="button" id="btn3" style="background-color:white" onclick="cheange_btn_color('btn3')">Button3</button>
<button type="button" id="btn4" style="background-color:white" onclick="cheange_btn_color('btn4')">Button4</button>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
function cheange_box_color(bxid)
{
	if(bxid == 'box1')
	{
		var box = document.getElementById("box1");
		
		var originalColor = box.style.backgroundColor;
		
		if (originalColor == 'yellow') 
		{
			box.style.backgroundColor = "green";
		} 
		else if (originalColor == 'green') 
		{
			box.style.backgroundColor = "yellow";
		}
	}
	if(bxid == 'box2')
	{      
		var box = document.getElementById("box2");
		var originalColor = box.style.backgroundColor;
		
		if (originalColor == 'yellow') 
		{
			box.style.backgroundColor = "green";
		} 
		else if (originalColor == 'green') 
		{
			box.style.backgroundColor = "yellow";
		}
	}
	if(bxid == 'box3')
	{
		var box = document.getElementById("box3");
		var originalColor = box.style.backgroundColor;
		
		if (originalColor == 'yellow') 
		{
			box.style.backgroundColor = "green";
		} 
		else if (originalColor == 'green') 
		{
			box.style.backgroundColor = "yellow";
		}
	}
	if(bxid == 'box4')
	{
		var box = document.getElementById("box4");
		var originalColor = box.style.backgroundColor;
		
		if (originalColor == 'yellow') 
		{
			box.style.backgroundColor = "green";
		} 
		else if (originalColor == 'green') 
		{
			box.style.backgroundColor = "yellow";
		}
	}
}
function cheange_btn_color(btnid)
{
	if(btnid == 'btn1')
	{
		var button = document.getElementById("btn1");
		var originalColor = button.style.backgroundColor;
		
		if (originalColor == 'white') 
		{
			button.style.backgroundColor = "green";
		} 
		else if (originalColor == 'green') 
		{
			button.style.backgroundColor = "white";
		}
	}
	if(btnid == 'btn2')
	{
		var button = document.getElementById("btn2");
		var originalColor = button.style.backgroundColor;
		
		if (originalColor == 'white') 
		{
			button.style.backgroundColor = "green";
		} 
		else if (originalColor == 'green') 
		{
			button.style.backgroundColor = "white";
		}
	}
	if(btnid == 'btn3')
	{
		var button = document.getElementById("btn3");
		var originalColor = button.style.backgroundColor;
		
		if (originalColor == 'white') 
		{
			button.style.backgroundColor = "green";
		} 
		else if (originalColor == 'green') 
		{
			button.style.backgroundColor = "white";
		}
	}
	if(btnid == 'btn4')
	{
		var button = document.getElementById("btn4");
		var originalColor = button.style.backgroundColor;
		
		if (originalColor == 'white') 
		{
			button.style.backgroundColor = "green";
		} 
		else if (originalColor == 'green') 
		{
			button.style.backgroundColor = "white";
		}
	}
}
</script>
<style>
#box1
{
	width:200px;
	height:100px;
	text-align:center;
}
#box2
{
	width:200px;
	height:100px;
	text-align:center;
}#box3
{
	width:200px;
	height:100px;
	text-align:center;
}#box4
{
	width:200px;
	height:100px;
	text-align:center;
}
</style>