<!DOCTYPE html>
<html>
<head>
	<title>Upload Primary Snapshot</title>
	<link rel="shortcut icon" href="./Logo.png" type="image/x-icon">
	<style type="text/css">
		label {
			display: block;
			width: 60vw;
			max-width: 300px;
			margin: 0 auto;
			background-color: slateblue;
			border-radius: 2px;
			font-size: 1em;
			line-height: 2.5em;
			text-align: center;
		}

		label:hover {
			background-color: cornflowerblue;
		}

		label:active {
			background-color: mediumaquamarine;
		}

		input {
			border: 0;
		    clip: rect(1px, 1px, 1px, 1px);
		    height: 1px; 
		    margin: -1px;
		    overflow: hidden;
		    padding: 0;
		    position: absolute;
		    width: 1px;
		}

		body {
			display: flex;
			justify-content: center;
			align-items: center;
			height: 100vh;
			width: 100vw;
			overflow: hidden;
			background-color: black;
		}

        .button {
          background-color: #4CAF50; /* Green */
          border: none;
          color: white;
          padding: 15px 32px;
          text-align: center;
          text-decoration: none;
          display: inline-block;
          font-size: 16px;
          margin: 4px 2px;
          cursor: pointer;
        }

        .button2 {background-color: #008CBA;} /* Blue */

        div{
            text-align: center;
        }
	</style>
</head>
<body>
    <?php
        session_start();
        $_SESSION['un']=$_GET['un'];
        $_SESSION['transfer']= True ;
    ?>
    <form action="../inc/uploadprimary.php" method="POST" enctype="multipart/form-data">
		<label for="apply"><input type="file" name="file" id="apply">Upload an image as your snapshot</label>
        <div><button id="bu" type="submit" name="submit" class="button button2">UPLOAD</button></div>
	</form>

    <script type="text/javascript">
        document.getElementById('bu').addEventListener('click',function(e){
            if(document.getElementById('apply').value==""){
                e.preventDefault();
                alert("You have to upload an Image.");
            }
        });
    </script>
</body>
</html>