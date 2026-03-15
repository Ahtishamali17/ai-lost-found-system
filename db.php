<?php

$conn = new mysqli("localhost","root","","lostfound");

if($conn->connect_error){
die("Database connection failed");
}

?>