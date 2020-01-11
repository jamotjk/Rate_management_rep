
<?php 
include 'db.connect.php';
include 'transaction1.php';

//select data for editing
 $id=$_REQUEST['EC_tax_ID'];
 $sql="select * from EC_tax_tbl where EC_tax_ID ='$id'";
	$result = mysqli_query($conn, $sql);
	while($row=mysqli_fetch_assoc($result)){
		 $row["EC_tax_ID"] ; 
		 $row["EC_tax_name"] ;
		 $row["EC_tax_type"] ; 
		 $row["EC_tax_amount"] ;

 ?>
 <div class="col-md-4 mx-auto " style="	height:4pc;margin-top: 4pc;background-color:#006699;border-radius: 10px 10px 0px 0px;padding:0px 10px 10px 13px;" >
	<div class="container mt-4" >
	<h5 style="padding-top:1pc;color: white;"class="mt-4">Edit Extra charge tax</h5>
	</div></div>

<form method="POST" action="">

	<div class="col-md-4 mx-auto " style="	border:1px solid lightgray; padding:0px 10px 10px 13px;border-radius: 0px 0px 10px 10px ;">
	<div class="container mt-4" >
	<!--get value and place to texfield-->
	<label >E.C tax no:</label>
	<input type="text" name="ectax_id" class="form-control"  value="<?php echo  $row["EC_tax_ID"] ;?>">
	<label >E.C tax name:</label>
	<input  type="text" name="ectax_name" class="form-control" value="<?php echo  $row["EC_tax_name"];?>">
	<label >E.C tax type:</label>
	<input  type="text" name="ectax_type" class="form-control " value="<?php echo $row["EC_tax_type"];?>">
	<label >E.C tax amount:</label>
	<input  type="text" name="ectax_amount" class="form-control" value="<?php echo $row["EC_tax_amount"];?>">
		<br>
	<div style="margin-left: 9.5pc;">
	<input type="submit" name="submit3" value="Update" class="btn btn-primary">
	<a href="add_extracharge_tax.php" class="btn btn-danger">Cancel</a>
	</div>
	</div>

</div>
</form>

 <?php 
}
//codes for roomtype update
if(isset($_POST["submit3"])){
	mysqli_query($conn,"update EC_tax_tbl set EC_tax_ID='$_POST[ectax_id]',EC_tax_name='$_POST[ectax_name]',EC_tax_type='$_POST[ectax_type]', EC_tax_amount='$_POST[ectax_amount]' where EC_tax_ID='$id'");
	echo '<script>alert("Update Successfully")</script>';
	echo '<script>window.location.href = "add_extracharge_tax.php";</script>';
	exit();
}


  ?>
