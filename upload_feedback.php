<?php

include("db.php");

$name=$_POST["name"];
$email=$_POST["email"];
$msg=$_POST["message"];

$sql="insert into contact(name,email,message) values('$name','$email','$msg')";
$result=mysqli_query($connect,$sql);

header("location:contact.php");

?>