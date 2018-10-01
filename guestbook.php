<?php include 'header.php';?>
<?php include 'config.php';?>

<?php $result = mysqli_query($con,"SELECT name,message FROM guestbook");?>
	
	

<?php while($row = mysqli_fetch_array($result)) { ?>
	

	<h3><?php echo $row['name']; ?></h3>
	<p><?php echo $row['message']; ?></p>

<?php } mysqli_close($con); ?>

<?php include 'footer.php';?>