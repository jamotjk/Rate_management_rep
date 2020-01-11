<?php 

include 'db.connect.php';

  $ectaxid = $_REQUEST['EC_tax_ID'];
  if($ectaxid){
	
	mysqli_query($conn,"delete from EC_tax_tbl where EC_tax_ID='$ectaxid'");
	echo '<script>alert("Deleted Successfully")</script>';
	echo '<script>window.location.href = " add_extracharge_tax.php";</script>';
}else{
	echo '<script>alert("Not granted")</script>';
	echo '<script>window.location.href = " add_extracharge_tax.php";</script>';
}
 ?>}
