<?php 
include("user_header.php");
include("db.php");

$query = "SELECT * FROM recepie ORDER BY name ASC";
$result = mysqli_query($connect, $query);

?>


<!DOCTYPE html>
<html>
 <head>
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script>
 function getdata()
 {
		var id=$('#recepie').val();
		$.ajax(
		{
			type:'POST',
			url:"test.php",
			data:
			{
			'id':id	
			},
			success:function(data)
			{
				$('#test').html(data);
			}
		});
 }
</script>
  <style>
  #result {
   position: absolute;
   width: 100%;
   max-width:870px;
   cursor: pointer;
   overflow-y: auto;
   max-height: 400px;
   box-sizing: border-box;
   z-index: 1001;
  }
  .link-class:hover{
   background-color:#f1f1f1;
  }
  </style>
 </head>
 <body>
 <br>
 </br>
    <div class="container" style="width:900px;">
   
   <div class="row">
    <div class="col-md-4">
     <select name="recepie" id="recepie" class="form-control">
      <option value="">Select Recepie</option>
      <?php 
      while($row = mysqli_fetch_array($result))
      {
       echo '<option value="'.$row["recepie_id"].'">'.$row["name"].'</option>';
      }
      ?>
     </select>
    </div>
    <div class="col-md-4">
     <button type="button" name="search" id="search" class="btn btn-info" onClick="getdata();" >Search</button>
    </div>
   </div>
   <br />
   <br>
   <br>
   <span id="test">
   
   </span>
</body>
</html>