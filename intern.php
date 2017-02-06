
<?php
$db = mysqli_connect('localhost:3306','root','','internship');
if(isset($_POST['submit_reg'])){
	$query2="INSERT into available_internship (org_name,location,type,interview_type,duration,salary,content) values ('".$_POST['org_name']."','".$_POST['location']."','".$_POST['type_of_intern']."','".$_POST['int_location']."','".$_POST['duration']."','".$_POST['salary']."','".$_POST['content']."')";
	$result2 = mysqli_query($db,$query2);
  if($result2){
  	$_SESSION['form_success']=true;
  	unset($_SESSION['add_intern']);
  	echo '<div class="alert alert-success" role="alert">
          <strong>Congratulations !!.</strong> You have registered your internship.
        </div>' ;
  }
}
?>


<?php
class intern {
	function work(){
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
	function add_intern(){
		$db = mysqli_connect('localhost:3306','root','','internship');
		?>
		<div class="container">
			<div class="row">
		        <div class="col-md-6">
		            <form action="" method="post" id="fileForm" role="form">
		            <fieldset><legend class="text-center">Add Internship Form. <span class="req"><small> required *</small></span></legend>

		            <div class="form-group">
		            <label for="name_of_org"><span class="req">* </span> Name of Company/Organisation: </label>
		                    <input required type="text" name="org_name" id="name_of_org" class="form-control" placeholder="Enter name of your Organisation or Company"/> 
		            </div>

		            <div class="form-group"> 	 
		                <label for="location"><span class="req">* </span> Location:</label>
		                    <input class="form-control" type="text" name="location" id = "txt" /> 
		                        <div id="errFirst"></div>    
		            </div>

		            <div class="form-group">
		                <label for="type"><span class="req">* </span> Type : </label> 
		                    <input class="form-control" type="text" name="type_of_intern" id = "type_of_inter"  placeholder="Remote or Regular" required />  
		                        <div id="errLast"></div>
		            </div>

		            <div class="form-group">
		                <label for="int_location"><span class="req">* </span> Interview Location </label> 
		                    <input class="form-control" required type="text" name="int_location" id = "int_location"   />   
		                        <div class="status" id="status"></div>
		            </div>

		            <div class="form-group">
		                <label for="username"><span class="req">* </span> Duration :  <small>This will be your login user name</small> </label> 
		                    <input class="form-control" type="text" name="duration" id = "duration"  placeholder="minimum 6 letters" required />  
		                        <div id="errLast"></div>
		            </div>

		            <div class="form-group">
		                <label for="password"><span class="req">* </span> Salary : </label>
		                    <input class="form-control" name="salary" type="text"  id="salary" /> </p>

		                <label for="password"><span class="req">* </span> Content </label>
		                    <textarea class="form-control" name="content" id="content" style="width: 100%; height: 100px;"></textarea>
		                        <span id="confirmMessage" class="confirmMessage"></span>
		            </div>

		            <div class="form-group">
		            
		                <?php //$date_entered = date('m/d/Y H:i:s'); ?>
		                <input type="hidden" value="<?php //echo $date_entered; ?>" name="dateregistered">
		                <input type="hidden" value="0" name="activate" />
		                <hr>

		                <input type="checkbox" required name="terms" onchange="this.setCustomValidity(validity.valueMissing ? 'Please indicate that you accept the Terms and Conditions' : '');" id="field_terms">   <label for="terms">I agree with the <a href="terms.php" title="You may read our terms and conditions by clicking on this link">terms and conditions</a> for Registration.</label><span class="req">* </span>
		            </div>

		            <div class="form-group">
		                <input class="btn btn-success" type="submit" name="submit_reg" value="Register">
		            </div>
		                      <h5>You will receive an email to complete the registration and validation process. </h5>
		                      <h5>Be sure to check your spam folders. </h5>
		 

		            </fieldset>
		            </form><!-- ends register form -->

		<script type="text/javascript">
		  document.getElementById("field_terms").setCustomValidity("Please indicate that you accept the Terms and Conditions");
		</script>
		        </div><!-- ends col-6 -->
		   
		            <div class="col-md-6">
		                <div id="myCarousel" class="carousel slide" data-ride="carousel">
      					<!-- Indicators -->
					      <ol class="carousel-indicators">
					        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					        <li data-target="#myCarousel" data-slide-to="1"></li>
					        <li data-target="#myCarousel" data-slide-to="2"></li>
					      </ol>
					      <div class="carousel-inner" role="listbox">
					        <div class="item active">
					          <img class="first-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="First slide">
					          <div class="container">
					            <div class="carousel-caption">
					              <h1>Example headline.</h1>
					              <p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
					              <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
					            </div>
					          </div>
					        </div>
					        <div class="item">
					          <img class="second-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Second slide">
					          <div class="container">
					            <div class="carousel-caption">
					              <h1>Another example headline.</h1>
					              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
					              <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
					            </div>
					          </div>
					        </div>
					        <div class="item">
					          <img class="third-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Third slide">
					          <div class="container">
					            <div class="carousel-caption">
					              <h1>One more for good measure.</h1>
					              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
					              <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
					            </div>
					          </div>
					        </div>
					      </div>
					      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
					        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					        <span class="sr-only">Previous</span>
					      </a>
					      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
					        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					        <span class="sr-only">Next</span>
					      </a>
					    </div><!-- /.carousel -->
		                
		            </div>

			</div>
		</div>
<?php
	}
}
?>