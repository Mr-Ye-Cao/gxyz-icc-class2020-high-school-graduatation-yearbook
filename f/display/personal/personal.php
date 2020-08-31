<?php
  session_start();
  if(!((isset($_SESSION['LoggedIn'])&&$_SESSION['LoggedIn']) || $_GET['profile']=== 'Peter')) {
    header("Location: ../../sign.php?error=Sorry, you have to register a membership to access the content of 2020 family board.");
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <link rel="shortcut icon" href="../Logo.png" type="image/x-icon">
  <title><?php $name = $_GET['profile']; echo $name; ?></title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <?php
      require "../../../inc/db.php";
                          
      $sql = "SELECT words, facebook, instagram, wechat, email, gender FROM users WHERE name='${name}';";

      $result = $conn->query($sql);
      $row = $result->fetch_assoc();

      $words = $row["words"];
      $facebook = $row["facebook"];
      $instagram = $row["instagram"];
      $wechat = $row["wechat"];
      $email = $row["email"];
      $gender = $row['gender'];
  ?>

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,700i|Playfair+Display:400,400i,500,500i,600,600i,700,700i,900,900i" rel="stylesheet">

  <link href="assets/vendor/ionicons/css/ionicons.min.css" rel="stylesheet">
  
  <!--Start News-->
  <script src="./comment/jquery-1.11.1.min.js"></script>
  <link href="./comment/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="./comment/bootstrap.min.js"></script>
  <!--End News-->

 <link href="assets/css/style.css" rel="stylesheet">
 <link rel="stylesheet" type="text/css" href="./comment/comment.css">

  <style type="text/css">
    #hero {
        background: url("<?php  $d='../../uploads/'.$name.'/';
                                $photo = scandir($d,1)[1];
                                $imgurl = $d.$photo;
                                echo $imgurl;
                        ?>") repeat scroll center center/cover;
        height: 100vh;
        width: 100%;
    }
                        
    .text-light{
        color:#f8f9fa;
    }
                        
    #main-nav{
      <?php
        if($gender == 'Male'){
          echo "background-color:#d39e00;";
        }else{
          echo "background-color:#f8f9fa;";
        }
      ?>
    }

    #main-nav:hover{
       <?php
        if($gender == 'Male'){
          echo "background-color:#ffc107;";
        }else{

        }
      ?>
    }

    #about{
      <?php
        if($gender == 'Male'){
          echo "background-color:#17a2b8;";
        }else{
          echo "background-color:#ffc107;";
        }
      ?>
    }

    #journal{
      <?php
        if($gender == 'Male'){
          echo "background-color:#17a2b8;";
        }else{
          echo "background-color:#ffc107;";
        }
      ?>
    }
    #footer{
      <?php
        if($gender == 'Male'){
          echo "background-color:#1d2124;";
        }else{
          echo "background-color:#28a745";
        }
      ?>
    }
    #footer:hover{
      <?php
        if($gender == 'Male'){
          echo "background-color:#343a40;";
        }else{
          echo "background-color:#1e7e34;";
        }
      ?>
    }


  </style>
</head>

