<?php
include("db.php");
include("header.php");

/*if(isset($_POST["id"]))
{
 $query = "SELECT * FROM recepie WHERE video=8";
 $result = mysqli_query($connect, $query);
 while($row = mysqli_fetch_array($result))
 {
  $data["video"]=$row["video"];
 }
 echo json_encode($data);
}*/
?>


<!DOCTYPE html> 
<html> 
<body> 

<video width="500" height="500" style="margin-left:450px"; controls>
  <source src="php videos/Ajax Live Data Search using Jquery PHP MySql.mp4" type="video/mp4">
  Your browser does not support HTML5 video.
</video>



</body> 
</html>



/*<script>
$(document).ready(function(){
 $('#search').click(function(){
  var id= $('#recepie').val();
  if(id != '')
  {
   $.ajax({
    url:"video display.php",
    method:"POST",
    data:{id:id},
    dataType:"JSON",
    success:function(data)
    {
     
     $('#video').text(video.name);
       	 
    }
   })
  }
 });
});
</script>*/