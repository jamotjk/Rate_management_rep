
<?php include 'db.connect.php'; ?>
<!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>

<?php 

 $id=$_REQUEST['id'];
 $sql="select * from try";
	$result = mysqli_query($conn, $sql);
	while($row=mysqli_fetch_assoc($result)){
		 $row["name"] ; 
		 $row["city"] ; 	

 ?>

<form method="POST" action="">
	<label>room</label>
	<input type="text" name="room" value="<?php echo $row['name'] ; ?>">
	<label>room type</label>
	<input type="text" name="roomtpye" value="<?php echo  $row['city']; ?>">
	<input type="submit" name="submit3" value="update">

</form>

 <?php 
}
if(isset($_POST["submit3"])){

	
	mysqli_query($conn,"update try set name='$_POST[room]' where city='$_POST[roomtpye]'");
	echo '<script>alert("Deleted Successfully")</script>';
	echo '<script>window.location.href = " try.php";</script>';
}


  ?>
 </body>
 </html> 