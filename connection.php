<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "travel";

$conn = mysqli_connect($hostname, $username, $password, $database);
if($conn)
{
    echo"connection succesfuljjj";
}
else
{
    echo "connection failed";
}