<?php include 'header.php';?>
<?php include 'config.php';?>
<?php
	$name=$_POST['name'];
	$email=$_POST['email'];
	$message=$_POST['message'];
	$sql="INSERT INTO guestbook(name,email,message) VALUES('$name','$email','$message')";

	if (!mysqli_query($con,$sql))
	{
		die('Error: ' . mysqli_error($con));
	}
	else
		echo "Values Stored in our Database!";
	mysqli_close($con);
?>

<div id="wrapper d-flex justify-content-center">
	
	<h2 class="text-center">Sign our Guest Book </h2>

	<form name="guest" method="post" action="addcomment.php" onsubmit="return Validate();">
		<span>Name:</span>    <input type="text" name="name"/><br />
		<span>Email:</span> <input type="text" name="email"/><br />
		<p>Message:</p> <textarea name="message" rows="10" cols="50"> </textarea> <br />
		<input type="submit" value="Sign this in the Book" />
	</form>
		
    <div id="footer">
		<p>Thank you for visiting our website! Be sure to check out our Guestbook!</p>
	</div>

</div>

<?php include 'footer.php';?>
