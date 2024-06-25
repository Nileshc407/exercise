<?php
include "db.php";
$countryData = $conn->query("select * from country_master");
?>
<html>
<head><title>crud opration</title></head>
<body>
	<form method="post" action="#">
		<table style="border-style:none;">
			<tr><td><label>Name</label></td><td><input type="text" name="name" placeholder="enter name" required></td></tr>
			<tr><td><label>Phone</label></td><td><input type="text" name="phone" placeholder="enter phone number"required></td></tr>
			<tr><td><label>Email</label></td><td><input type="text" name="email" placeholder="enter email id" required></td></tr>
			<tr><td><label>Country</label></td><td><select name="country" onchange="get_state(this.value)" required><option value="">select country</option><?php while($row = mysqli_fetch_object($countryData)){ ?> <option value="<?php echo $row->id; ?>"><?php echo $row->name; ?></option><?php } ?></select></td></tr>
			<tr><td><label>State</label></td><td><select name="state" id="state" onchange="get_city(this.value)"required><option value="">select state</option></select></td></tr>
			<tr><td><label>City</label></td><td><select name="city" id="city" required onchange="createHtmlElement(this.value)"><option value="">select city</option></select></td></tr>
			<tr><td></td><td><button type="submit" name="insert">submit</button></td>
		</table>
		<div id="container">
			<h5>create dynamic element here</h5>
		</div>
		<div id="elementContainer1">
			<h5>create dynamic element here1</h5>
		</div>
	</form>
</body>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
function get_state(id){
	var country_id = id;
	var stateSelctBox = document.getElementById('state');
	var citySelctBox = document.getElementById('city');
	
	citySelctBox.options.length = 0;
	selectOption2 = document.createElement('option');
	selectOption2.value = "";
	selectOption2.text = "select city";
	citySelctBox.appendChild(selectOption2);
	
	$.ajax({
		type:"POST",
		data:{id:country_id},
		url:"get_state.php",
		success:function(res)
		{
			var response = JSON.parse(res);
			if(response !=null){
				response.forEach(function(data){
					selectOption = document.createElement('option');
					selectOption.value = data.id;
					selectOption.text = data.name;
					stateSelctBox.appendChild(selectOption);
				});
			}
			else{
				stateSelctBox.options.length = 0;
				selectOption1 = document.createElement('option');
				selectOption1.value = "";
				selectOption1.text = "select state";
				stateSelctBox.appendChild(selectOption1);
			}
		}
	});
}
function get_city(id){
	var state_id = id;
	var citySelectBox = document.getElementById('city');
	$.ajax({
		type:"POST",
		data:{id:state_id},
		url:"get_city.php",
		success:function(res)
		{
			var response = JSON.parse(res);
			if(response !=null){
				response.forEach(function(data){
					selectOption = document.createElement('option');
					selectOption.value = data.id;
					selectOption.text = data.name;
					citySelectBox.appendChild(selectOption);
				});
			}
			else{
			citySelectBox.options.length = 0;
				selectOption1 = document.createElement('option');
				selectOption1.value = "";
				selectOption1.text = "select city";
				citySelectBox.appendChild(selectOption1);
			}
		}
	});
}
function createHtmlElement()
{
	var elementContainer = document.getElementById('container');
	var selectBox = document.createElement('select');
	option = document.createElement('option');
	option.value =""
	option.text = "select box";
	elementContainer.appendChild(selectBox);
	selectBox.appendChild(option); 
	
	var textBox = document.createElement('input');
	textBox.tpe="text";
	textBox.name="address";
	textBox.id="address";
	textBox.placeholder="enter address";
	textBox.value="m g road pune";
	elementContainer1.appendChild(textBox);
}
</script>
<?php
if(isset($_POST["insert"])){
	$name = mysqli_real_escape_string($conn,$_REQUEST["name"]);
	$phoneNo = mysqli_real_escape_string($conn,$_REQUEST["phone"]);
	$emailId = mysqli_real_escape_string($conn,$_REQUEST["email"]);
	$country_id = mysqli_real_escape_string($conn,$_REQUEST["country"]);
	$state_id = mysqli_real_escape_string($conn,$_REQUEST["state"]);
	$city_id = mysqli_real_escape_string($conn,$_REQUEST["city"]);
	
	$query = "INSERT INTO user_master(name,contact,email,country,state,city)VALUES('$name','$phoneNo','$emailId','$country_id','$state_id','$city_id')";
	$insert = mysqli_query($conn,$query);
	if($insert)
	{
		header('location:index.php');
	}
}

$sel = "SELECT * FROM user_master";
$select = mysqli_query($conn,$sel);
$result = mysqli_num_rows($select);
if($result > 0){
	echo "<table id='dataTable'>";
	echo "<th colspan='2'>action</th><th>name</th><th>contact no</th><th>email id</th>";
	while($row = mysqli_fetch_assoc($select)){
		echo "<tr>
		<td><a href='edit.php?id=".$row["id"]."'>edit</a></td>
		<td><a href='delete.php?id=".$row["id"]."'>delete</a></td>
		<td>".$row["name"]."</td><td>".$row["contact"]."</td><td>".$row["email"]."</td>
		</tr>";
	}
	echo "</table>";
}
?>
<style>
#dataTable{
	th, td {
	border: 1px solid black;
	}
}
</style>