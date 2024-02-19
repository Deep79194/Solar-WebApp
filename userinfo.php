<?php 

$id=$_GET["user1"]; 

$name=$_POST["username"];
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$email=$_POST["email"];
$phoneno=$_POST["phoneno"];
$birthday=$_POST["birthday"];

$servername="localhost";
$username="root";
$password="";
$database="sPanel";


$conn=mysqli_connect($servername,$username,$password,$database);

$sql="UPDATE `signup` SET `name`='$name',`email`='$email',`phoneno`='$phoneno',`birthdate`='$birthday',`name1`='$fname',`surname`='$lname' WHERE `name`='$id'";

$row=mysqli_query($conn,$sql);

header("location: index.php");

?>