<?php
class action {
	function doJob($item_no){
	$db = mysqli_connect('localhost:3306','root','','internship');
	echo "kapil";
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
					<h1><?php echo $org_name; ?></h1>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-2 col-xs-6">
					<h4>Location : </h4>
				</div>
				<div class="col-sm-3 col-xs-6">
					<h4>Internship Type : </h4>
				</div>
				<div class="col-sm-3 col-xs-6">
					<h4>Interview Location : </h4>
				</div>
				<div class="col-sm-2 col-xs-6">
					<h4>Duration : </h4>
				</div>
				<div class="col-sm-2 col-xs-6">
					<h4>Salary : </h4>
				</div>
			</div>
		</div>
		<?php
	}
}
}
?>