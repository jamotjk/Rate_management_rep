
<?php
	if(isset($_POST['submit'])) {

		include 'db.connect.php';

		$uid = mysqli_real_escape_string($conn, $_POST['uid']);
		$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

		// Error Handlers
		// Check if inputs are empty
		if(empty($uid) || empty($pwd)) {
			header("Location: ../login.php?login=empty");
			exit();		
		} else {
			$sql = "SELECT * FROM user_account WHERE user_id = '$uid'";
			$result = mysqli_query($conn, $sql);
			$resultCheck = mysqli_num_rows($result);
			if ($resultCheck < 1) {
					header("Location: ../login.php?login=error");
					exit();	
				} else {
					if ($row = mysqli_fetch_assoc($result)) {
						// De-hashing the password
						$hashedPwdCheck = password_verify($pwd, $row['pass']);
						if ($hashedPwdCheck == false) {
							header("Location: ../login.php?login=error");
							exit();	
						} elseif ($hashedPwdCheck == true) {
							// login the user here
							$_SESSION['u_id'] = $row['user_id'];
							$_SESSION['u_user'] = $row['username'];
							header("Location: ../home.php?login=success");
							exit();	
						
					} 

				}
			}
		}
	} else {
		header("Location: ../login.php?login=error");
		exit();	
	}

?>