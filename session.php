<?php
$servername = "localhost";
$username = "id21941493_nopdanai0994";
$password = "Best09943@";
$dbname = "id21941493_chillfows";

//Create connection
$conn = mysqli_connect($servername,$username,$password,$dbname);

//Check
if (!$conn){
    die("Connection failed" . mysqli_connect_error());
}
?>