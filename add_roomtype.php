
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
	<label class="mx-2">Room no:</label>
	<input type="text" name="room_id" class="form-control ml-2">
			</td>
		<td  class="tdd">
	<label class="mx-4">Room code:</label>
	<input  type="text" name="room_code" class="form-control ml-2">
			</td>	
				<td class="tdd">
	<label class="mx-4">Room type:</label>
	<input  type="text" name="room_type" class="form-control ml-2">
			</td>	
				<td class="tdd">
	<label class="mx-4">Room Amount:</label>
	<input  type="text" name="room_amount" class="form-control ml-2">
			</td class="tdd">
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
	<input type="text" name="room_search" class="form-control ml-2">
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



echo $ss = $_POST['room_id'];


	if(empty($_POST['room_id']) || empty($_POST['room_type']) || empty($_POST['room_code'])|| empty($_POST['room_amount'])){
		echo '<script>alert("Action Failed")</script>';
		echo '<script>window.location.href = " add_roomtype.php";</script>';
	}else{

	$result = mysqli_query($conn,"select * from room_type_tbl where room_ID='$_POST[room_id]' || room_code='$_POST[room_code]' ");
	$resultCheck = mysqli_num_rows($result);
	if($resultCheck>0){
	echo '<script>alert("The data that your trying to input is already existed")</script>';
	echo '<script>window.location.href = " add_roomtype.php";</script>';
	}
	else{
	mysqli_query($conn,"insert into room_type_tbl(room_ID,room_code,room_type,room_amount) values('$_POST[room_id]','$_POST[room_code]','$_POST[room_type]','$_POST[room_amount]')");
	echo '<script>alert("Successfully added")</script>';
	echo '<script>window.location.href = " add_roomtax.php";</script>';
}
}
}


 ?>
<br>
	<table  width='93%' style="margin-left:2.4pc; ">
		<thead>
		<tr>
		<th class="thh">Room no</th>
		<th class="thh">Room code</th>
		<th class="thh">Room type</th>
		<th class="thh">Room amount</th>
		<th class="thh" ><center>Action</center></th>
		</tr>
		</thead>
		<tbody>

 <?php 

//codes for search
if(isset($_POST["submit2"])){
	
	$result = mysqli_query($conn,"select * from room_type_tbl where room_ID='$_POST[room_search]'");
	$resultCheck = mysqli_num_rows($result);
	if($resultCheck>0){
	while($row=mysqli_fetch_assoc($result)){
	
		echo '<tr>';
		echo '<td>'; echo $row["room_ID"] ; echo '</td>';
		echo '<td>'; echo $row["room_code"] ; echo '</td>';
		echo '<td>'; echo $row["room_type"] ; echo '</td>';
		echo '<td>'; echo $row["room_amount"] ; echo '</td>';
		?>

		<td > <center><a href="delete_roomtype.php?room_ID=<?php echo $row['room_ID'];?>">delete<a><span> | </span>
		<a  href="edit_update_roomtype.php?room_ID=<?php echo $row['room_ID'];?>">Edit<a></td>
		</center>
	</tr>

			<?php
			}
		}else{
			echo '<script>alert("Cant found")</script>';
			echo '<script>window.location.href = " add_roomtype.php";</script>';
		}
}
//codes for view records
if(isset($_POST["submit3"])){
	
	$result = mysqli_query($conn,"select * from room_type_tbl");
	$resultCheck = mysqli_num_rows($result);
	if($resultCheck>0){
	while($row=mysqli_fetch_assoc($result)){
	
		echo '<tr>';
		echo '<td>'; echo $row["room_ID"] ; echo '</td>';
		echo '<td>'; echo $row["room_code"] ; echo '</td>';
		echo '<td>'; echo $row["room_type"] ; echo '</td>';
		echo '<td>'; echo $row["room_amount"] ; echo '</td>';
		?>

	   <td > <center><a href="delete_roomtype.php?room_ID=<?php echo $row['room_ID'];?>">delete<a><span> | </span>
		<a  href="edit_update_roomtype.php?room_ID=<?php echo $row['room_ID'];?>">Edit<a></td>
		</center>

			<?php
		
		}
	}else{
	echo '<script>alert("No records")</script>';
	echo '<script>window.location.href = " add_roomtype.php";</script>';
		}
	}
		

  ?>
</tbody>
	</table>