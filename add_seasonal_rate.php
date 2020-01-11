
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
    	<select name = "selectno" class="form-control ml-2" style="width:12pc;" >
    	<option>none</option>
    	<?php 

    
	$result = mysqli_query($conn,"select room_ID from room_standardrate");
	$resultCheck = mysqli_num_rows($result);
	if($resultCheck>0){
	while($row=mysqli_fetch_assoc($result)){

	
		echo '	<option>'; echo $row["room_ID"] ; echo '</option>';

 }

} 

    	 ?>
    </select>
			</td>
		<td  class="tdd">
	<label class="mx-2">Status :</label>
	 
					    <select type="text-secondary" class="form-control" name="seasonalstatus">
					    	<option>--none--</option>
					    	<option>Peak Season</option>
					    	<option>Shoulder Season</option>
					    	<option>Low Season</option>
					    </select>
			</td>	
				<td class="tdd">
	<label class="mx-2">Start Date:</label>
	<input  type="date" name="start_date" class="form-control ml-2">
			</td>	
				<td class="tdd">
	<label class="mx-2">End Date:</label>
	<input  type="date" name="end_date" class="form-control ml-2">
			</td class="tdd">
	<td>
	<label class="mx-2">Daily</label>
	<input  type="text" name="daily" class="form-control ml-2 " style="width:13pc;">
			</td>
	
		<tr>
			<td class="tdd">
	<label class="mx-2">Week night</label>
	<input type="text" name="week_night" class="form-control ml-2">
			</td>
		<td  class="tdd">
	<label class="mx-2">Weekend night</label>
	<input  type="text" name="weekend_night" class="form-control ml-2">
			</td>	
				<td class="tdd">
	<label class="mx-2">Weekly</label>
	<input  type="text" name="weekly" class="form-control ml-2">
			</td>	
				<td class="tdd">
	<label class="mx-2">Monthly</label>
	<input  type="text" name="monthly" class="form-control ml-2">
			</td class="tdd">
	<td>
	<input  style="margin-top: 2pc;width:8pc;margin-left:5.5pc; " type="submit" name="submit1" class="btn btn-success" value="Save">
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

if(isset($_POST['submit3'])){

if(empty($_POST['daily']) || empty($_POST['weekly'])){

}
else{
	$result = mysqli_query($conn,"select total_standard_rate from room_standardrate where room_ID = '$_POST[selectno]'");
	$resultCheck = mysqli_num_rows($result);
	if($resultCheck>0){
	while($row=mysqli_fetch_assoc($result)){

	
		 $standardrate =  $row["total_standard_rate"] ;

 }

} 

if($daily <10){

 $tot1=($standardrate*$daily);
 $tot2=($tot1/10);
 $daily1=($standardrate+$tot2);
}else{
 $tot1=($standardrate*$daily);

 $tot2=($tot1/100);

 $daily1=($standardrate+$tot2);
}

if($week_night <10){
 $tot3=($standardrate*$week_night);
 $tot4=($tot3/10);
 $week_night1=($standardrate+$tot4);
}else{
 $tot3=($standardrate*$week_night);
 $tot4=($tot3/100);
 $week_night1=($standardrate+$tot4);
}

if($weekend_night <10){

 $tot5=($standardrate*$weekend_night);
 $tot6=($tot5/10);
 $weekend_night1=($standardrate+$tot6);
}else{
 $tot5=($standardrate*$weekend_night);
 $tot6=($tot3/100);
 $weekend_night1=($standardrate+$tot6);
}

if($weekly <10){
 $tot7=($standardrate*$weekly);
 $tot8=($tot7/10);
 $weekly1=($standardrate+$tot8);
}else{
 $tot7=($standardrate*$weekly);
 $tot8=($tot7/100);
 $weekly1=($standardrate+$tot8);
}
if($monthly<10){
 $tot9=($standardrate*$monthly);
 $tot10=($tot9/10);
 $monthly1=($standardrate+$tot10);
}else{
 $tot9=($standardrate*$monthly);
 $tot10=($tot9/10);
 $monthly1=($standardrate+$tot10);
}


mysqli_query($conn,"insert into seasonal_rate_tbl(room_ID,standard_rate,status,start_date,end_date,daily,week_night,weekend_night,weekly,monthly) values ('$_POST[selectno]','$standardrate','$_POST[seasonalstatus]','$_POST[start_date]','$_POST[end_date]','$daily1','$week_night1','$week_night1','$weekly1','$monthly1')");
}
}
 ?>
 <table width='93%' style="margin-left:2.4pc; ">
		<thead>
		<tr>
		<th class="thh">Room no</th>
		<th class="thh">Standard rate</th>
		<th class="thh">Status</th>
			<th class="thh">Start Date</th>
		<th class="thh">End Date</th>
		<th class="thh">Daily</th>
			<th class="thh">Week Night</th>
		<th class="thh">Weekend Night</th>
		<th class="thh">Weekly</th>

		<th class="thh">Monthly</th>
		</tr>
		</thead>
		<tbody>

 <?php 

//codes for search room features
if(isset($_POST["submit3"])){
	
	$result = mysqli_query($conn,"select * from seasonal_rate_tbl");
	$resultCheck = mysqli_num_rows($result);
	if($resultCheck>0){
	while($row=mysqli_fetch_assoc($result)){
	
		echo '<tr>';
		echo '<td>'; echo $row["room_ID"] ; echo '</td>';
		echo '<td>'; echo number_format($row["standard_rate"],2);  echo '</td>';
		echo '<td>'; echo $row["status"] ; echo '</td>';
		echo '<td>'; echo $row["start_date"] ; echo '</td>';
		echo '<td>'; echo $row["end_date"] ; echo '</td>';
		echo '<td>'; echo number_format($row["daily"],2) ; echo '</td>';
		echo '<td>'; echo  number_format($row["week_night"],2); echo '</td>';
		echo '<td>'; echo number_format($row["weekend_night"],2); echo '</td>';
		echo '<td>'; echo number_format($row["weekly"],2); echo '</td>';
		echo '<td>'; echo number_format($row["monthly"],2); echo '</td>';

	
		?>

	
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