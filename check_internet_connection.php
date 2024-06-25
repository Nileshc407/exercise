<html>
<head><title>internet connection</title>
</head>
	<body>
		<div id="status">here is status</div>
		<button id="clickButton">Click here</button>
	</body>
</html>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
console.log(navigator.onLine);
console.log(navigator.userAgent);
console.log(navigator.appName);
console.log(navigator.appVersion);
console.log(navigator.platform);
console.log(navigator.language);
console.log(navigator.cookieEnabled);

window.addEventListener("load", function() {
	//console.log("Page loaded!");
	var result = navigator.onLine;
	if(result == true)
	{
		document.getElementById('status').innerHTML='you are online';
		// jQuery("#status").html('you are online');
	}
	else if(result == false)
	{
		document.getElementById('status').innerHTML='you are offline';
		//jQuery("#status").html('you are offline');
	}
});

var button = document.getElementById('clickButton');

 button.addEventListener("click", function() {
            // alert("Button clicked!");

  });
  

 navigator.geolocation.getCurrentPosition(function(position) {
        console.log("Latitude: " + position.coords.latitude);
        console.log("Longitude: " + position.coords.longitude);
    });
</script>