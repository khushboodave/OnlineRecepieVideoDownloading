<!DOCTYPE html>

<html>
<style>

input[type=text]:focus {
    background-color: #ddd;
	
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
}textarea
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


</style>
<?php include("admin_header.php") ?>

<body>   
    <form id="form1" method="POST" action="admin_insert.php"> 
	
<div class="container">	
    <table cellspacing="500px" cellpadding="500px" align="center" style="margin-left:100px;float:left">    
       <tr>  
              <td align="right">Name:</td>  
              <td><input type="text" name="name" /></td>  
       </tr>  
       <tr>  
              <td align="right">Method:</td>  
              <td><textarea name="desc" 
			  rows="12" cols="70" required></textarea>                    
        </td>  
       </tr>
       <tr>  
              <td align="right">Ingredients:</td>  
              <td><textarea name="in" 
			  rows="7" cols="70" required></textarea>                       
        </td>  
       </tr>	
<tr>  
              <td align="right">Cooking Time:</td>  
              <td><input type="text" name="cook" /></td>  
       </tr> 
       <tr>  
              <td align="right">Preparation Time:</td>  
              <td><input type="text" name="pre" /></td>  
       </tr> 
<tr>  
              <td align="right">Categories:</td>  
              <td><input type="text" name="cat" /></td>  
       </tr>	   
	   <tr>
        
        <td align="right">Upload  Video</td>
        <td><input type="file" name="fileToUpload"/></td>
        </tr>
		<tr>

       <td><button type="submit" value="Uplaod Video" style="width:80px;height:30px;margin-top:50px">Submit</button>
	   </td>
	   
	   </tr>
</table>   

</body>
</html>