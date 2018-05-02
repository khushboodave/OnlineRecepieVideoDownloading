<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/login.css">
<style>

body 
{font-family:Arial;}
* {box-sizing: border-box}

/* Full-width input fields */
input[type=text], input[type=password] {
    margin: 5px 0 22px 0;
    display:inline-block;
    background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
	
}

/* Set a style for all buttons */
button {
    background-color:Orange;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}


</style>
</head>	

<?php include("header.php") ?>

<body>

<h1 style="text-align: center;font-size:50px;margin-top:50px">Login</h1> 
<form action="" method="post">
    <div class="container">
	
     <label for="email"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>
	
  

    <label for="psw-repeat"><b>Confirm Password</b></label>
    <input type="password" placeholder="Confirm  Password" name="confirm_password" required>
	
	 <label><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="pwd" required>
        
      <button type="submit">Login</button>
     
    </div>
<br><br>
<br>
<br>
	
	<div class="footer">
				<div class="container">
					 <p class="footer-grid">Copyright</p>
			 	</div> 	
			</div>
 
  </div>
</form>

</body>
</html>


