
<?php 
include 'db.connect.php';
include 'transaction1.php';

//select data for editing
 $id=$_REQUEST['feat_id'];
 $sql="select * from room_feat_tbl where feat_id ='$id'";
	$result = mysqli_query($conn, $sql);
	while($row=mysqli_fetch_assoc($result)){
	$row["feat_id"] ; 
	$row["feat_name"] ;
	$row["feat_amount"] ;

 ?>
 <div class="col-md-4 mx-auto " style="	height:4pc;margin-top: 4pc;background-color:#006699;border-radius: 10px 10px 0px 0px;padding:0px 10px 10px 13px;" >
	<div class="container mt-4" >
	<h5 style="padding-top:1pc;color: white;"class="mt-4">Edit Room features</h5>
	</div></div>

<form method="POST" action="">

	<div class="col-md-4 mx-auto " style="	border:1px solid lightgray; padding:0px 10px 10px 13px;border-radius: 0px 0px 10px 10px ;">
	<div class="container mt-4" >
	<!--get value and place to texfield-->
	<label >Room no:</label>
	<input type="text" name="feat_ID" class="form-control"  value="<?php echo $row['feat_id'] ; ?>">
	<label >Room code:</label>
	<input  type="text" name="feat_name" class="form-control" value="<?php echo $row['feat_name'] ; ?>">
	<label >Room type:</label>
	<input  type="text" name="feat_amount" class="form-control " value="<?php echo $row['feat_amount'] ; ?>">
		<br>
	<div style="margin-left: 9.5pc;">
	<input type="submit" name="submit" value="Update" class="btn btn-primary">
	<a href="add_room_features.php" class="btn btn-danger">Cancel</a>
	</div>
	</div>

</div>
</form>

 <?php 
}
//codes for roomtype update
if(isset($_POST["submit"])){
	mysqli_query($conn,"update room_feat_tbl set feat_id='$_POST[feat_ID]',feat_name='$_POST[feat_name]',feat_amount='$_POST[feat_amount]' where feat_id='$id'");
	echo '<script>alert("Update Successfully")</script>';
	echo '<script>window.location.href = "add_room_features.php";</script>';
	exit();
}


  ?>
