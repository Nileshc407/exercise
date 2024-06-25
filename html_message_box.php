<!DOCTYPE html>
<html>
<head>
    <title>Custom Message Box</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <button id="showMessageBox">Show Message Box</button>

    <!-- Message Box Container -->
    <div id="messageBox" class="hidden">
        <div class="messageBoxContent">
            <span class="close" id="closeMessageBox">&times;</span>
            <h2>Custom Message</h2>
            <p>This is a custom message box.</p>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>
<script>
const showMessageBoxButton = document.getElementById("showMessageBox");
const messageBox = document.getElementById("messageBox");
const closeMessageBoxButton = document.getElementById("closeMessageBox");

showMessageBoxButton.addEventListener("click", () => {
    messageBox.style.display = "block";
});

closeMessageBoxButton.addEventListener("click", () => {
    messageBox.style.display = "none";
});
</script>
<style>
/* Styles for the message box */
.hidden {
    display: none;
}

.messageBoxContent {
    border: 1px solid #ccc;
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    width: 300px;
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
}

.close {
    position: absolute;
    top: 10px;
    right: 10px;
    cursor: pointer;
}
</style>