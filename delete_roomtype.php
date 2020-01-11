<?php 

include 'db.connect.php';

  $room_id = $_REQUEST['room_ID'];
  echo $room_id;
  if($room_id){
	
	mysqli_query($conn,"delete from room_type_tbl where room_ID='$room_id'");
	echo '<script>alert("Deleted Successfully")</script>';
	echo '<script>window.location.href = " add_roomtype.php";</script>';
}else{
	echo '<script>alert("Not granted")</script>';
	echo '<script>window.location.href = " add_roomtype.php";</script>';
}
 ?>}
