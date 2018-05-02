<?php

include("admin_header.php");
$con=mysqli_connect("localhost","root","","test");
$output='';
$sql="select * from rating";

$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0)

{
	$output .= '<br/><br/>';
	$output .= '<div class="table-responsive">
					<table class="table table bordered" style="text-align:center;">
						<tr>
							<th>Recepie Name</th>
							<th>Rating</th>
						</tr>';

while ($row=mysqli_fetch_array($result)) 
	 
	{
		$output .= '<tr>
						<td>'.$row["recepie_name"].'</td>
						<td>'.$row["rating"].'</td>
					</tr>';
	}

	echo $output;
}
else
{
	echo "NO DATA FOUND";
}

?>