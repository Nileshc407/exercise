<?php
$conn = new mysqli("localhost","root","","exercise");
if(mysqli_connect_error())
{
	echo "unable to connectr db ".mysqli_error();
}

//create database exercise
//create table user_master(id int(11) not null,name varchar(50),contact varchar(50),email varchar(50),primary key(id));
//ALTER TABLE `user_master` CHANGE `id` `id` INT(11) NOT NULL AUTO_INCREMENT;
?>