<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>QR Code Scanner</title>
  <style>
    body {
      font-family: 'Arial', sans-serif;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
      margin: 0;
    }

    #scanner-container {
      position: relative;
      width: 80%;
      max-width: 400px;
    }

    #scanner {
      width: 100%;
      height: auto;
    }

    #controls {
      position: absolute;
      bottom: 20px;
      left: 0;
      right: 0;
      text-align: center;
    }

    button {
      padding: 10px 20px;
      font-size: 16px;
      margin: 0 10px;
      cursor: pointer;
    }

    #flashlight {
      background-color: #4CAF50;
      color: white;
    }

    #flashlight.off {
      background-color: #f44336;
    }
  </style>
</head>
<body>
  <div id="scanner-container">
    <video id="scanner"></video>
    <div id="controls">
      <button onclick="startScanner()">Start Scanner</button>
      <button id="flashlight" onclick="toggleFlashlight()">Flashlight: On</button>
    </div>
  </div>

  <script src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      let scanner = new Instascan.Scanner({ video: document.getElementById('scanner') });

      document.getElementById('flashlight').disabled = true;

      scanner.addListener('scan', function (content) {
        alert('Scanned: ' + content);
        // Handle the scanned content as needed
      });

      Instascan.Camera.getCameras().then(function (cameras) {
        if (cameras.length > 0) {
          document.getElementById('flashlight').disabled = false;
        } else {
          console.error('No cameras found.');
        }
      }).catch(function (e) {
        console.error(e);
      });
    });

    function startScanner() {
      let scanner = new Instascan.Scanner({ video: document.getElementById('scanner') });
      scanner.start();
    }

    function toggleFlashlight() {
      let video = document.getElementById('scanner');
      let tracks = video.srcObject.getTracks();

      tracks.forEach(track => {
        if (track.kind === 'videoinput') {
          let capabilities = track.getCapabilities();
          if (capabilities.torch) {
            let mode = track.getSettings().torch ? 'off' : 'on';
            track.applyConstraints({ advanced: [{ torch: mode }] });
            document.getElementById('flashlight').innerText = `Flashlight: ${mode === 'on' ? 'On' : 'Off'}`;
            document.getElementById('flashlight').classList.toggle('off', mode === 'off');
          }
        }
      });
    }
  </script>
</body>
</html>
