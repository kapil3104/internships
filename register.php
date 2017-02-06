
<?php
$DatabaseConnec = new DatabaseConnec();
if(isset($_POST['register'])) {
    $check=$DatabaseConnec->registerUser($_POST['name'],$_POST['email'],$_POST['pass'],$_POST['mob_no']);
    $var1 = '<div class="alert alert-success" role="alert">
        <strong>Well done!</strong> You have successfully registered.
      </div>';
    if($check) {
      echo $var1;
      unset($_POST);
    } else {
      echo '<div class="alert alert-danger" role="alert">
        <strong>Oh snap!</strong> Change a few things up and try submitting again.
      </div>';
    }
}
?>

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