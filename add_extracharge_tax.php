
<?php
include 'transaction1.php';
 include 'db.connect.php'; ?>

<style>
	.tdd{
		border:5px solid transparent;
		
	}.thh{
		background-color:#006699;
		color:white;
		height: 2.5pc;
	
	
	}td,th{
	font-size: 14px;
	}
</style>
<form method="POST" action="">
	<div border="2">

	<table width="95%" class="mt-4 ml-4">
		<tr>
			<td class="tdd">
	<label class="mx-2">E.C tax no:</label>
	<input type="text" name="ectax_id" class="form-control ml-2" placeholder="Minimum of 4 digits">
			</td>
		<td  class="tdd">
	<label class="mx-2">E.C tax name:</label>
	<input  type="text" name="ectax_name" class="form-control ml-2">
			</td>	
				<td class="tdd">
	<label class="mx-2">E.C tax type:</label>
	<input  type="text" name="ectax_type" class="form-control ml-2">
			</td>	
				<td class="tdd">
	<label class="mx-2">E.C tax Amount:</label>
	<input  type="text" name="ectax_amount" class="form-control ml-2">
			</td>
	<td>
	<input  style="margin-top: 2pc;width:6pc;margin-left:2pc; " type="submit" name="submit1" class="btn btn-success" value="Save">
			</td>
	</table>
	<hr>

	<table class="ml-4">
			</tr>
			<tr>
			<td class="tdd">
	<label class="mx-2">Search:</label>
	<input type="text" name="ectax_search" class="form-control ml-2">
			</td>		
				<td class="tdd">
		<input value="Search"  style="margin-top: 1.8pc;width:6pc;margin-left:2pc; " type="submit" name="submit2" class="btn btn-primary">
			</td>	
				<td class="tdd">
		<input value="View records"  style="margin-top: 1.8pc;width:7pc;margin-left:1pc; " type="submit" name="submit3" class="btn btn-info">
			</td>	
		</tr>
	</table>
</div>
</form>


<?php 

//codes for inserting room type data

if(isset($_POST["submit1"])){
	if(empty($_POST['ectax_id']) || empty($_POST['ectax_name']) || empty($_POST['ectax_type'])|| empty($_POST['ectax_amount'])){
		echo '<script>alert("Action Failed")</script>';
		echo '<script>window.location.href = " add_extracharge_tax.php";</script>';
	}else{

	$result = mysqli_query($conn,"select * from EC_tax_tbl where EC_tax_ID='$_POST[ectax_id]'");
	$resultCheck = mysqli_num_rows($result);
	if($resultCheck>0){
	echo '<script>alert("The data that your trying to input is already existed")</script>';
	echo '<script>window.location.href = " add_extracharge_tax.php";</script>';
	}
	else{
	mysqli_query($conn,"insert into EC_tax_tbl(EC_tax_ID,EC_tax_name,EC_tax_type,EC_tax_amount) values('$_POST[ectax_id]','$_POST[ectax_name]','$_POST[ectax_type]','$_POST[ectax_amount]')");
		echo '<script>alert("Successfully added")</script>';
		echo '<script>window.location.href = " add_extracharge_tax.php";</script>';
		}
	}
}

 ?>
<br>
	<table  width='93%' style="margin-left:2.4pc; ">
		<thead>
		<tr>
		<th class="thh pl-2"> E.C Tax no</th>
		<th class="thh">E.C Tax name</th>
		<th class="thh">E.C Tax type</th>
		<th class="thh">E.C Tax amount</th>
		<th class="thh" ><center>Action</center></th>
		</tr>
		</thead>
		<tbody>

 <?php 

//codes for search
if(isset($_POST["submit2"])){
	
	$result = mysqli_query($conn,"select * from EC_tax_tbl where EC_tax_ID='$_POST[ectax_search]'");
	$resultCheck = mysqli_num_rows($result);
	if($resultCheck>0){
	while($row=mysqli_fetch_assoc($result)){
	
		echo '<tr>';
		echo '<td class="pl-2">'; echo $row["EC_tax_ID"] ; echo '</td>';
		echo '<td>'; echo $row["EC_tax_name"] ; echo '</td>';
		echo '<td>'; echo $row["EC_tax_type"] ; echo '</td>';
		echo '<td>'; echo $row["EC_tax_amount"] ; echo '</td>';
		?>
		<td > <center><a href="delete_ECtax.php?EC_tax_ID=<?php echo $row['EC_tax_ID'];?>" class="text text-danger"><i class="fa fa-trash"></i> delete<a><span> | </span>
		<a  href="edit_update_ECtax.php?EC_tax_ID=<?php echo $row['EC_tax_ID'];?>" class="text text-success"> <i class="fa fa-edit"></i> Edit<a></td>
		</center>

			<?php
		
		}
	}else{
	echo '<script>alert("No records")</script>';
	echo '<script>window.location.href = " add_extracharge_tax.php";</script>';
		}
}
//codes for view records
if(isset($_POST["submit3"])){
	
	$result = mysqli_query($conn,"select * from EC_tax_tbl");
	$resultCheck = mysqli_num_rows($result);
	if($resultCheck>0){
	while($row=mysqli_fetch_assoc($result)){
	
		echo '<tr>';
		echo '<td class="pl-2">'; echo $row["EC_tax_ID"] ; echo '</td>';
		echo '<td>'; echo $row["EC_tax_name"] ; echo '</td>';
		echo '<td>'; echo $row["EC_tax_type"] ; echo '</td>';
		echo '<td>'; echo $row["EC_tax_amount"] ; echo '</td>';
		?>

	   <td > <center><a href="delete_ECtax.php?EC_tax_ID=<?php echo $row['EC_tax_ID'];?>"class="text text-danger"><i class="fa fa-trash"></i>delete<a><span> | </span>
		<a  href="edit_update_ECtax.php?EC_tax_ID=<?php echo $row['EC_tax_ID'];?>" class="text text-success"> <i class="fa fa-edit"></i> Edit<a></td>
		</center>

			<?php
		
		}
	}else{
	echo '<script>alert("No records")</script>';
	echo '<script>window.location.href = " add_extracharge_tax.php";</script>';
		}
	}
		

  ?>
</tbody>
	</table>