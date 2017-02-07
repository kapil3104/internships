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
include ("footer.php");
?>