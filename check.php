<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
 
error_reporting(1);
 
$con=mysqli_connect("localhost","root","","receipe");
 
extract($_POST);
 
//display all uploaded video
 
if($disp)
 
{
 
$query=mysqli_query("select * from video");
 
	while($all_video=mysqli_fetch_array($query))
 
	{
?>
	 
	 <video width="300" height="200" controls>
	<source src="D:/<?php echo $all_video['title']; ?>" type="video/mp4">
	</video> 
	
	<?php } } ?>
<form method="post" enctype="multipart/form-data">
 
<table border="1" style="padding:10px">
<tr>
<td> 
<input type="submit" value="Display Video" name="disp" id="disp"/> 
</td>
</tr> 
</table>
</form>
</body>
</html>