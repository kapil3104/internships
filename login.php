
<?php
$DatabaseConnec = new DatabaseConnec();
if(isset($_POST['login'])) {
  $check=$DatabaseConnec->checkUser($_POST['email'],$_POST['pass']);
  if($check) {       
    if(!isset($_SESSION['userid']))
    {
      $_SESSION['userid']=$_POST['email']; 
      header("location: index.php");
     }
    else if(isset($_SESSION['userid'])) {

    }
    }else {
    }
}
?>

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