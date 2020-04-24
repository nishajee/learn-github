<?php
$server = "localhost";
$user= "root";
$pass="";
$db_name="t";

$conn= mysqli_connect($server, $user, $pass, $db_name);
if($conn){
    echo 'database connected sucessfully.';
}

?>
