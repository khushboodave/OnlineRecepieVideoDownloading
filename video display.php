<?php
include("header.php");
include("db.php");

$query=mysql_query("select video from recepie");
 
	while($all_video=mysql_fetch_array($query))
 
 {
?>
	 
	 <video width="300" height="200" controls>
	<source src="test_upload/<?php echo $all_video['video']; ?>" type="video/mp4">
	</video> 
	
	<?php }  ?>
