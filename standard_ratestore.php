<?php 
 include 'db.connect.php'; 

if(isset($_POST['add'])){

 	
	$typeselect = $_POST['typeselect'];
	$featselect = $_POST['featselect'];
	$taxselect = $_POST['taxselect'];
	$sql1="select * from room_type_tbl where room_ID='$typeselect' ";
	
	$result1 = mysqli_query($conn,$sql1);

	 while($row=mysqli_fetch_assoc($result1)){
	 $roomtype=	$row["room_type"] ; 	
	 $roomid= $row["room_ID"] ; 
	 $roomamount= $row["room_amount"] ; 
	}

	$sql2="select * from room_feat_tbl where feat_name='$featselect' ";	
	$result2 = mysqli_query($conn,$sql2);
	while($row=mysqli_fetch_assoc($result2)){
	 $featname=	$row["feat_name"] ; 	
	$featamount=	$row["feat_amount"] ; 

	}

	$sql3="select * from room_tax_tbl where Tax_name='$taxselect' ";	
	$result3 = mysqli_query($conn,$sql3);
	while($row=mysqli_fetch_assoc($result3)){
	 $taxname=	$row["Tax_name"] ; 	
	 $taxamount= $row["Tax_amount"] ; 

	}
	

	mysqli_query($conn,"insert into composerate_tbl(room_ID,room_type,room_amount,feat_name,feat_amount,Tax_name,Tax_amount) 
	values('$roomid','$roomtype','$roomamount','$featname','$featamount','$taxname','$taxamount')");
	echo '<script>alert("Sucessfully added")</script>';
	echo '<script>window.location.href = " standard_rate.php";</script>';

}

	


 ?>