<?php
include("db.php");
$data = $conn->query("SELECT * FROM country_master");

if(isset($_POST['esubmit']))
{
	$name = $_REQUEST['ename'];
	$contact = $_REQUEST['emobile'];
	$email = $_REQUEST['eemail'];
	$country = $_REQUEST['ecountry'];
	$state = $_REQUEST['estate'];
	$city = $_REQUEST['ecity'];

	$result = $conn->query("INSERT INTO user_master(name,contact,email,country,state,city)VALUES('$name','$contact','$email','$country','$state','$city')");

	if($result)
	{
		header('location:index.php');
	}
}
?>
<html>
<head><title>ajax prog</title></head>
<body>
<h4>This is ajax program</h4>
	<form method="post" action="#">
		<table>
			<tr><td>name </td><td><input type="text" name="ename"></td></tr>
			<tr><td>email </td><td><input type="text" name="eemail"></td></tr>
			<tr><td>mobile </td><td><input type="text" name="emobile"></td></tr>
			<tr><td>country </td><td><select name="ecountry" onchange="getState(this.value)">
			<option value="">select country</option>
			<?php while($row = mysqli_fetch_object($data))
			{ ?><option value="<?php echo $row->id; ?>"><?php echo $row->name; ?></option><?php }?>
			</select></td></tr>
			<tr><td>state</td><td><select name="estate" id="estate" onchange="getCity(this.value)"><option value="">select state</option></select></td></tr>
			<tr><td>city</td><td><select name="ecity" id="ecity"><option value="">select city</option></select></td></tr>
			<tr><td> </td><td><button type="submit" name="esubmit">submit</button></td></tr>
		</table>
	</form>
</body>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
function getState(id)
{
  var countryId = id;
  var selectBox = document.getElementById('estate');
  var selectBoxCity = document.getElementById('ecity');

  $.ajax({
		type:"POST",
		data:{id:countryId},
		url:"get_state.php",
		success:function(resp)
		{		
			var jsonResponse = JSON.parse(resp);
			if(jsonResponse !=null)
			{	
				jsonResponse.forEach(function(item){
					var optionElement = document.createElement('option');
					optionElement.value = item.id;
					optionElement.text = item.name;
					selectBox.appendChild(optionElement);
				});
			}
			else
			{
				selectBox.options.length = 0;
				var optionElement = document.createElement('option');
				optionElement.value = "";
				optionElement.text = "select state";
				selectBox.appendChild(optionElement);
				
				selectBoxCity.options.length = 0;
				var optionElement1 = document.createElement('option');
				optionElement1.value = "";
				optionElement1.text = "select city";
				selectBoxCity.appendChild(optionElement1);
				
			}
		}	 
  });
}
function getCity(id)
{
	var stateId = id;
	var selectBox = document.getElementById("ecity");
	
	$.ajax({
		type:"POST",
		data:{id:stateId},
		url:"get_city.php",
		success:function(resp)
		{
			var response = JSON.parse(resp);
			if(response !=null)
			{
				response.forEach(function(item){
					var optionElement = document.createElement('option');
					optionElement.value = item.id;
					optionElement.text = item.name;
					selectBox.appendChild(optionElement);
				});
			}
			else
			{
				selectBox.options.length = 0;
				var optionElement = document.createElement('option');
				optionElement.value = "";
				optionElement.text = "select city";
				selectBox.appendChild(optionElement);
			}
		}
	});
}
</script>