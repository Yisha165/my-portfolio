<?php
$servername="localhost";
$username="root";
$password="";
$dbname="data";
$conn=mysqli_connect($servername,$username, $password,$dbname);
if(!$conn){
    die("error here".mysqli_connect_error());
}else{
echo"success";
}
?>