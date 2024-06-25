<!DOCTYPE html>
<html>
<head>
    <title>QR Code Scanner</title>
    <script src="https://unpkg.com/html5-qrcode"></script>
</head>
<body>
    <div id="my-qr-reader"></div>
</body>
</html>
<script>
	alert(navigator.userAgent);
function domReady(fn) {

    if (
        document.readyState === "complete" ||
        document.readyState === "interactive"
    ) {
        setTimeout(fn, 1000);
    } else {
        document.addEventListener("DOMContentLoaded", fn);
    }
}
 
domReady(function () {
 
    function onScanSuccess(decodeText, decodeResult) {
        alert("You Qr is : " + decodeText, decodeResult);
    }
    let htmlscanner = new Html5QrcodeScanner(
        "my-qr-reader",
        { fps: 10, qrbos: 250 }
    );
    htmlscanner.render(onScanSuccess);
});
</script>
<!-- <script>

	function domReady(fn) {
		if (document.readyState === "complete" || document.readyState === "interactive") {
			setTimeout(fn, 1000);
		} else {
			document.addEventListener("DOMContentLoaded", fn);
		}
	}

	domReady(function () {
		function onScanSuccess(decodeText, decodeResult) {
			alert("Your QR code is: " + decodeText);
		}

		let htmlscanner = new Html5QrcodeScanner("my-qr-reader", { fps: 10, qrbox: 250 });
		htmlscanner.render(onScanSuccess);

		// Handle iOS WKWebView specific events
		document.addEventListener("deviceready", onDeviceReady, false);
		function onDeviceReady() {
			if (window.webkit && window.webkit.messageHandlers && window.webkit.messageHandlers.didAllowCameraPermissions) {
				window.webkit.messageHandlers.didAllowCameraPermissions.postMessage(null);
			}
		}
	});
</script>-->