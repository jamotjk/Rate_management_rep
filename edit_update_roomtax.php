
<?php 
include 'db.connect.php';
include 'transaction1.php';

//select data for editing
 $id=$_REQUEST['Tax_ID'];
 $sql="select * from room_tax_tbl where Tax_ID ='$id'";
	$result = mysqli_query($conn, $sql);
	while($row=mysqli_fetch_assoc($result)){
	 $row["Tax_ID"] ; 
	$row["Tax_name"] ;
	$row["Tax_type"] ;
	$row["Tax_amount"] ;

 ?>
 <div class="col-md-4 mx-auto " style="	height:4pc;margin-top: 4pc;background-color:#006699;border-radius: 10px 10px 0px 0px;padding:0px 10px 10px 13px;" >
	<div class="container mt-4" >
	<h5 style="padding-top:1pc;color: white;"class="mt-4">Edit Room Tax</h5>
	</div></div>

<form method="POST" action="">

	<div class="col-md-4 mx-auto " style="	border:1px solid lightgray; padding:0px 10px 10px 13px;border-radius: 0px 0px 10px 10px ;">
	<div class="container mt-4" >
	<!--get value and place to texfield-->
	<label >Room no:</label>
	<input type="text" name="tax_id" class="form-control"  value="<?php echo $row['Tax_ID'] ; ?>">
	<label >Room code:</label>
	<input  type="text" name="tax_name" class="form-control" value="<?php echo $row['Tax_name'] ; ?>">
	<label >Room type:</label>
	<input  type="text" name="tax_type" class="form-control " value="<?php echo $row['Tax_type'] ; ?>">
	<label >Room Amount:</label>
	<input  type="text" name="tax_amount" class="form-control" value="<?php echo $row['Tax_amount'] ; ?>">
		<br>
	<div style="margin-left: 9.5pc;">
	<input type="submit" name="submit3" value="Update" class="btn btn-primary">
	<a href="add_roomtax.php" class="btn btn-danger">Cancel</a>
	</div>
	</div>

</div>
</form>

 <?php 
}
//codes for roomtype update
if(isset($_POST["submit3"])){
	mysqli_query($conn,"update room_tax_tbl set Tax_ID='$_POST[tax_id]',Tax_name='$_POST[tax_name]',Tax_type='$_POST[tax_type]', Tax_amount='$_POST[tax_amount]' where Tax_ID='$id'");
	echo '<script>alert("Update Successfully")</script>';
	echo '<script>window.location.href = "add_roomtax.php";</script>';
	exit();
}


  ?>
