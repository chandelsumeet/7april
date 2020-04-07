<?php

$servername="localhost";
$username="root";
$password="";
$database="navbar";

$conn = new mysqli($servername,$username,$password,$database);

if($conn->connect_error)
{
	die("connection lost");
}



?>