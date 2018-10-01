<?php include 'header.php';?>

<?php 

	$result = mysqli_query($con,"SELECT name,message FROM guestbook");
	while($row = mysqli_fetch_array($result)) { 
		
?>

<section class="message">
	<div class="container">
		<div class="row">
			<h3><?php echo $row['name']; ?></h3>
			<p><?php echo $row['message']; ?></p>
		</div>
	</div>
</section>
	

<?php } mysqli_close($con); ?>

<?php include 'footer.php';?>