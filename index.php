<?php 

   use App\Controllers\Teacher;

//    use App\Controllers\Staff;

   include_once "./vendor/autoload.php";

   $teacher=new Teacher;

?>


<DOCTYPE html>
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
	<?php
     if(isset($_POST['add'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $cell=$_POST['cell'];
		$file_name='';
        if(!empty($_FILES['image']['name'])){
			$file=$_FILES['image'];
            $file_name=time(). '_'.rand(). '_'.$file['name'];
			$file_tmp=$file['tmp_name'];
			$file_size=$file['size'];
			move_uploaded_file($file_tmp,'media/'.$file_name);
			
		 }
         $teacher->createNewTeacher($name,$email,$cell,$file_name);
     }




    ?>
	

	<div class="wrap shadow">
    <a href="./table.php" class="btn btn-primary mb-3">All Teacher</a>



		<div class="card">
			<div class="card-body">
				<h2>Sign Up</h2>
				<form action="" method="POST" enctype="multipart/form-data">
					<div class="form-group">
						<label for="">Name</label>
						<input class="form-control" name="name" type="text">
					</div>
					<div class="form-group">
						<label for="">Email</label>
						<input class="form-control" name="email" type="text">
					</div>
					<div class="form-group">
						<label for="">Cell</label>
						<input class="form-control" name="cell" type="text">
					</div>
					<div class="form-group">
						<label for="">Image</label>
						<input class="form-control" name="image" type="file">
					</div>
					<div class="form-group">
						<input class="btn btn-primary" type="submit" name="add" value="Sign Up">
					</div>
				</form>
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