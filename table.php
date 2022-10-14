<?php  

use App\Controllers\Teacher;

include_once "./vendor/autoload.php";
$teacher=new Teacher;


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Development Area</title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>
	
	

	<div class="wrap-table shadow">
		<a href="./index.php" class="btn btn-primary mb-3">Add New Teacher</a>
		<div class="card">
			<div class="card-body">
				<h2>All Data</h2>
				<table class="table table-striped">
					<thead>
						<tr>
							<th>#</th>
							<th>Name</th>
							<th>Email</th>
							<th>Cell</th>
							<th>Photo</th>
							<th class="w-25 text-center">Action</th>
						</tr>
					</thead>
					<tbody>
						<?php  
						
						 $data=$teacher->showAllTeacher();
						 $i=1;
						 while($data_teacher=$data->fetch_object()):
						
						
						
						?>
						<tr>
							<td><?php echo $i;$i=$i+1; ?></td>
							<td><?php echo $data_teacher->name; ?></td>
							<td><?php echo $data_teacher->email; ?></td>
							<td><?php echo $data_teacher->cell ?></td>
							<td><img src="./media/<?php echo $data_teacher->image; ?>" alt=""></td>
							<td>
								<a class="btn btn-sm btn-info" href="#">View</a>
								<a class="btn btn-sm btn-warning" href="#">Edit</a>
								<a class="btn btn-sm btn-danger" href="#">Delete</a>
							</td>
						</tr>
                     <?php  
					 endwhile;
					 ?>
						

					</tbody>
				</table>
			</div>
		</div>
	</div>
	







	<!-- JS FILES  -->
	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>
</body>
</html>