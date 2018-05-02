<?php    
	$con=mysqli_connect("localhost", "root", "");
	$db=mysqli_select_db("recepie");
	$vid_url = "videos/";
	$result = mysqli_query("recepie","SELECT * FROM recepie ORDER BY recepie_id");
	$row = mysqli_fetch_assoc($result);
	
	while($row=mysqli_fetch_array($result))
	{
		$video = $vid_url.$row["video_name"];
		?>
		<video width="320" height="240" controls>
   			<source src="<?php echo $video; ?>" type="video/mp4">
   			Your browser does not support the video tag.
 		</video> 
<?php
	}
	?>