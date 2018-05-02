<?php 

include("db.php");

$query = "SELECT * FROM recepie ORDER BY name ASC";
$result = mysqli_query($connect, $query);

?>


<!DOCTYPE html>

<html><head>
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
<script>
 function getdata()
 {
		var id=$('#recepie').val();
		$.ajax(
		{
			type:'POST',
			url:"update.php",
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
</head>
<?php include("header.php") ?>

<body>   
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