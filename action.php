
<?php
class action {
	function doJob($item_no){
	$db = mysqli_connect('localhost:3306','root','','internship');
	$query = "SELECT * FROM available_internship WHERE id_no=".$item_no;
	$result = mysqli_query($db,$query);
	while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
		$org_name=$row['org_name'];
		$location = $row['location'];
		$type = $row['type'];
		$location_int = $row['interview_type'];
		$duration = $row['duration'];
		$salary = $row['salary'];
		$content = $row['content'];
		?>
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-xs-12">
					<h1><b><?php echo $org_name; ?></b></h1>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-2 col-xs-6">
					<div class="row">
						<h4><b>Location : </b></h4>
					</div>
					<div class="row">
						<h4><?php echo $location; ?></h4>
					</div>
				</div>
				<div class="col-sm-3 col-xs-6">
					<div class="row">
						<h4><b>Internship Type : </b></h4>
					</div>
					<div class="row">
						<h4><?php echo $type; ?></h4>
					</div>
				</div>
				<div class="col-sm-3 col-xs-6">
					<div class="row">
						<h4><b>Interview Location : </b></h4>
					</div>
					<div class="row">
						<h4><?php echo $location_int; ?></h4>
					</div>
				</div>
				<div class="col-sm-2 col-xs-6">
					<div class="row">
						<h4><b>Duration : </b></h4>
					</div>
					<div class="row">
						<h4><?php echo $duration; ?></h4>
					</div>
				</div>
				<div class="col-sm-2 col-xs-6">
					<div class="row">
						<h4><b>Salary : </b></h4>
					</div>
					<div class="row">
						<h4><?php echo $salary; ?></h4>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<h4><b>Content : </b></h4>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<?php echo $content; ?>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<p id="apply_btn">
          				<a class="btn btn-lg btn-primary" href="" role="button" style="margin-top: 50px;">Apply Now &raquo;</a>
        			</p>
				</div>
			</div>
		</div>
		<?php
	}
}
}
?>