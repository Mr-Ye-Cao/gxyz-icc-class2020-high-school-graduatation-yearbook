<?php
	session_start();
	if(!(isset($_SESSION['LoggedIn'])&&$_SESSION['LoggedIn'])){
		header("Location: ../sign.php?error=Sorry, you have to register a membership to access the content of 2020 family board.");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Board</title>
	<link rel="stylesheet" type="text/css" href="./static/board.css">
	<link rel="shortcut icon" href="./Logo.png" type="image/x-icon">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>

	<link rel="stylesheet" type="text/css" href="./static/layout.css">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-danger shadow fixed-top">
	  <div class="container">
	    <a class="navbar-brand" href="#">AP1 Family Board</a>
	    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
	          <span class="navbar-toggler-icon"></span>
	        </button>
	    <div class="collapse navbar-collapse" id="navbarResponsive">
	      <ul class="navbar-nav ml-auto">
	        <li class="nav-item active">
	          <a class="nav-link" href="#">Home
	                <span class="sr-only">(current)</span>
	              </a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link" href="#">WhoAreWe?</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link" href="#">Trace Line</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link" href="./mapbook/map.html">MapBook</a>
	        </li>
	      </ul>
	    </div>
	  </div>
	</nav>

	<header class="masthead">
	  <div class="container h-100">
	    <div class="row h-100 align-items-center">
	      <div class="col-12 text-center">
	        <h1 class="font-weight-light specialfont">Bravo</h1>
	        <p class="lead romfont">AP ONE</p>
	      </div>
	    </div>
	  </div>
	</header>

	<section class="py-5 bg-info">
		<section class="info">
		  <h1 class="specialfont">Welcome To the Family of AP1s</h1>
		</section>
		<section class="cards-wrapper">

<!-- 		  
		<div class="card-grid-space">
		    <a class="card" href="./personal/personal.php" style="--bg-img: url('../../uploads/Peter/p/5f26d06b8b8c19.10953086.jpg')">
		      <div>
		        <h1>Peter</h1>
		        <p>Magician</p>
		      </div>
		    </a>
		  </div>
 -->

	<?php
		require('../../inc/db.php');

		$directory = new DirectoryIterator(dirname('../uploads/.')); 
		  
		foreach($directory as $dir) {

		    if (!$dir->isDot()) { 

			    $sql = "SELECT pronoun FROM users WHERE name=\"${dir}\"" ;
				$result = $conn->query($sql);
				$row = $result->fetch_assoc();
				$pro = $row['pronoun'];

		        $d='../uploads/'.$dir.'/p/';
		        $photo = scandir($d,1)[0];

		        $imgurl = '../'.$d.$photo;

		        echo "
		        				<div class='card-grid-space'>
		    						<a class='card' href='./personal/personal.php?profile=${dir}&pro=${pro}' style='--bg-img: url(\"${imgurl}\")'>
		      							<div>
		        							<h1>${dir}</h1>
		        							<p>${pro}</p>
		      							</div>
		    						</a>
		  						</div>
		        	 ";
		    } 
		} 
	?>

		</section>
	</section>
</body>
</html>