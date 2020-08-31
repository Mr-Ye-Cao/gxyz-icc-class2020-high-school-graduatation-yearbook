<?php
	if (isset($_POST['submit'])) {
		require 'db.php';

		$na = $_POST['name'];
		$pa = $_POST['password'];
		
		$sql = "SELECT name FROM users WHERE name=? AND password=?" ;
		$stmt = mysqli_stmt_init($conn);

		if(! mysqli_stmt_prepare($stmt, $sql)){
			header("Location: ../f/sign.php?error=Well, this is not supposed to happen.");			
			exit();
		}else{
			mysqli_stmt_bind_param($stmt, "ss", $na, $pa);
			mysqli_stmt_execute($stmt);
			mysqli_stmt_store_result($stmt);
				
			$resultcheck = mysqli_stmt_num_rows($stmt);

			if($resultcheck==1){
				session_start();
				$_SESSION['LoggedIn'] = True;
				
				$_SESSION['commentor'] = $na;

				header("Location: ../f/display/board.php");
			}else{
				header("Location: ../f/sign.php?error=Sorry, Username or password incorrect!");
				exit();
			}
		}
	
		mysqli_stmt_close($stmt);
		mysqli_close($conn);
	}else{
		header("Location: ./sign.php");
		exit();
	}
?>