<?php

$con=mysqli_connect("localhost","root","","test");
$output='';
$sql="select * from recepie where cat like '%".$_POST["search"]."%'";

$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0)

{
	$output .= '<br/><br/>';
	$output .= '<div class="table-responsive">
					<table class="table table bordered" style="text-align:center;">
						<tr>
							<th>Name</th>
							<th>Method</th>
							<th>Ingredients</th>
							<th>Cooking</th>
							<th>Preparation</th>
                            <td><a href="rating.php">Rating</td></a>							
							
						</tr>';

while ($row=mysqli_fetch_array($result)) 
	 
	{
		$id=$row["recepie_id"];
		$output .= '<tr>
						<td>'.$row["name"].'</td>
						<td>'.$row["method"].'</td>
						<td>'.$row["ingredients"].'</td>
						<td>'.$row["cooking_time"].'</td>
						<td>'.$row["preparation_time"].'</td>
						 <td><a href="rating.php?id='.$id.'">Rating</td></a>
					
					</tr>';
	}

	echo $output;
}
else
{
	echo "NO DATA FOUND";
}

?>