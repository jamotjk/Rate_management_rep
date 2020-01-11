<?php  
session_start();
	include_once 'transaction1.php';
		include 'db.connect.php';

?>	

		<div class="col-md-4 mx-auto " style="	height:4pc;margin-top: 4pc;background-color:#006699;border-radius: 10px 10px 0px 0px;padding:0px 10px 10px 13px;" >
	<div class="container mt-4">
	<h5 style="padding-top:1pc;color: white;"class="mt-4">Login</h5>
	</div></div>

	<div class="col-md-4 mx-auto" style="border:2px solid lightgray;border-radius:0px 0px 10px 10px;">
		<div class="container mt-4">
		<form class="login-form" method="POST">
			<div class="login-info">
			<p>Username</p>
			<input type="text" name="uid" minimumlength="4" required title="Field up" class="form-control">
			<p>Password</p>
			<input type="password" name="pwd" required class="form-control">
			<br><br>
			<input type="submit" name="submit" class="btn btn-primary" style="float:right" value="Login"><br>
			<a href="signup.php">Don't have an account?</a>
			<br>
			<br>
			</div>
		</form>
	</div>

	</div>
</body>
</html>
<?php 
if (isset($_POST['submit'])) {

$result = mysqli_query($conn,"SELECT * FROM user_account WHERE username ='$_POST[uid]' && pass = '$_POST[pwd]'");
$resultcheck = mysqli_num_rows($result);
if($resultcheck > 0){
	while($row=mysqli_fetch_assoc($result)){
	echo "success";
	echo $_SESSION['uid'] = $row['user_id'];
	}
}else{
	echo "failed";
}

}else{
	echo "FAILED";
}

 ?>
