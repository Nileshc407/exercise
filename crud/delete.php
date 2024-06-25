<?php
include "db.php";
$id = $_REQUEST["id"];
$del = "DELETE FROM user_master WHERE id = $id";
$result = mysqli_query($conn,$del);

header("location:index.php");
exit();
?>