<!DOCTYPE html>
<html lang="en">
<head>
<link rel="shortcut icon" href="./Logo.png" type="image/x-icon">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<title>ICC Register</title>

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="./survey.css">

<!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script> -->
<style>
	body {
		color: #fff;
		background: #19aa8d;
		font-family: 'Roboto', sans-serif;
	}
	.form-control {
		font-size: 15px;
	}
	.form-control, .form-control:focus, .input-group-text {
		border-color: #e1e1e1;
	}
	.form-control, .btn {        
		border-radius: 3px;
	}
	.signup-form {
		width: 400px;
		margin: 0 auto;
		padding: 30px 0;		
	}
	.signup-form form {
		color: #999;
		border-radius: 3px;
		margin-bottom: 15px;
		background: #fff;
		box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
		padding: 30px;
	}
	.signup-form h2 {
		color: #333;
		font-weight: bold;
		margin-top: 0;
	}
	.signup-form hr {
		margin: 0 -30px 20px;
	}
	.signup-form .form-group {
		margin-bottom: 20px;
	}
	.signup-form label {
		font-weight: normal;
		font-size: 15px;
	}
	.signup-form .form-control {
		min-height: 38px;
		box-shadow: none !important;
	}	
	.signup-form .input-group-addon {
		max-width: 42px;
		text-align: center;
	}	
	.signup-form .btn, .signup-form .btn:active {        
		font-size: 16px;
		font-weight: bold;
		background: #19aa8d !important;
		border: none;
		min-width: 140px;
	}
	.signup-form .btn:hover, .signup-form .btn:focus {
		background: #179b81 !important;
	}
	.signup-form a {
		color: #fff;	
		text-decoration: underline;
	}
	.signup-form a:hover {
		text-decoration: none;
	}
	.signup-form form a {
		color: #19aa8d;
		text-decoration: none;
	}	
	.signup-form form a:hover {
		text-decoration: underline;
	}
	.signup-form .fa {
		font-size: 21px;
	}
	.signup-form .fa-paper-plane {
		font-size: 18px;
	}
	.signup-form .fa-check {
		color: #fff;
		left: 17px;
		top: 18px;
		font-size: 7px;
		position: absolute;
	}

		/* Always set the map height explicitly to define the size of the div
		 * element that contains the map. */
		#map {
		  height: 20px;
		}
		/* Optional: Makes the sample page fill the window. */
		
		#description {
		  font-family: Roboto;
		  font-size: 15px;
		  font-weight: 300;
		}

		#infowindow-content .title {
		  font-weight: bold;
		}

		#infowindow-content {
		  display: none;
		}

		#map #infowindow-content {
		  display: inline;
		}

		.pac-card {
		  width: 80%;
		  margin: 10px 10px 0 0;
		  box-sizing: border-box;
		  -moz-box-sizing: border-box;
		  outline: none;
		  font-family: Roboto;
		}

		#pac-container {
		  padding-bottom: 12px;
		  margin-right: 12px;
		}

		.pac-controls {
		  display: inline-block;
		  padding: 5px 11px;
		}

		.pac-controls label {
		  font-family: Roboto;
		  font-size: 13px;
		  font-weight: 300;
		}

		#pac-input {
		  width: 100%;
		  background-color: #fff;
		  font-family: Roboto;
		  font-size: 15px;
		  font-weight: 300;
		  margin-left: 12px;
		  padding: 0 11px 0 13px;
		  text-overflow: ellipsis;
		}

		#pac-input:focus {
		  border-color: #4d90fe;
		}

		#title {
		  color: #fff;
		  background-color: #4d90fe;
		  font-size: 25px;
		  font-weight: 500;
		  padding: 6px 12px;
		}

		textarea{
			margin-left: .5cm;
		}
