<!DOCTYPE html>
<html>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
<body>
<div ng-app="">
<form method="post" action="#">
<p>Input something in the input box:</p>
<p>Name : <input type="text" ng-model="name" name="name" placeholder="Enter name here"></p>
<p>country : <select ng-model="country"><option value="">select country</option><option value="india">india</option><option value="kenya">kenya</option></select></p>
<h1>Hello {{name}}</h1>
<h1>your country is {{country}}</h1>
<button type="submit" name="submit">submit</button>
</form>
</div>

</body>
</html>
<?php
if(isset($_POST['submit'])){
	echo $_POST['name']; 
	$url = "http://localhost/exercise/angular/getData.php";
	
	$ch = curl_init();
	
	curl_setopt_array($ch,array(
	CURLOPT_URL=>$url,
	CURLOPT_RETURNTRANSFER=>true,
	CURLOPT_CUSTOMREQUEST=>'POST',
	CURLOPT_POSTFIELDS=>'',
	CURLOPT_HTTPHEADER=>array('Autorization:sddd','Content-Type:application/json'),
	));
	$response = curl_exec($ch);
	curl_close($ch);
	$result = json_decode($response);
	echo "getData response : ".$response;
	echo "<br>name : ".$result->name;
}
?>