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
$cate = $row["cat"];  
  $video=$row["video"];
 }
 
  //echo json_encode($row);
}

?>
	 <div class="table-responsive" style="border-box:34px">
   
   <table class="table table-bordered">
  
    <tr>
     <td width="10%" align="right"><b>Name</b></td>
     <td><?php echo $name; ?></td>
    </tr>
	
	<tr>  
         <td width="10%" align="right"><b>Method</b></td>  
         <td height="50%"><?php echo $desc; ?></td>                       
        </td>  
       </tr>
   
	<tr>  
         <td width="10%" align="right"><b>Ingredients</b></td>  
         <td height="50%"><?php echo $in; ?></td>                       
        </td>  
       </tr>	
        <tr>  
              <td  width="20%" align="right"><b>Cooking Time</b></td>  
              <td width="90%"><?php echo $cook; ?></td>  
       </tr> 
        <tr>  
              <td width="10%" align="right"><b>Preparation Time</b></td>  
              <td width="90%"><?php echo $pre ?></td>  
       </tr> 	
<tr>  
              <td width="10%" align="right"><b>Categoary</b></td>  
              <td width="90%"><?php echo $cate ?></td>  
       </tr> 		   
	   <tr>
	 </table>
	 <table>
	 <tr>
	 <video width="500" height="500" style="margin-left:50px"; controls>
  <source src="<?php echo $video; ?>" type="video/mp4">
  Your browser does not support HTML5 video.
</video>
	 </tr>
    </tr>
	 </table>
	 </div>
