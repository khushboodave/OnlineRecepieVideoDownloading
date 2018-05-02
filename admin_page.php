<!DOCTYPE html>

<html>

<style>

input[type=text]:focus {
    background-color: #ddd;
	
}

input[type=password]:focus {
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

input[type=password]{
    margin: 5px 0 22px 0;
    display:inline-block;
    background: #f1f1f1;
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
.button {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    cursor: pointer;
}

</style>
<?php include("header.php") ?>

<body>   
     <form id="form1" runat="server" method="post" action="admin_login.php"> 

<div class="container">	
    
    <table id="table1"; cellspacing="5px" cellpadding="5%"; align="center" style="margin-left:300px;margin-top:90px;float:left">  
       
	   <tr>	
	  <td> <label><b>Username:</b></label></td>
      <td><input type="text" placeholder="Enter Username" name="admin_name" required></td>
      </tr>
<tr>
      <td><label><b>Password:</b></label></td>
      <td><input type="password" placeholder="Enter Password" name="admin_pwd" required></td>
    </tr>    
	
<tr>
<td><button class="button" style="margin-top:50px";"margin-right:50px";>Login</button></td>
</tr>
</table>
</form>
</html>



