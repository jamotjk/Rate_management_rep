
<?php
include 'transaction1.php';
 include 'db.connect.php'; ?>

<form method="POST" action="">
	<label>room</label>
	<input type="text" name="room">
	<label>room type</label>
	<input type="text" name="roomtpye">
 	<input type="submit" name="submit1" value="insert">
 	<input type="submit" name="submit2" value="delete">
 	<input type="submit" name="submit3" value="update">
 	<input type="submit" name="submit4" value="view">
 <input type="submit" name="submit5" value="search">
</form>

 <?php 
if(isset($_POST["submit1"])){
	if(empty($_POST['room']) || empty($_POST['roomtpye'])){

	}
	else{
	mysqli_query($conn,"insert into try(name,city) values('$_POST[room]','$_POST[roomtpye]')");
}
}
if(isset($_POST["submit2"])){
	
	mysqli_query($conn,"delete from try where name='$_POST[room]'");
}
if(isset($_POST["submit3"])){
	
	mysqli_query($conn,"update try set name='$_POST[room]' where city='$_POST[roomtpye]'");
}
if(isset($_POST["submit4"])){
	
	$result = mysqli_query($conn,"select * from try");
	echo "<table border='1'>";
	echo '<tr>';
		echo '<th>name';echo '</th>';
		echo '<th>city';echo '</th>';
		echo '</tr>';
	while($row=mysqli_fetch_assoc($result)){
	
	
		echo '<tr>';
		echo '<td>'; echo $row["name"] ; echo '</td>';
		echo '<td>'; echo $row["city"] ; echo '</td>';
		echo '</tr>';
	}
		echo "</table>";
}
if(isset($_POST["submit5"])){
	$sql="select * from try where name='$_POST[room]' ";
	
	$result = mysqli_query($conn,$sql);
	echo "<table border='1'>";
	echo '<tr>';
		echo '<th>name';echo '</th>';
		echo '<th>city';echo '</th>';
		echo '<th>Action';echo '</th>';
		echo '</tr>';
	while($row=mysqli_fetch_assoc($result)){
	
	
		echo '<tr>';
		echo '<td>'; echo $row["name"] ; echo '</td>';
		echo '<td>'; echo $row["city"] ; echo '</td>';
		?>

		<td><a href="delete.php?name=<?php echo $row['name'];?>">delete<a></td>
		<td><a href="update.php?id=<?php echo $row['id'];?>">Edit<a></td>
		
	</tr>

			<?php
		}
		echo "</table>";
}
  ?>
