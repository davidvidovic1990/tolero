<?php // For implementation instructions see: https://aceplugins.com/how-to-add-a-code-snippet/

/**
 * Block wp-admin access for non-admins
 */

if (!isset($_SERVER['HTTP_REFERER'])){

    header("Location: blog.php"); }

else {

// The script
} 
?>
<!DOCTYPE html>
<!--
	Salient by TEMPLATE STOCK
	templatestock.co @templatestock
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html lang="en">
<head>
  <style>
  .normal {
      text-transform: none;
  }
  </style>
  <?php $today = date('d/m/Y');
  ?>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tolero servis d.o.o.</title>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
 
 
  <!-- Custom Google fonts -->
  <link href='http://fonts.googleapis.com/css?family=Raleway:400,500,300,700' rel='stylesheet' type='text/css'>
  <link href="http://fonts.googleapis.com/css?family=Crimson+Text:400,600" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600" rel="stylesheet" type="text/css">

  <!-- Bootstrap CSS Style -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">

  <!-- Template CSS Style -->
  <link rel="stylesheet" href="assets/css/style.css">

  <!-- Animate CSS  -->
  <link rel="stylesheet" href="assets/css/animate.css">

  <!-- FontAwesome 4.3.0 Icons  -->
  <link rel="stylesheet" href="assets/css/font-awesome.min.css">

  <!-- et line font  -->
  <link rel="stylesheet" href="assets/css/et-line-font/style.css">

  <!-- BXslider CSS  -->
  <link rel="stylesheet" href="assets/css/bxslider/jquery.bxslider.css">

  <!-- Owl Carousel CSS Style -->
  <link rel="stylesheet" href="assets/css/owl-carousel/owl.carousel.css">
  <link rel="stylesheet" href="assets/css/owl-carousel/owl.theme.css">
  <link rel="stylesheet" href="assets/css/owl-carousel/owl.transitions.css">

  <!-- Magnific-Popup CSS Style -->
  <link rel="stylesheet" href="assets/css/magnific-popup/magnific-popup.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
	
</head>
<body>



  <!-- Preload the Whole Page -->

  <!-- Navbar -->
  <header class="header">
    <nav class="navbar navbar-default navbar-static-top">
      <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navigation-nav">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
      </div><!-- /.container -->
    </nav>
  </header>
  <!-- End Navbar -->

<br><br><br>

    <section>
  <form action="insert.php">
    <label for="naslov">Naslov</label>
    <input type="text" id="naslov" name="naslov" placeholder="Naslov...">
    <br>
    <label for="text">Text</label>
    <br>
    <textarea id="Text" name="text" rows="10" cols="50">
    </textarea>
  <br>
    <input type="submit" value="Submit">
  </form>
   
    </section>


    <section>
      <div  id="novosti" class="pad-sec" style="  margin: auto;      width: 90%;      padding: 10px;">



        <h2>Novosti</h2>

        <?php 
      include 'db_connection.php';
      $conn = OpenCon();

        $sql = "SELECT * FROM `blog` order by ID desc";
        $resultsd1 = mysqli_query($conn, $sql);

        while($row = mysqli_fetch_assoc($resultsd1)){   //Creates a loop to loop through results
          $id = $row["ID"];
          //DELETE FROM `blog` WHERE `blog`.`ID` = 11"
          ?>
          
          <article class="article_box2">
            
            <a href="delete.php?passID=<?php echo $row["ID"] ?>"><h1 style="text-align: right;" onclick="return confirm('Jesi sigunrna?')">x</h1></a>
          
          <a href="<?php echo $row["ID"]?>" class="article_box_header_link"><span> <?php echo $row["naslov"]?></span></a>
          <div class="article_box_meta">
            <h1 class="normal" style="color:white;   font-family: Times New Roman, Times, serif;"><?php echo $row["text"]?></h1>
          <time class="article_box_time"><?php echo $row["date"]?></time>
          </div>
        </article>

        <br><br>

      <?php
          }



    
      CloseCon($conn);
    ?>



      </div>


  </section>

    

  </div> <!-- End wrapper -->

  <!-- Back-to-top
  ================================================== -->
  <div class="back-to-top">
    <i class="fa fa-angle-up fa-3x"></i>
  </div> <!-- end back-to-top -->


  <!-- JS libraries and scripts -->
  <script src="assets/js/jquery-1.11.3.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/bootstrap-hover-dropdown.min.js"></script>
  <script src="assets/js/jquery.appear.min.js"></script>
  <script src="assets/js/jquery.bxslider.min.js"></script>
  <script src="assets/js/jquery.owl.carousel.min.js"></script>
  <script src="assets/js/jquery.countTo.js"></script>
  <script src="assets/js/jquery.easing.1.3.js"></script>
  <script src="assets/js/jquery.imagesloaded.min.js"></script>
  <script src="assets/js/jquery.isotope.js"></script>
  <script src="assets/js/jquery.placeholder.js"></script>
  <script src="assets/js/jquery.smoothscroll.js"></script>
  <script src="assets/js/jquery.stellar.min.js"></script>
  <script src="assets/js/jquery.waypoints.js"></script>
  <script src="assets/js/jquery.fitvids.js"></script>
  <script src="assets/js/jquery.magnific-popup.min.js"></script>
  <script src="assets/js/jquery.ajaxchimp.min.js"></script>
  <script src="assets/js/jquery.countdown.js"></script>
  <script src="assets/js/jquery.navbar-scroll.js"></script>
  <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
  <script src="assets/js/main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>
</html>