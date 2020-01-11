<?php 

include 'db.connect.php';

  $feat_id = $_REQUEST['feat_id'];
  echo $feat_id;
  if($feat_id){
	
	mysqli_query($conn,"delete from room_feat_tbl where feat_id='$feat_id'");
	echo '<script>alert("Deleted Successfully")</script>';
	echo '<script>window.location.href = " add_room_features.php";</script>';
}else{
	echo '<script>alert("Not granted")</script>';
	echo '<script>window.location.href = " add_room_features.php";</script>';
}
 ?>}
