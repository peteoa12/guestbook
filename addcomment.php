<?php include 'header.php';?>


<section class="wrapper">
	<div class="container">
		<div class="row d-flex justify-content-center">

			<div class="col-md-6">
				<h2>Sign our Guest Book </h2>
				<?php
					$name=$_POST['name'];
					$email=$_POST['email'];
					$message=$_POST['message'];
					$sql="INSERT INTO guestbook(name,email,message) VALUES('$name','$email','$message')";

					if (!mysqli_query($con,$sql)) {
						die('Error: ' . mysqli_error($con));
					} else { ?>
				
				<form name="guest" method="post" action="addcomment.php" onsubmit="return Validate();">
					<div class="form-group d-flex justify-space-evenly">
						<input type="text" name="name" placeholder="Name"/>
						<input type="text" name="email" placeholder="Email"/>
					</div>
					<div class="form-group">
						<textarea name="message" placeholder="Message"></textarea>
					</div>
					<button type="submit" class="btn btn-primary">Submit</button>
				</form>
				<p>Thank you for visiting our website! Be sure to check out our Guestbook!</p>
				<?php echo "Values Stored in our Database!"; mysqli_close($con); } ?>
			</div>

			
		

		</div>
	</div>
</section>

<?php include 'footer.php';?>
