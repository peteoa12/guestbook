<!-- Include header -->
<?php include 'header.php';?>
<?php
	$host="localhost"; //Add your SQL Server host here
	$user="root"; //SQL Username
	$pass="root"; //SQL Password
	$dbname="guestbook"; //SQL Database Name
	$con=mysqli_connect($host,$user,$pass,$dbname);
	if (mysqli_connect_errno($con))
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	?>
	<!-- Open container elements outside of loop -->
	<section class="message">
		<div class="container">
			<div class="row">
	<?php
	$result = mysqli_query($con,"SELECT name,message FROM entries");
	while($row = mysqli_fetch_array($result)) { ?>
				<!-- One message displayed per database entry -->
				<h3><?php echo $row['name']; ?></h3>
				<p><?php echo $row['message']; ?></p>
	<?php } mysqli_close($con);?>
	<!-- Close container elements outside of loop -->
			</div>
		</div>
	</section>
<!-- Include footer -->
<?php include 'footer.php';?>