<?php 

include 'db.connect.php';

  $id = $_REQUEST['room_ID'];
  if($id){
	
	mysqli_query($conn,"delete from room_standardrate where room_ID='$id'");
	mysqli_query($conn,"delete from composerate_tbl where room_ID='$id'");
	echo '<script>alert("Deleted Successfully")</script>';
	echo '<script>window.location.href = " standard_rate.php";</script>';
}else{
	echo '<script>alert("Not granted")</script>';
	echo '<script>window.location.href = " standard_rate.php";</script>';
}

 ?>
