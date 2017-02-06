
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">.
    <title>SEEKERS for internship</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="dist/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="dist/css/navbar.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="dist/js/ie-emulation-modes-warning.js"></script>
  </head>
  <body style="padding-top: 0px;">
    <div class="container-fluid">
      <!-- Header Of The Page -->
      <?php
      include ("config.php"); ?>
      <?php include ("header.php"); ?>

      <?php
        include ("intern.php");
        include ("action.php");
        $action = new action();
        $intern = new intern();
        if(isset($_GET['add_intern'])){
          if($_GET['add_intern']=="true"){
            $intern->add_intern();
          }          
        }
        else if(isset($_GET['work'])) {
          if($_GET['work']=="true") {
            $intern->work();
          }
        }
        else if(isset($_GET['id'])){
          $action->doJob($_GET['id']);
        }
        else {
          $intern->work();
        }
      ?>

    </div> <!-- /container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="dist/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="dist/js/ie10-viewport-bug-workaround.js"></script>
    <script src="dist/js/form.js"></script>
  </body>
</html>
