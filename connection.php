<?php 
$servername = "localhost";
$username = "root";
$password = "";
$database = "cutsomer";

$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn){
    die("sorry we failed to create". mysqli_connect_error());
}else{
   
   // echo "Connection successful";
    
}

?>
