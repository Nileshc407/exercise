<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		content="width=device-width, initial-scale=1.0">
	<title>QR Code Scanner / Reader
	</title>
</head>
<body>
	<video id="scanner" style="width: 100%; max-width: 640px;"></video>
	<div id="result"></div>
</body>
</html>

<script src="https://cdn.jsdelivr.net/npm/quagga"></script>

<script>
  // Configure QuaggaJS
  Quagga.init({
    inputStream: {
      name: "Live",
      type: "LiveStream",
      target: document.getElementById("scanner"),
      constraints: {
        width: 640,
        height: 480,
        facingMode: "environment", // Use the rear camera (if available)
      },
    },
    decoder: {
      readers: ["code_128_reader", "ean_reader", "ean_8_reader", "code_39_reader", "qrcode_reader"],
    },
  });

  // Start QuaggaJS and listen for scan events
  Quagga.start();

  Quagga.onDetected(function (result) {
    // Handle the detected QR code
    var code = result.codeResult.code;
    document.getElementById("result").innerText = "Scanned: " + code;
    
    // Optionally, stop scanning after a successful detection
    Quagga.stop();
  });
</script>