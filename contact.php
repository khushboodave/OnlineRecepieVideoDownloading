<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
</head>
<body>
	<?php include("header.php") ?>
    
	<div class="container">				
			<br>
			<br>
			<br>
				<form action="upload feedback.php" method="post">
					<div>
						<div class="col-sm-4 col-sm-offset-2">
							<div class="inputContainer">
							<label><b>Name</b></label>
								<input type="text" name="name" id="contactName" value="" class="form-control" autocomplete="off" />
							</div>
						</div>
						<div class="col-sm-4">
							<div class="inputContainer">
							<label class="screen-reader-text"><b>Email</b></label>
								<input type="text" name="email" id="email" value=" " 
								class="form-control" autocomplete="off"  />
							</div>
						</div>
						<div class="col-sm-8 col-sm-offset-2">
							<div class="inputContainer">
							<label class="screen-reader-text"><b>Message</b></label>
								<textarea name="message" id="commentsText" 
								class="form-control"
								autocomplete="off">
								</textarea>
							</div>
						</div>
						<div class="col-sm-8 col-sm-offset-2">
							<br><br><br>
							<button name="submit" type="submit"
							class="btn btn-primary btn-lg"
							style="margin-left:300px";>Send  
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
 <!-- /contactWrap -->
	
	<br>
</body>
</html>