</style>
</head>
<body>
<div class="signup-form">
    <form action="../inc/signup.php" method="POST" id="suform" name="suform">
		<h2>Sign Up</h2>
		<p>Please fill in this form to create an account!</p>
		<hr>

		<!-- University univ-->
        <div class="form-group">
				<div class="input-group">
					<div class="input-group-prepend">
						<span class="input-group-text">
							<span class="fa fa-university"></span>
						</span>                    
					</div>

					<div class="pac-card" id="pac-card">
					  <div id="pac-container">
					    <input id="pac-input" type="text" name="univ" 
					        placeholder="Enter the name of your university">
					  </div>
					</div>
					
					<div id="map"></div>

					<div id="infowindow-content">
					  <img src="" width="16" height="16" id="place-icon">
					  <span id="place-name"  class="title"></span><br>
					  <span id="place-address"></span>
					</div>
				</div>
        </div>

        <!-- Text words-->
		<div class="form-group">
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text">
						<i class="fa fa-file-text"></i>
					</span>                    
				</div>
				<textarea id="wo" name="words" form="suform" required="required" placeholder="Here, write whatever you want to say."></textarea>
			</div>
        </div>


		<!-- name name-->
        <div class="form-group">
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text">
						<span class="fa fa-user"></span>
					</span>                    
				</div>
				<input type="text" id="na" class="form-control" name="name" placeholder="Your English name" required="required">
			</div>
        </div>

        <!-- Gender gender-->
        <div class="form-group">
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text">
						<span class="fa fa-mars"></span>
					</span>                    
				</div>
				<input type="text" id="ge" class="form-control" name="gender" placeholder="Male/Female" required="required">
			</div>
        </div>

        <!-- pron pren-->
        <div class="form-group">
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text">
						<span class="fa fa-id-card"></span>
					</span>                    
				</div>
				<input type="text" id="pr" class="form-control" name="pren" placeholder="Artistically state your identiy" required="required">
			</div>
        </div>


        <!-- facebook face -->
        <div class="form-group">
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text">
						<span class="fa fa-facebook"></span>
					</span>                    
				</div>
				<input type="text" id="fac" class="form-control" name="face" placeholder="Facebook account if you have one">
			</div>
        </div>

        <!-- Instagram inst -->
        <div class="form-group">
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text">
						<span class="fa fa-instagram"></span>
					</span>                    
				</div>
				<input type="text" class="form-control" name="inst" placeholder="Instagram account if you have one">
			</div>
        </div>

        <!-- wechat wechat -->
        <div class="form-group">
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text">
						<span class="fa fa-wechat"></span>
					</span>                    
				</div>
				<input type="text" class="form-control" name="wechat" placeholder="Wechat account if you have one">
			</div>
        </div>

        <!-- Email email -->
        <div class="form-group">
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text">
						<i class="fa fa-paper-plane"></i>
					</span>                    
				</div>
				<input type="email" class="form-control" name="email" placeholder="Email account for friends to contact you">
			</div>
        </div>

        <!-- password pass-->
		<div class="form-group">
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text">
						<i class="fa fa-lock"></i>
					</span>                    
				</div>
				<input type="password" id="p1" class="form-control" name="password" placeholder="Password" required="required">
			</div>
        </div>

        <!-- password repeat -->
		<div class="form-group">
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text">
						<i class="fa fa-lock"></i>
						<i class="fa fa-check"></i>
					</span>                    
				</div>
				<input type="password" id="p2" class="form-control" placeholder="Confirm Password" required="required">
			</div>
        </div>
  
		<div class="form-group">
            <button name="submit" id="subb" class="btn btn-primary btn-lg">Sign Up</button>
        </div>
    </form>
	<div class="text-center">Already have an account? <a href="./sign.php">Login here</a></div>
</div>
	<script type="text/javascript">
		document.getElementById('pac-input').addEventListener('blur',function(e){
			if(e.target.value.length!==0){
				var univ = document.getElementById("pac-input").value;

				var url = "https://maps.googleapis.com/maps/api/geocode/json?address="+encodeURI(univ)+"&key=AIzaSyCljUDzlrjbsdVaX_tXCmQH5oV1JEUnVeA";

				fetch(url)
					.then(res => res.json())
					.then((out) => {
						if(!document.getElementById('hidone')){
						
						var lat=out["results"][0]["geometry"]["location"]["lat"].toFixed(6);
						var lng=out["results"][0]["geometry"]["location"]["lng"].toFixed(6);
							
							var inputone = document.createElement("input");
							inputone.type = "text";
							inputone.value = lat;
							inputone.hidden = true;
							inputone.id = "hidone";
							inputone.name = "lat";

							var inputtwo = document.createElement("input");
							inputtwo.type = "text";
							inputtwo.value = lng;
							inputtwo.hidden = true;
							inputtwo.id = "hidtwo";
							inputtwo.name = "lng";

							document.suform.appendChild(inputone);
							document.suform.appendChild(inputtwo);
						}else{
						
						var lat=out["results"][0]["geometry"]["location"]["lat"].toFixed(6);
						var lng=out["results"][0]["geometry"]["location"]["lng"].toFixed(6);

							var inputone = document.getElementById('hidone');
							var inputtwo = document.getElementById('hidtwo');
							inputone.value = lat;
							inputtwo.value = lng;
						}
					})
					.catch(err => { throw err });

			}
		});

		document.getElementById('subb').addEventListener("click",function(e){
			var univ = document.getElementById("pac-input").value;
			var word = document.getElementById("wo").value;
			var name = document.getElementById("na").value;
			var gen = document.getElementById("ge").value;
			var pr = document.getElementById("pr").value;
			var pa = document.getElementById("p1").value;
			var repa = document.getElementById("p2").value;

			if(univ.length==0||word.length==0||name.length==0||gen.length==0||pr.length==0||pa.length==0||pa!=repa){
				e.preventDefault();
				if(univ.length==0||word.length==0||name.length==0||gen.length==0||pr.length==0||pa.length==0){
					alert("Your information is not complete.");
				}else{
					alert("The two passwords are not the same.");
				}
			}
		});
	</script>

	<script type="text/javascript">
		function initMap() {
		  var map = new google.maps.Map(document.getElementById('map'), {
		    center: {lat: -33.8688, lng: 151.2195},
		    zoom: 13
		  });
		  var card = document.getElementById('pac-card');
		  var input = document.getElementById('pac-input');
		  var autocomplete = new google.maps.places.Autocomplete(input);

		  autocomplete.bindTo('bounds', map);

		  autocomplete.setFields(
		      ['address_components', 'geometry', 'icon', 'name']);

		  var infowindow = new google.maps.InfoWindow();
		  var infowindowContent = document.getElementById('infowindow-content');
		  infowindow.setContent(infowindowContent);
		  var marker = new google.maps.Marker({
		    map: map,
		    anchorPoint: new google.maps.Point(0, -29)
		  });

		  autocomplete.addListener('place_changed', function() {
		    infowindow.close();
		    marker.setVisible(false);
		    var place = autocomplete.getPlace();
		    if (!place.geometry) {
		      window.alert("No details available for input: '" + place.name + "'");
		      return;
		    }
		  });
		}
	</script>

	<script defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCljUDzlrjbsdVaX_tXCmQH5oV1JEUnVeA&libraries=places&callback=initMap"></script>
</body>
</html>