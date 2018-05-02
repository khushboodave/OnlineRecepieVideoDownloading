<?php
include("db.php");
   $name=" ";$desc=" ";$video=" ";
  if(isset($_POST["id"]))
{
      $query = "SELECT * FROM recepie where recepie_id=".$_POST["id"];
	  
	$result = mysqli_query($connect, $query);
 while($row = mysqli_fetch_array($result))
 {  
  $name = $row["name"];
  $desc  = $row["method"];
$in  = $row["ingredients"];
$cook = $row["cooking_time"];
$pre = $row["preparation_time"];  
  $video=$row["video"];
 }
 
 
 
  //echo json_encode($row);
  
  //$query1="update recepie set name='$n',method='$m',ingredients='$i',cooking_time='$ct',preparation_time='$pt',video='$v'";
}

?>
<div class="table-responsive" style="border-box:34px">
   <form method="post">
   <table class="table table-bordered">
  
    <tr>
     <td width="10%"  align="right"><b>Name</b></td>
     <td><textarea name="name" rows="20" cols="20"><?php echo $name; ?></textarea></td>
    </tr>
	
	<tr>  
         <td width="10%"  align="right"><b>Method</b></td>  
         <td height="50%"><textarea name="method" rows="20" cols="20"><?php echo $desc; ?></textarea></td>                       
        </td>  
       </tr>
   
	<tr>  
         <td width="10%"  align="right"><b>Ingredients</b></td>  
         <td height="50%"><textarea name="ingredients" rows="20" cols="20"><?php echo $in; ?></textarea></td>                       
        </td>  
       </tr>	
        <tr>  
              <td  width="20%"  align="right"><b>Cooking Time</b></td>  
              <td width="90%"><textarea name="time" rows="20" cols="20"><?php echo $cook; ?></textarea></td>  
       </tr> 
        <tr>  
              <td width="10%"  align="right"><b>Preparation Time</b></td>  
              <td width="90%"><textarea name="preptime" rows="20" cols="20"><?php echo $pre ?></textarea></td>  
       </tr> 	   
	   <tr>
	 </table>
	 <table>
	 <tr>
	 <video width="500" height="500" name="vid" style="margin-left:50px"; controls>
  <source src="<?php echo $video; ?>" type="video/mp4">
  Your browser does not support HTML5 video.
</video>
	 </tr>
    </tr>
	 </table>
	 </form>
	 </div>
