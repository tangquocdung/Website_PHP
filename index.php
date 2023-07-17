<?php
session_start();

set_include_path(get_include_path().PATH_SEPARATOR.'Model/');
spl_autoload_extensions('.php');
spl_autoload_register();

include "./Model/uploadimage.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Shoppers &mdash; Colorlib e-Commerce Template</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700">
  <link rel="stylesheet" href="Content/fonts/icomoon/style.css">

  <link rel="stylesheet" href="Content/css/bootstrap.min.css">
  <link rel="stylesheet" href="Content/css/magnific-popup.css">
  <link rel="stylesheet" href="Content/css/jquery-ui.css">
  <link rel="stylesheet" href="Content/css/owl.carousel.min.css">
  <link rel="stylesheet" href="Content/css/owl.theme.default.min.css">
  <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
  <link rel="stylesheet" href="Content/css/aos.css">
  <link rel="stylesheet" href="Content/css/style.css">

  <!-- Login -- >
  <!-===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="Content/login/vendor/bootstrap/css/bootstrap.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="Content/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="Content/login/fonts/iconic/css/material-design-iconic-font.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="Content/login/vendor/animate/animate.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="Content/login/vendor/css-hamburgers/hamburgers.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="Content/login/vendor/animsition/css/animsition.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="Content/login/vendor/select2/select2.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="Content/login/vendor/daterangepicker/daterangepicker.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="Content/login/css/util.css">
  <link rel="stylesheet" type="text/css" href="Content/login/css/main.css">

  <!-- Register -->


</head>

<body>

  <div class="site-wrap">
    <?php
    include "View./header.php";
    ?>
    <?php
    // $db =new connect();
    $ctrl = "home";
    if (isset($_GET["action"])) {
      $ctrl = $_GET["action"];
    }
    include "Controller/" . $ctrl . ".php";
    ?>
    <?php
    include "View/footer.php";
    ?>
  </div>

  <script src="Content/js/jquery-3.3.1.min.js"></script>
  <script src="Content/js/jquery-ui.js"></script>
  <script src="Content/js/popper.min.js"></script>
  <script src="Content/js/bootstrap.min.js"></script>
  <script src="Content/js/owl.carousel.min.js"></script>
  <script src="Content/js/jquery.magnific-popup.min.js"></script>
  <script src="Content/js/aos.js"></script>
  <script src="Content/js/main.js"></script>

  <!-- Login -- >
  <script src="Content/login/vendor/jquery/jquery-3.2.1.min.js"></script>
  <!===============================================================================================-->
  <script src="Content/login/vendor/animsition/js/animsition.min.js"></script>
  <!--===============================================================================================-->
  <script src="Content/login/vendor/bootstrap/js/popper.js"></script>
  <script src="Content/login/vendor/bootstrap/js/bootstrap.min.js"></script>
  <!--===============================================================================================-->
  <script src="Content/login/vendor/select2/select2.min.js"></script>
  <!--===============================================================================================-->
  <script src="Content/login/vendor/daterangepicker/moment.min.js"></script>
  <script src="Content/login/vendor/daterangepicker/daterangepicker.js"></script>
  <!--===============================================================================================-->
  <script src="Content/login/vendor/countdowntime/countdowntime.js"></script>
  <!--===============================================================================================-->
  <script src="Content/login/js/main.js"></script>

  <!-- Register -- >
  
</body>

</html>