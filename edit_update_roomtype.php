
<?php 
include 'db.connect.php';
include 'transaction1.php';

//select data for editing
 $id=$_REQUEST['room_ID'];
 $sql="select * from room_type_tbl where room_ID ='$id'";
	$result = mysqli_query($conn, $sql);
	while($row=mysqli_fetch_assoc($result)){
		 $row["room_ID"] ; 
		 $row["room_code"] ;
		 $row["room_type"] ; 
		 $row["room_amount"] ;

 ?>
 <div class="col-md-4 mx-auto " style="	height:4pc;margin-top: 4pc;background-color:#006699;border-radius: 10px 10px 0px 0px;padding:0px 10px 10px 13px;" >
	<div class="container mt-4" >
	<h5 style="padding-top:1pc;color: white;"class="mt-4">Edit Room type</h5>
	</div></div>

<form method="POST" action="">

	<div class="col-md-4 mx-auto " style="	border:1px solid lightgray; padding:0px 10px 10px 13px;border-radius: 0px 0px 10px 10px ;">
	<div class="container mt-4" >
	<!--get value and place to texfield-->
	<label >Room no:</label>
	<input type="text" name="room_id" class="form-control"  value="<?php echo $row['room_ID'] ; ?>">
	<label >Room code:</label>
	<input  type="text" name="room_code" class="form-control" value="<?php echo $row['room_code'] ; ?>">
	<label >Room type:</label>
	<input  type="text" name="room_type" class="form-control " value="<?php echo $row['room_type'] ; ?>">
	<label >Room Amount:</label>
	<input  type="text" name="room_amount" class="form-control" value="<?php echo $row['room_amount'] ; ?>">
		<br>
	<div style="margin-left: 9.5pc;">
	<input type="submit" name="submit3" value="Update" class="btn btn-primary">
	<a href="add_roomtype.php" class="btn btn-danger">Cancel</a>
	</div>
	</div>

</div>
</form>

 <?php 
}
//codes for roomtype update
if(isset($_POST["submit3"])){
	mysqli_query($conn,"update room_type_tbl set room_ID='$_POST[room_id]',room_code='$_POST[room_code]',room_type='$_POST[room_type]', room_amount='$_POST[room_amount]' where room_ID='$id'");
	echo '<script>alert("Update Successfully")</script>';
	echo '<script>window.location.href = "add_roomtype.php";</script>';
	exit();
}


  ?>
