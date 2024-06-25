<html>
<head><title>Calculator</title></head>
<body>
<form method="post" action="#" name="myForm">
	<input type="number" name="num01" placeholder="Number one" required><br><br>
	<select name="operator" required>
		<option value="">Select operator</option>
		<option value="Add">+</option>
		<option value="Sub">-</option>
		<option value="Mul">*</option>
		<option value="Div">/</option>
	</select><br><br>
	<input type="number" name="num02" placeholder="Number two" required><br><br>
	<button type="submit" name="submit">Calculate</button>
</form>
</body>
</html>

<?php
if(isset($_POST['submit']))
{
	$num01 = $_POST['num01'];
	$num02 = $_POST['num02'];
	$operator = $_POST['operator'];
	$value = 0;
	switch($operator)
	{
		case "Add": $value = $num01+$num02;
		break;
		
		case "Sub": $value = $num01-$num02;
		break;
		
		case "Mul": $value = $num01*$num02;
		break;
		
		case "Div": $value = $num01/$num02;
		break;
		
		default: echo "Something went wrong!"; 
	}
	echo "<br>Result = ".$value;
}
else
{
	echo "Please fill up required fields";
}
?>