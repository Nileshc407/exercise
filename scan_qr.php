<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR Code Scanner</title>
</head>
<body>

<!-- Button to Open QR Code Scanner -->
<button id="openScanner">Open QR Code Scanner</button>

<script>
document.getElementById('openScanner').addEventListener('click', function() {
    // Check if the browser supports the getUserMedia API
    if (navigator.mediaDevices && navigator.mediaDevices.getUserMedia) {
        // Request access to the camera
        navigator.mediaDevices.getUserMedia({ video: { facingMode: 'environment' } })
            .then(function(stream) {
                // Camera access granted, redirect to a QR code scanning page
                window.location.href = 'qr_scanner.html';
            })
            .catch(function(error) {
                console.error('Error accessing camera:', error);
                alert('Error accessing camera. Please check your camera permissions.');
            });
    } else {
        // Browser doesn't support getUserMedia
        alert('Your browser does not support camera access. Please use a different browser.');
    }
});
</script>

</body>
</html>
