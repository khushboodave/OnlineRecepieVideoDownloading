<?php

include("db.php");
include("user_header.php");
$id=$_REQUEST["id"];
$query="select name from recepie where recepie_id=$id";
$result=mysqli_query($connect,$query);
while ($row=mysqli_fetch_array($result)) 
	 
	{

?>

<!DOCTYPE html>

<html>
<style>

input[type=text]:focus {
    background-color: #ddd;
	
}

/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}
/* Full-width input fields */
input[type=text]{
    margin: 5px 0 22px 0;
    display:inline-block;
    background: #f1f1f1;
}
textarea
{
  margin: 5px 0 22px 0;
    display:inline-block;
    background: #f1f1f1;
}
textarea:focus
{
  background-color: #ddd;
}
/* Set a style for all buttons */
submit {
    background-color:Red;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}
textarea
{
  margin: 5px 0 22px 0;
    display:inline-block;
    background: #f1f1f1;
}
textarea:focus
{
  background-color: #ddd;
}

</style>
<body>   
 <h1 style="text-align: center; color: red; font-size:50px;margin-top:10px">Recepie details</h1>
    <form id="form1" runat="server" method="post" action="rating_insert.php"> 
	
<div class="container">	
    
    <table id="table1"; cellspacing="5px" cellpadding="5%"; align="center" style="margin-left:400px;margin-top:100px">  
       
	  
       <tr>  
              <td align="right">Recepie Name:</td>  
	<td><input type="text" placeholder="" name="Name" size="35" value="<?php echo $row["name"]; }  ?>"></input></td>  
       </tr>  
       
	    <tr>  
              <td align="right">Rating:</td>  
              <td><select id="city" name="rating" />

            
            <option value=> - select - </option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
			<option value="5">5</option>
            </tr>
			
           
		</table>   
		   <table id="table2" align="center"  style="margin-right:65px;margin-top:50px;">  
<tr>  
        <td class="clearfix" colspan="2">
		<br>
		<br>
      <button type="Submit"  style="margin-top:5px;width: 130px;">Submit</button>      
    </td>  
        </tr>  
    </table>

  </table>
  </body>
  </html>