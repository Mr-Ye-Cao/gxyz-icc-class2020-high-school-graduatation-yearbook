<?php
	require './db.php';

	if(!isset($_POST['isAno'])){
		session_start();
		$name = $_SESSION['commentor'];
	}else{
		$name = 'Anonymous';
	}

	$sql = "SELECT comm FROM com WHERE name='${_GET['v']}';";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $c = $row['comm'];


    $c = $c.$name.'<say>'.$_POST['comment'].'<Finish>';

    $sql = "UPDATE com SET comm='${c}' WHERE name='${_GET['v']}';";
    $result = $conn->query($sql);

    header("Location: ../f/display/personal/personal.php?profile=".$_GET['v'].'&pro='.$_GET['p']);
?>