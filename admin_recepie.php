<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="vendor/bootstrap/jquery/jquery.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.js"></script>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<style type="text/css">
	input[type=text]{
    margin: 5px 0 22px 0;
    display:inline-block;
    background: #f1f1f1;
    width: 200px;
} 
</style>
</head>
<body>
	<?php require_once("admin_header.php"); ?>
	<div class="container" style="margin-top:10px;">
		<br/>
			<table id="table1" cellspacing="5px" cellpadding="5px" align="center" style="margin-left: 350px;">  
       <tr>  
              <td align="right" style="height:80px">Search</td>  
              <td><input type="text" placeholder="Veg or Non Veg" style="margin-left:80px;height:50px" name="searchtext" id="searchtext" /></td>  
       </tr>  </table>
			<div id="result">
				
			</div>
	</div>

</body>
</html>

<script type="text/javascript">
	$(document).ready(function()
	{
		$('#searchtext').keyup(function()
		{
			var txt=$(this).val();
			if(txt != '')
			{
				$.ajax({
					url:"adminfecth.php",
					method:"post",
					data:{search:txt},
					dataType:"text",
					success:function(data)
					{
						$('#result').html(data);
					}
				})
			}
			else
			{
				$('#result').html('');
				$.ajax({
					url:"adminfecth.php",
					method:"post",
					data:{search:txt},
					dataType:"text",
					success:function(data)
					{
						$('#result').html(data);
					}
				})
			}
		});
	});
</script>



<script>
 function MYfunction()
 {
	 window.print();
	  
 }

</script>

<table id="table3" align="center"  style="margin-top:100px:">  
<tr>  
        <td class="clearfix" colspan="2">
   <button type="button" onclick="MYfunction()" style="margin-top:50px; width: 130px;">Print</button></a>              
</td> 
