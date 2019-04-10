<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<script type="text/javascript" src="lib/bootstrap-datepicker.js"></script>
	<link rel="stylesheet" type="text/css" href="lib/bootstrap-datepicker.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Bitter:700|Merriweather:700" rel="stylesheet">

	<script>
		$(function(){
			$('.dates #user1').datepicker({
				'format':'yyyy-mm-dd',
				'autoclose' : true
			});
		});
	</script>

</head>
<body>

	<!-- Navbar -->
	<nav class="navbar navbar-expand-lg sticky-top navbar-dark bg-primary">
	  <a class="navbar-brand" href="admin-panel.php"><i class="fas fa-prescription" aria-hidden="true"></i><strong>  General Hospital</strong></a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">
	      <li class="nav-item">
	        <a class="nav-link" href="admin-panel.php"><i class="fas fa-user" aria-hidden="true"></i>  Patients</a>
	      </li>
	      <li class="nav-item active">
	        <a class="nav-link" href="admin-panel-doctor.php"><i class="fas fa-user-md" aria-hidden="true"></i>  Doctors <span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="admin-panel-staff.php"><i class="fas fa-user-plus" aria-hidden="true"></i>  Staff</a>
	      </li>
	    </ul>
	    <ul class="nav navbar-nav navbar-right">
			<li><a class="nav-link" href="about.php"><i class="fas fa-user-circle" aria-hidden="true"></i>  About</a></li>
			<li><a class="nav-link" href="index.php"><i class="fas fa-sign-out-alt" aria-hidden="true"></i>  Logout</a></li>
		</ul>
	  </div>
	</nav>

	<!-- Jumbotron -->
	<div class="jumbotron" style="background: url(Images/4.png) no-repeat; height: 250px; background-size: cover">
		<h1><i class="fas fa-hospital"></i> GENERAL HOSPITAL</h1>
		<p>You Trust, We Care</p>
	</div>
	<div class="container-fluid" style="margin: 25px auto 50px auto;">
		<div class="row">
			<div class="col-md-3">
				<div class="list-group">
					<a href="admin-panel-doctor.php" class="list-group-item list-group-item-action active">Add Doctor</a>
					<a href="doctor_details.php" class="list-group-item list-group-item-action">Doctor Details</a>
				</div>
			</div>
			<div class="col-md-9">
				<div class="card">
					<div class="card-body" style="background-color: #007BFF; color: #FFFFFF;">
						<h3>Add New Doctor</h3>
					</div>
					<div class="card-body">
						<form class="form-group" action="func.php" method="post">
							<div class="row">

								<!-- First Name -->

								<div class="col-md-4">
									<label>First Name :</label>
								</div>
								<div class="col-md-8">
									<input type="text" name="fname" class="form-control" required="">
								</div><br><br>

								<!-- Last Name -->
								<div class="col-md-4">
									<label>Last Name :</label>
								</div>
								<div class="col-md-8">
									<input type="text" name="lname" class="form-control" required="">
								</div><br><br>

								<!-- Email -->
								<div class="col-md-4">
									<label>Email ID :</label>
								</div>
								<div class="col-md-8">
									<input type="email" name="email" class="form-control" placeholder="your@email.com" required="">
								</div><br><br>

								<!-- Contact -->
								<div class="col-md-4">
									<label>Contact :</label>
								</div>
								<div class="col-md-8">
									<input type="text" name="contact" class="form-control" required="">
								</div><br><br>

								<!-- Gender2 -->
								<div class="col-md-4">
									<label>Gender :</label>
								</div>
								<div class="col-md-8">
									<div class="row">
										<div class="col-md-4"><label>Male <input type="radio" name="gender" value="Male"></label></div>
										<div class="col-md-4"><label>Female <input type="radio" name="gender" value="Female"></label></div>
										<div class="col-md-4"><label>Other <input type="radio" name="gender" value="Other"></label></div>
									</div>
								</div><br><br>

								<!-- DOB -->
								<div class="col-md-4">
									<label>Date of Birth</label>
								</div>
								<div class="col-md-8">
									<div class="dates">
										<input type="text" autocomplete="off" id="user1" class="form-control" name="dob" placeholder="yyyy-mm-dd" required="">
									</div>
								</div><br><br>

								<!-- Degree -->
								<div class="col-md-4">
									<label>Degree :</label>
								</div>
								<div class="col-md-8">
									<input type="text" name="degree" class="form-control" required="">
								</div><br><br>

								<!-- Department -->
								<div class="col-md-4">
									<label>Department :</label>
								</div>
								<div class="col-md-8">
									<input type="text" name="department" class="form-control" required="">
								</div><br><br>

							</div>

							<input type="submit" class="btn btn-primary" name="doc_submit" value="Confirm Enrollment"><br>
						</form>
					</div>
					<!-- <div class="card-body" style="background-color: #007BFF; color: #FFFFFF;"></div>-->
 			</div>
			</div>
			<div class="col-md-1"></div>
		</div>
	</div>
</body>
</html>
