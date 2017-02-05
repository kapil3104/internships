
<?php
session_start();
if(isset($_GET['add_intern'])){
  if($_GET['add_intern']=="false"){
    session_destroy();
    session_start();
  }
  else {
    $_SESSION['add_intern']=$_GET['add_intern'];
  }
}
if(isset($_GET['userid'])){
  if($_GET['userid']=="false"){
    unset($_SESSION['userid']);
  }
  else {

  }
}
$db = mysqli_connect('localhost:3306','root','','internship');
if(isset($_POST['register'])) {
    $query = "INSERT INTO users (email, name, pass, mob_no) VALUES
    ('" . $_POST['email'] . "', '" . $_POST['name'] . "', '" . md5($_POST['pass']) . "', '" . $_POST['mob_no'] . "')";
    $result = mysqli_query($db,$query);
    $var1 = '<div class="alert alert-success" role="alert">
        <strong>Well done!</strong> You have successfully registered.
      </div>';
    if($result) {
      echo $var1;
      unset($_POST);
    } else {
      echo '<div class="alert alert-danger" role="alert">
        <strong>Oh snap!</strong> Change a few things up and try submitting again.
      </div>';
    }
}
else if(isset($_POST['login'])) {
  $query = "SELECT name FROM users WHERE email = '".$_POST['email']."' and pass = '".md5($_POST['pass'])."'";
  $result = mysqli_query($db,$query);
  $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
  $count = mysqli_num_rows($result);
  if($count == 1) {       
    if(!isset($_SESSION['userid']))
    {
      $_SESSION['userid']=$_POST['email']; 
      echo '<div class="alert alert-success" role="alert">
          <strong>Welcome back '.$_POST['email'].'.</strong> You have successfully logged in.
        </div>' ;
     }
    else if(isset($_SESSION['userid'])) {

    }
    }else {
         echo '<div class="alert alert-danger" role="alert">
        <strong>Oh snap! '.$_POST['email'].'</strong> does not registered. Please register first
      </div>';
    }
}

?>


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

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container-fluid">
      <!-- Static navbar -->
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php"><h1 id="logo_title">SEEKERS</h1></a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li ><a href="index.php?add_intern=false">Home</a></li>
              <li><a href="#">About</a></li>
              <li><a href="#">Contact</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
            <?php
                          if(isset($_SESSION['userid'])){

                            echo $_SESSION['userid'];
                        ?>
              <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Account Panel <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="index.php?add_intern=active" >Submit advertisement for internship</a></li>
                <li><a href="#">Account Settings</a></li>
                <li><a href="index.php?userid=false">Logout</a></li>
              </ul>
            </li>

              <?php
                } else{
              ?>

              <li><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Log In</button>

                <!-- Modal -->
                <div class="modal fade" id="myModal" role="dialog">
                  <div class="modal-dialog">
                  
                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Log In</h4>
                      </div>
                      <div class="modal-body">
                        <form id="login1" method="post" action="">
                          <input type="text" name="email" placeholder="Email" />
                          <br />
                          <input type="password" name="pass" placeholder="Password" />
                          <br />
                      </div>
                      <div class="modal-footer">
                        <button type="submit" name="login" value="Submit" class="btn btn-default" >LogIn</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>
                      </form>
                    </div>
                    
                  </div>
                </div>
                </li>
                <li><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal2">Register</button>

                <!-- Modal -->
                <div class="modal fade" id="myModal2" role="dialog">
                  <div class="modal-dialog">
                  
                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Registration</h4>
                      </div>
                      <div class="modal-body">
                        <form id="register" method="post" action="">
                          <input type="text" name="name" placeholder="Full name" />
                          <br />
                          <input type="text" name="email" placeholder="Email" />
                          <br />
                          <input type="text" name="mob_no" placeholder="Mobile Number" />
                          <br />
                          <input type="password" name="pass" placeholder="Password" />
                          <br />
                      </div>
                      <div class="modal-footer">
                        <button type="submit" name="register" class="btn btn-default" >Register</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>
                        </form>
                    </div>
                    
                  </div>
                </div>
                </li>
                <?php
                  }
              ?>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>

      <?php
        include ("intern.php");
        $intern = new intern();
        if(isset($_SESSION['add_intern'])){
          if($_SESSION['add_intern']=="active"){
            $intern->add_intern();
          }
          else {
            $intern->work();
          }
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