<body>

  <!-- ======= Navbar ======= -->
  <nav id="main-nav">
    <div class="row">
      <div class="container">

        <div class="logo">
          <h1><?php echo $name;?></h1>
        </div>

        <div class="responsive"><i data-icon="m" class="ion-navicon-round"></i></div>

        <ul class="nav-menu list-unstyled">
          <li><a href="../board.php" class="smoothScroll">Home</a></li>
          <li><a href="#about" class="smoothScroll">About</a></li>
          <li><a href="#portfolio" class="smoothScroll">Portfolio</a></li>
          <li><a href="#blog" class="smoothScroll">Blog</a></li>
          <li><a href="#footer" class="smoothScroll">Contact</a></li>
        </ul>

      </div>
    </div>
  </nav><!-- End Navbar -->

  <!-- ======= Hero Section ======= -->
  <div id="hero" class="home">

    <div class="container">
      <div class="hero-content">
        <h1> <span class="typed"></span></h1>
        <p class="typed-items" data-typed-person="<?php echo($name);?>"><?php
               echo($_GET['pro']);
        ?></p>


        <ul class="list-unstyled list-social">
          <li><a href="./account.php?a=facebook&i=<?php echo $facebook ?>"><i class="ion-social-facebook"></i></a></li>
          <li><a href="./account.php?a=instagram&i=<?php echo $instagram ?>"><i class="ion-social-instagram"></i></a></li>
          <li><a href="./account.php?a=email&i=<?php echo $email ?>"><i class="ion-social-googleplus"></i></a></li>
        </ul>
      </div>
    </div>
  </div><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <div id="about" class="paddsection">
      <div class="container">
        <div class="row justify-content-between">

          <div class="col-lg-4 ">
            <div class="div-img-bg">
              <div class="about-img">
                <img src="
                    <?php 
                      $d='../../uploads/'.$name.'/p/';
                      $photo = scandir($d,1)[0];
                      $imgurl = $d.$photo;
                      echo $imgurl;
                    ?>" 
                    class="img-responsive" alt="me">
              </div>
            </div>
          </div>

          <div class="col-lg-7" id="blog">
            <div class="about-descr">
              <h1>What do i have to say?</h1>
              <p class="text-light">
                <?php
                  echo $words;
                ?>
              </p>
            </div>

          </div>
        </div>
      </div>
    </div><!-- End About Section -->

        

    <!-- ======= Journal Section ======= -->
    <div id="journal" class="text-left paddsection">

      <div class="container" id="portfolio">
        <div class="section-title text-center">
          <h2>Moments</h2>
        </div>
      </div>

      <div class="container">
        <div class="journal-block">
          <div class="row">

            <div class="col-lg-4 col-md-6">
              <div class="journal-info">

               <img src="
                  <?php
                      $d='../../uploads/'.$name.'/';
                      $photo = scandir($d,1)[1];
                      $imgurl = $d.$photo;
                      echo $imgurl;
                  ?>" 
                      class="img-responsive" alt="img"
                />
                
              </div>
            </div>

            <div class="col-lg-4 col-md-6">
              <div class="journal-info">

                <img 
                  src=" 
                  <?php
                      $d='../../uploads/'.$name.'/';
                      $photo = scandir($d,1)[2];
                      $imgurl = $d.$photo;
                      echo $imgurl;
                  ?>"  
                  class="img-responsive" alt="img"
                />

              </div>
            </div>

            <div class="col-lg-4 col-md-6">
              <div class="journal-info">

                <img 
                  src="
                  <?php
                      $d='../../uploads/'.$name.'/';
                      $photo = scandir($d,1)[3];
                      $imgurl = $d.$photo;
                      echo $imgurl;
                  ?>" 
                  class="img-responsive" alt="img"
                />
              </div>
            </div>

          </div>
        </div>
      </div>

    </div><!-- End Journal Section -->


  <div style="background-color: #dff0d8;">
    <div class="container">
      <div class="post-comments">

        <form method="POST" action='../../../inc/co.php?v=<?php echo "${name}" ?>&p=<?php echo "${_GET['pro']}" ?>'>
          <div class="form-group">
            <input type="checkbox" name="isAno">
            <label for="comment">Check here if you want to post Anonymously</label>
            <textarea name="comment" class="form-control" style='text-transform: none;'  rows="3"></textarea>
          </div>
          <button type="submit" class="btn btn-default">Send</button>
        </form>

        <div class="row" style="margin-top: 0.5cm">

          <!--           
          <div class="media">
            <div class="media-heading">
                <span class="label label-info">Terminator</span>
            </div>
            <div class="panel-collapse collapse in" id="collapseOne">
              <div class="media-body">
                <p>yazmayın artık amk, görmeyeyim sol framede. insan bi meraklanıyor, ümitleniyor. sonra yine özlem dolu yazıları görüp hayal kırıklığıyla okuyorum.</p>
              </div>
            </div>
          </div>
          -->


          <?php                                
            $sql = "SELECT comm FROM com WHERE name='${name}';";

            $result = $conn->query($sql);
            $row = $result->fetch_assoc();

            $c = $row['comm'];

            $ar = explode('<Finish>', $c);

            for ($i=0; $i < count($ar)-1; $i++) {
              $part = explode('<say>', $ar[$i]);
              echo 
              "
                <div class='media'>
                  <div class='media-heading'>
                      <span class='label label-info'> ${part[0]}</span>
                  </div>
                  <div class='panel-collapse collapse in' id='collapseOne'>
                    <div class='media-body'>
                      <p>${part[1]}</p>
                    </div>
                  </div>
                </div>
              ";            
            }            
          ?>

      </div>
  </div>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <div id="footer" class="text-center">
    <div class="container">
      <div class="socials-media text-center">
        <ul class="list-unstyled">
          <li><a href="./account.php?a=facebook&i=<?php echo $facebook ?>"><i class="ion-social-facebook"></i></a></li>
          <li><a href="./account.php?a=instagram&i=<?php echo $instagram ?>"><i class="ion-social-instagram"></i></a></li>
          <li><a href="./account.php?a=email&i=<?php echo $email ?>"><i class="ion-social-googleplus"></i></a></li>
        </ul>
      <li><a href="./account.php?a=wechat&i=<?php echo $wechat ?>">What is my Wechat Number?<i class="ion-social-wechat"></i></a></li>
      </div>
    </div>
  </div><!-- End Footer -->

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/typed/typed.js"></script>
  <script src="assets/vendor/jquery-sticky/jquery.sticky.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
