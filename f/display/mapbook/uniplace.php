<?php
	require "../../../inc/db.php";

	function parseToXML($htmlStr){
		$xmlStr=str_replace('<','&lt;',$htmlStr);
		$xmlStr=str_replace('>','&gt;',$xmlStr);
		$xmlStr=str_replace('"','&quot;',$xmlStr);
		$xmlStr=str_replace("'",'&#39;',$xmlStr);
		$xmlStr=str_replace("&",'&amp;',$xmlStr);
		return $xmlStr;
	}

	$query = "SELECT name,university,lat,lng FROM users WHERE 1;";
	$result = $conn->query($query);
	if (!$result) {
  		die('Invalid query: ' . mysqli_error());
	}
	
	header("Content-type: text/xml");

	echo "<?xml version='1.0' ?>";
	echo '<markers>';
	$ind=0;

	while ($row = mysqli_fetch_assoc($result)){
	  echo '<marker ';
	  	echo 'uniname="' . parseToXML($row['university']) . '" ';

	  	echo 'lat="' . $row['lat'] . '" ';
	  	echo 'lng="' . $row['lng'] . '" ';

	  	echo 'name="' . $row['name'] . '" ';
	  echo '/>';
	  $ind = $ind + 1;
	}

	echo '</markers>';
?>