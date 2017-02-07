<?php
session_start();
include ("header.php");
include ("intern.php");
include ("action.php");
$action = new action();
$intern = new intern();
if(isset($_GET['add_intern'])){
  if($_GET['add_intern']=="true"){
    $intern->add_intern();
  }          
}
else if(isset($_GET['id'])){
  // $_SESSION['id']=$_GET['id'];
  // $action->doJob($_GET['id']);
  $idd=$_GET['id'];
  header("location:get_details.php?id=".$idd);
}
else {
  $db = mysqli_connect('localhost:3306','root','','internship');
  $query1="SELECT * FROM available_internship";
  $result=mysqli_query($db,$query1);
  while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
    $orgname=$row['org_name'];
    $content=$row['content'];
    $item_id=$row['id_no'];
    ?><div class="jumbotron">
    <h1><?php echo $orgname ?></h1>
    <p><?php echo $content ?></p>
    <p id="details_btn">
    <a class="btn btn-lg btn-primary" onclick="<?php unset($_SESSION['work']); ?>" href="index.php?id=<?php echo $item_id; ?>" role="button">View Details &raquo;</a>
    </p>
    </div>
  <?php
  }
}
include ("footer.php");
?>

    
