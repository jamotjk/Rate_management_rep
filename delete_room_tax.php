<?php 

include 'db.connect.php';

  $taxid = $_REQUEST['Tax_ID'];
  if($taxid){
	
	mysqli_query($conn,"delete from room_tax_tbl where Tax_ID='$taxid'");
	echo '<script>alert("Deleted Successfully")</script>';
	echo '<script>window.location.href = " add_roomtax.php";</script>';
}else{
	echo '<script>alert("Not granted")</script>';
	echo '<script>window.location.href = " add_roomtax.php";</script>';
}
 ?>}
