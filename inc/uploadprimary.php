<?php

session_start();

if (isset($_POST['submit'])) {
	$file = $_FILES['file'];

	$fileName = $_FILES['file']['name'];
	$fileTmpName = $_FILES['file']['tmp_name'];
	$size = $_FILES['file']['size'];
	$error = $_FILES['file']['error'];
	$type = $_FILES['file']['type'];

	$fileExt = explode('.', $fileName);
	$fileActualExt = strtolower(end($fileExt));

	$allowed = array('jpg', 'jpeg', 'png', 'pdf');

	if (in_array($fileActualExt, $allowed)) {
		if ($error === 0) {
			if ($size < 100000000) {

				$fileNewName = uniqid('', true).'.'.$fileActualExt;

				if (!file_exists('../f/uploads/'.$_SESSION['un'].'/p/')){
					mkdir('../f/uploads/'.$_SESSION['un'].'/',0777);
					mkdir('../f/uploads/'.$_SESSION['un'].'/p/',0777);
				}			

				$fileDestination = '../f/uploads/'.$_SESSION['un'].'/p/'.$fileNewName;

				move_uploaded_file($fileTmpName, $fileDestination);

				header("Location: ../f/lastup.php");

			}else{
				echo "Your file is too big!";
			}
		}else{
			echo "There was an error uploading your file!";
		}
	}else{
		echo "You cannot upload file of this type!";
	}
}
?>
