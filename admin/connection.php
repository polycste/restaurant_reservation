<?php
$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "servenhill";
$conn = new mysqli($servername, $username, $password, $dbname);
if($conn-> connect_error){
die("Connection Failed");
}