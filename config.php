
<?php
class DatabaseConnec {

	function checkUser($email,$pass){
		$db = mysqli_connect('localhost:3306','root','','internship');
		$query="SELECT * FROM users WHERE email='".$email."' and pass='".md5($pass)."'";
		$result=mysqli_query($db,$query);
		$count = mysqli_num_rows($result);
		$ans=FALSE;
		if($count == 1) { 
		   		$ans=TRUE;
		}else {
		    $ans=FALSE;
		}
		return $ans;
	}

	function registerUser($name,$email,$pass,$mob_no){
		$db = mysqli_connect('localhost:3306','root','','internship');
		$query = "INSERT INTO users(email,name,pass,mob_no) VALUES ('".$email."','".$name."','".md5($pass)."','".$mob_no."')";
		$result = mysqli_query($db,$query);
		return $result;
	}

	function registerIntern($org_name,$location,$type_of_intern,$int_location,$duration,$salary,$content){
		$db = mysqli_connect('localhost:3306','root','','internship');
		$query="INSERT into available_internship (org_name,location,type,interview_type,duration,salary,content) values ('".$org_name."','".$location."','".$type_of_intern."','".$int_location."','".$duration."','".$salary."','".$content."')";
		$result = mysqli_query($db,$query);
		return $result;
	}
}
?>