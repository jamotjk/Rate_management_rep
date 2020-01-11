<?php
include 'transaction1.php';
 include 'db.connect.php'; 
 include 'tooltip.php'?>

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
	<label class="mx-2">Feature no:</label>
	<input type="text" name="feat_id" class="form-control ml-2">
			</td>
		<td  class="tdd">
	<label class="mx-2">Feature name:</label>
	<input  type="text" name="feat_name" class="form-control ml-2">
			</td>	
				<td class="tdd">
	<label class="mx-2">Feature amount:</label>
	<input  type="text" name="feat_amount" class="form-control ml-2">
			</td>	
	<td>
	<input  style="margin-top: 2pc;width:6pc;margin-left:2pc; " type="submit" name="submit" class="btn btn-success" value="Save">
			</td>
	</table>
	<hr>

	<table class="ml-4">
			</tr>
			<tr>
			<td class="tdd">
	<label class="mx-2">Search:</label>
	<input type="text" name="feat_search" class="form-control ml-2 text-success"  data-toggle="tooltip" data-placement="left" title="Room no. here! ">
			</td>		
				<td class="tdd">

		<input value="Search"  style="margin-top: 1.8pc;width:6pc;margin-left:2pc; " type="submit" name="search_feat" class="btn btn-primary"  data-toggle="tooltip" data-placement="top" title="Enter Room no. before Clicking the Search button!">
			</td>	
				<td class="tdd">
		<input value="View records"  style="margin-top: 1.8pc;width:7pc;margin-left:1pc; " type="submit" name="view_records" class="btn btn-info">
			</td>	
		</tr>
	</table>
</div>
</form>
<?php 

//codes for inserting room type data

if(isset($_POST["submit"])){
	if(empty($_POST['feat_id']) || empty($_POST['feat_name']) || empty($_POST['feat_amount'])){
		echo '<script>alert("Action Failed")</script>';
		echo '<script>window.location.href = " add_room_features.php";</script>';
	}else{

	$result = mysqli_query($conn,"select * from room_feat_tbl where feat_id='$_POST[feat_id]' || feat_name='$_POST[feat_name]' ");
	$resultCheck = mysqli_num_rows($result);
	if($resultCheck>0){
	echo '<script>alert("The data that your trying to input is already existed")</script>';
	echo '<script>window.location.href = " add_room_features.php";</script>';
	}
	else{
	mysqli_query($conn,"insert into room_feat_tbl(feat_id,feat_name,feat_amount) values('$_POST[feat_id]','$_POST[feat_name]','$_POST[feat_amount]')");
		echo '<script>alert("Successfully added")</script>';
	echo '<script>window.location.href = " add_room_features.php";</script>';
		}
	}
}
 ?>

 <br>
	<table width='93%' style="margin-left:2.4pc; ">
		<thead>
		<tr>
		<th class="thh">Features no</th>
		<th class="thh">Features name</th>
		<th class="thh">Features amount</th>

		<th class="thh" ><center>Action</center></th>
		</tr>
		</thead>
		<tbody>

 <?php 

//codes for search room features
if(isset($_POST["search_feat"])){
	
	$result = mysqli_query($conn,"select * from room_feat_tbl where feat_id='$_POST[feat_search]'");
	$resultCheck = mysqli_num_rows($result);
	if($resultCheck>0){
	while($row=mysqli_fetch_assoc($result)){
	
		echo '<tr>';
		echo '<td>'; echo $row["feat_id"] ; echo '</td>';
		echo '<td>'; echo $row["feat_name"] ; echo '</td>';
		echo '<td>'; echo $row["feat_amount"] ; echo '</td>';
	
		?>

		<td > <center><a href="delete_roomfeatures.php?feat_id=<?php echo $row['feat_id'];?>"class="text text-danger"><i class="fa fa-trash"></i>delete<a><span> | </span>
		<a  href="edit_update_roomfeatures.php?feat_id=<?php echo $row['feat_id'];?>" class="text text-success"> <i class="fa fa-edit"></i> Edit<a></td>
		</center>
	</tr>

			<?php
			}
		}else{
			echo '<script>alert("Cant found")</script>';
			echo '<script>window.location.href = " add_room_features.php";</script>';
		}
}
//codes for view records
if(isset($_POST["view_records"])){
	
	$result = mysqli_query($conn,"select * from room_feat_tbl");
	$resultCheck = mysqli_num_rows($result);
	if($resultCheck>0){
	while($row=mysqli_fetch_assoc($result)){
	
		echo '<tr>';
		echo '<td>'; echo $row["feat_id"] ; echo '</td>';
		echo '<td>'; echo $row["feat_name"] ; echo '</td>';
		echo '<td>'; echo $row["feat_amount"] ; echo '</td>';
	
		?>

		<td > <center><a href="delete_roomfeatures.php?feat_id=<?php echo $row['feat_id'];?>"class="text text-danger"><i class="fa fa-trash"></i>delete<a><span> | </span>
		<a  href="edit_update_roomfeatures.php?feat_id=<?php echo $row['feat_id'];?>" class="text text-success"> <i class="fa fa-edit"></i>Edit<a></td>
		</center>
	</tr>

			<?php
			}
		}else{
			echo '<script>alert("Cant found")</script>';
			echo '<script>window.location.href = " add_room_features.php";</script>';
		}
	}
		

  ?>
</tbody>
	</table>