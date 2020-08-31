<!DOCTYPE html>
<html>
<head>
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.title {
  color: grey;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}
</style>
</head>
<body>

<h2 style="text-align:center"><?php echo $_GET['a']; ?></h2>

<div class="card">
	<?php if($_GET['i']!="")
		  {
				$exist=True;
		  }else{
		  		$exist=False;
		  }
	?>

	  <img src="#" alt="" style="width:100%">
	<?php 
		if ($exist) {
			$state =  "My"." ".$_GET['a']." is:";
		}else{
			$state = "Sorry, I don't have a(n) ".$_GET['a']." account";
		}
	?>
	  <h1><?php echo $state; ?></h1>
	  <p class="title"><?php echo $_GET['i']; ?></p>
	<?php
		if ($exist) {
			echo "
				  <p>Feel Free to contact me</p>
  				  <div style='margin: 24px 0;'></div>
  				  <p><button>Contact</button></p>
				 ";
		}else{
			echo "<p><button href='./personal.php'>Go Back</button></p>";
		}
	?>
</div>

</body>
</html>
