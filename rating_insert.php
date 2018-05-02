<?php

 include("db.php");
 
 if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
$sql="INSERT INTO rating(recepie_name,rating)
VALUES
('$_POST[Name]','$_POST[rating]')";

if (!mysqli_query($connect,$sql))
  {
  die('Error: ' . mysqli_error($connect));
  }
  
  header("location:masterchef.php");
?>