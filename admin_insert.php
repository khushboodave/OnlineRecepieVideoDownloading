<?php

 include("db.php");
 include("header.php");
 
 if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
$sql="INSERT INTO recepie(name,method,ingredients,cooking_time,preparation_time,video,cat)
VALUES
('$_POST[name]','$_POST[desc]','$_POST[in]','$_POST[cook]','$_POST[pre]','$_POST[fileToUpload]'
,'$_POST[cat]')";

if (!mysqli_query($connect,$sql))
  {
  die('Error: ' . mysqli_error($connect));
  }

header("location:data.php");

mysqli_close($connect);

?>