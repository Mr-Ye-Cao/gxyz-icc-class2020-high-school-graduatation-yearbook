<?php
		
	if (isset($_POST['submit'])) {
		require 'db.php';

		$un = $_POST['univ'];//noemp
		$te = $_POST['words'];//noemp
		$na = $_POST['name'];//noemp
		$ge = $_POST['gender'];//noemp
        $pr = $_POST['pren'];//noemp
	    $fa = $_POST['face'];//emp
	    $in = $_POST['inst'];//emp
	    $we = $_POST['wechat'];//emp
	    $e = $_POST['email'];//emp
	    $pass = $_POST['password'];//noemp
	    $lng = $_POST['lng'];
		$lat = $_POST['lat'];

		$un = $conn->real_escape_string($un);//noemp
                $te = $conn->real_escape_string($te);//noemp
                $na = $conn->real_escape_string($na);//noemp
                $ge = $conn->real_escape_string($ge);//noemp
                $pr = $conn->real_escape_string($pr);//noemp
                $fa = $conn->real_escape_string($fa); //emp
                $in = $conn->real_escape_string($in); //emp
                $we = $conn->real_escape_string($we);//emp
                $e = $conn->real_escape_string($e); //emp
                $pass = $conn->real_escape_string($pass); //noemc

		$sql = "INSERT INTO users (name, gender, pronoun, university, words, facebook, instagram, wechat, email, password, lng, lat) VALUES ('${na}','${ge}','${pr}','${un}','${te}','${fa}','${in}','${we}','${e}','${pass}',${lng},${lat});";

		if ($conn->query($sql) === TRUE) {
			session_start();
			$_SESSION['LoggedIn'] = True;

			$_SESSION['commentor'] = $na;

			$sql = "INSERT INTO com (name, comm) VALUES ('${na}','');";
			$conn->query($sql);

			header("Location:../f/uploadf.php?signup=success&un=".$na."&pa=".$pass);
		} else {
    		echo "Error:".$sql."<br>".$conn->error;
		}
	}else{
		header("Location: ../f/survey.html");
		exit();
	}
?>
