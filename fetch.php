<?php
include("db.php");
if(isset($_POST["id"]))
{
 
 $query = "SELECT * FROM recepie WHERE recepie_id = '".$_POST["id"]."'";
 $result = mysqli_query($connect, $query);
 while($row = mysqli_fetch_array($result))
 {
  
  $data["name"] = $row["name"];
  $data["description"] = $row["description"];  
 }

 echo json_encode($data);
}
?>