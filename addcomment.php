<?php include 'header.php';?>
<?php
	$host="localhost"; //Add your SQL Server host here
	$user="root"; //SQL Username
	$pass="root"; //SQL Password
	$dbname="guestbook"; //SQL Database Name
	$con=mysqli_connect($host,$user,$pass,$dbname);
	if (mysqli_connect_errno($con))
	{
		echo "<h1>Failed to connect to MySQL: " . mysqli_connect_error() ."</h1>";
	}
	$name=$_POST['name'];
	$email=$_POST['email'];
	$message=$_POST['message'];
	$sql="INSERT INTO entries(name,email,message) VALUES('$name','$email','$message')";
	if (!mysqli_query($con,$sql))
	{
		die('Error: ' . mysqli_error($con));
	}
	else
		echo "Values Stored in our Database!";
	mysqli_close($con);
?>
<section class="wrapper mt-5">
	<div class="container">
		<div class="row d-flex justify-content-center">

			<div class="col-md-6">
				<h2>Sign our Guest Book </h2>		
				<form name="guest" method="post" action="addcomment.php" novalidate>
					<div class="form-group d-flex justify-space-evenly">
						<input type="text" name="name" placeholder="Name"/>
						<input type="text" name="email" placeholder="Email"/>
					</div>
					<div class="form-group">
						<textarea name="message" placeholder="Message"></textarea>
					</div>
					<button type="submit" class="btn btn-primary mb-3">Submit</button>
				</form>
				<p>Thank you for visiting our website! Be sure to check out our Guestbook!</p>
				
			</div>
		</div>
	</div>
</section>
<?php include 'footer.php';?>
