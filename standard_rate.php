<?php
include 'transaction1.php';
 include 'db.connect.php'; ?>

<style>
	.tdd{
		border:8px solid transparent;
		width: 25%;
		
	}.thh{
		background-color:#006699;
		color:white;
		height: 2.5pc;
	}td,th{
	font-size: 14px;
	}
</style>
<form method="POST" action="">
	<div >

	<table width="95%" class="mt-4 ml-4">
		<tr>
			<td class="tdd">
		<label class="ml-0">Room no:</label>
    	<select name = "typeselect" class="form-control ">
    	<option>none</option>
    	<?php 

    
	$result = mysqli_query($conn,"select room_ID from room_type_tbl");
	$resultCheck = mysqli_num_rows($result);
	if($resultCheck>0){
	while($row=mysqli_fetch_assoc($result)){

	
		echo '	<option>'; echo $row["room_ID"] ; echo '</option>';
 }

} 

    	 ?>
    </select>
			</td>
		<td  class="tdd ml-2">
		<label>Room Features:</label>
    	<select name = "featselect" class="form-control">
    	<option>none</option>
  <?php 
	$result = mysqli_query($conn,"select feat_name from room_feat_tbl");
	$resultCheck = mysqli_num_rows($result);
	if($resultCheck>0){
	while($row=mysqli_fetch_assoc($result)){
		echo '	<option>'; echo $row["feat_name"] ; echo '</option>';
 }
}

    	 ?>
    </select>
			</td>	
	<td class="tdd">
			<label class="ml-2">Room Tax:</label>
    	<select name = "taxselect" class="form-control ">
    	<option>none</option>
      <?php 
	$result = mysqli_query($conn,"select tax_name from room_tax_tbl");
	$resultCheck = mysqli_num_rows($result);
	if($resultCheck>0){
	while($row=mysqli_fetch_assoc($result)){
		echo '	<option>'; echo $row["tax_name"] ; echo '</option>';
 }
}
 ?>
    </select>
			</td>	
				
	<td>
	<button  style="margin-top: 2pc;width:6pc;margin-left:1.8pc; " type="submit" name="add" class="btn btn-success ">
		<i class="fa fa-paper-plane"></i> Add</button>	</td>
		</tr>
	</table>
	</form>
	<hr>



	<table class="ml-4">
		
			<tr>
			<td class="">
	<label class="mx-2;"></label>
	<input type="text" name="generate" class="form-control ml-2" placeholder="Room no">
			</td>		
				<td class="">
		<button  style="margin-top: 1.3pc;width:6pc;margin-left:2pc; " type="submit" name="search_feat" class="btn btn-primary"><i class="fa fa-search"></i> Search </button>
			</td>	
				<td class="">
	
			</td>	
		</tr>
	</table>
</div>
<?php


if(isset($_POST['add'])){

 	
	$typeselect = $_POST['typeselect'];
	$featselect = $_POST['featselect'];
	$taxselect = $_POST['taxselect'];
	if($typeselect=="none"|| $featselect=="none"){
		echo '<script>alert("Action failed!")</script>';
	}else{
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
	
// insert selected value to this table to being a bridge for the data manipulation
	if($taxselect=="none"){
mysqli_query($conn,"insert into composerate_tbl(room_ID,room_type,room_amount,feat_name,feat_amount) 
	values('$roomid','$roomtype','$roomamount','$featname','$featamount')");
	
	}else {
		mysqli_query($conn,"insert into composerate_tbl(room_ID,room_type,room_amount,feat_name,feat_amount,Tax_name,Tax_amount) 
	values('$roomid','$roomtype','$roomamount','$featname','$featamount','$taxname','$taxamount')");
	# code...
	}
	
	}
}

if(isset($_POST['add'])){
//get value in composerate_tbl after inserting using combobox
	
	$result = mysqli_query($conn,"select room_ID,room_type,room_amount,SUM(feat_amount),SUM(Tax_amount) from composerate_tbl where room_ID = '$_POST[typeselect]'");
	$resultCheck = mysqli_num_rows($result);
	if($resultCheck>0){
	while($row=mysqli_fetch_assoc($result)){
		$getroomid= $row["room_ID"] ;
		$getroomamount = $row["room_amount"] ;  
		$getroomtype = $row["room_type"] ;  
		$getfeatamount = $row["SUM(feat_amount)"]; 
		$gettaxamount = $row["SUM(Tax_amount)"]; 
}
 } 
 //formulation for calculating standard room rate
 	$gettot1=($getfeatamount+$getroomamount);
 	if($gettaxamount<10){
 		// if the input number are 1 whole digit
 		$gettaxamount1=($gettaxamount*$gettot1);
 		$gettaxamount2=($gettaxamount1/10);
 		 $getstandtot=($getfeatamount+$getroomamount+$gettaxamount2);
 	}else if($gettaxamount>=10){
 		// if the input number are two whole digits
 		$gettaxamount1=($gettaxamount*$gettot1);
 		$gettaxamount2=($gettaxamount1/100);
 		 $getstandtot=($getfeatamount+$getroomamount+$gettaxamount2);

 	}
 	
 	
	// check if there's an existing record to update if there's data added
	$result = mysqli_query($conn,"select room_ID from room_standardrate where room_ID = '$getroomid'");
	$resultCheck = mysqli_num_rows($result);
	if($resultCheck>0){
		mysqli_query($conn,"update room_standardrate set feat_amount='$getfeatamount',tax_amount='$gettaxamount', total_standard_rate = '$getstandtot' where room_ID = '$_POST[typeselect]'");

	}else{

//insert data if there's no existing
		if($typeselect=="none"|| $featselect=="none"){
		 }else{
	mysqli_query($conn,"insert into room_standardrate(room_ID,room_type,room_amount,feat_amount,Tax_amount,total_standard_rate) 
	values('$getroomid','$getroomtype','$getroomamount','$getfeatamount','$gettaxamount','$getstandtot')");
    
	 }
	}

}

 ?>
 <br>
<table  width='93%' style="margin-left:2.2pc; ">
		<thead>
		<tr>
		<th class="thh pl-2">Room no</th>
		<th class="thh">Room name</th>
		<th class="thh">Room amount</th>
		<th class="thh">Features amount</th>
		<th class="thh">Room tax (%)</th>
		<th class="thh"><i class="fa fa-database"></i> Total</th>
		<th class="thh" ><center>Action</center></th>
		</tr>
		</thead>
		<tbody>

 <?php 

//codes for search

	$result = mysqli_query($conn,"select * from room_standardrate");
	$resultCheck = mysqli_num_rows($result);
	if($resultCheck>0){
	while($row=mysqli_fetch_assoc($result)){
	
		echo '<tr>';
		echo '<td class="pl-1">'; echo $row["room_ID"] ; echo '</td>';
		echo '<td>'; echo $row["room_type"] ; echo '</td>';
		echo '<td>'; echo number_format($row["room_amount"],2) ; echo '</td>';
		echo '<td>'; echo number_format($row["feat_amount"],2) ; echo '</td>';
		echo '<td>'; echo $row["tax_amount"] ; echo '%</td>';
		$total= $row["total_standard_rate"]; 
	
		echo '<td>'; echo number_format($total,2); echo '</td>';
		?>
		
	<td > <center><a href="delete_standardrate.php?room_ID=<?php echo $row['room_ID'];?>" style="color:red"><i class="fa fa-trash" ></i><span> </span> delete<a>
		</td>
		</center>
			<?php
		
		}
	}
