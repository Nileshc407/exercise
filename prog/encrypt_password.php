<?php
$password = 'Shivansh@2021';

$enc_password = password_hash($password,PASSWORD_DEFAULT);
echo $enc_password."<br>";

$result = password_verify($password,$enc_password);
echo $result;
?>