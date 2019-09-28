<?php 
include('connection.php');
if (isset($_POST['submit'])) {
	$stu_name = $_POST['stuName'];
	$stu_gender = $_POST['gender'];
	$stu_Econ = $_POST['secon'];
	$stu_Acc = $_POST['saccount'];
	$stu_Bussi = $_POST['sBussiness'];

	$sql = "INSERT INTO stu(stu_name,gender,econ,accounting,bussiness)VALUES('$stu_name','$stu_gender','$stu_Econ','$stu_Acc','$stu_Bussi')";
	$result = mysqli_query($con,$sql);
	if ($result) {
		echo "<script>alert('Successfully Added')</script>";
		echo "<script>window.open('index.php','_self')</script>";
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Full Crud</title>
</head>
<body>
	<h4 class="text-info" style="text-align: center;font-weight: bold;">Student information</h4>
	<div class="container" style="width: 50%;border: 2px solid green;padding: 30px;">
		<form name="StudentForm" method="post">
			<div class="form-group">
				<div class="col-md-6">
				<label>Student Name</label>
				<input type="text" name="stuName" class="form-control">
				</div>
				<div class="col-md-6">
					<label>Gender</label>
					<select class="form-control" name="gender">
						<option value="M">Male</option>
						<option value="F">Female</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<div class="col-md-4">
					<label>Econ</label>
					<input type="number" name="secon" class="form-control">
				</div>
				<div class="col-md-4">
					<label>Accounting</label>
					<input type="number" name="saccount" class="form-control">
				</div>
				<div class="col-md-4">
					<label>Bussiness</label>
					<input type="number" name="sBussiness" class="form-control">
				</div>
			</div>
			<div class="form-group">
				<input type="submit" name="submit" class="btn btn-success" value="Add" style="width: 100%;height: 40px;margin-top: 20px;">
			</div>
			<table class="table table-responsive table-hover">
				<?php
						$sql2 = "SELECT * stu";
						$result2 = mysqli_query($con,$sql2);
						while ($row = mysqli_fetch_array($result2)) {
									<td>"$row[]"</td>
							}		
				?>
				<tr>
					<th>Student Id</th>
					<th>Student Name</th>
					<th>Student Gender</th>
					<th>Econ</th>
					<th>Accounting</th>
					<th>Bussiness</th>
				</tr>
				<tr>

				</tr>
			</table>
		</form>
	</div>
</body>
</html>