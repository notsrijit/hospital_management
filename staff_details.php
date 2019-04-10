<!DOCTYPE html>
<?php  include("func.php");?>
<html>
<head>
	<title>Staff Details</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Bitter:700|Merriweather:700" rel="stylesheet">
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
	      <li class="nav-item">
	        <a class="nav-link" href="admin-panel-doctor.php"><i class="fas fa-user-md" aria-hidden="true"></i>  Doctors</a>
	      </li>
	      <li class="nav-item active">
	        <a class="nav-link" href="admin-panel-staff"><i class="fas fa-user-plus" aria-hidden="true"></i>  Staff <span class="sr-only">(current)</span></a>
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
		<h1><i class="fas fa-hospital"></i>  GENERAL HOSPITAL</h1>
		<p>You Trust, We Care</p>
	</div>
	<div class="container-fluid" style="margin: 25px auto 50px auto;">
		<div class="row">
			<div class="col-md-3">
				<div class="list-group">
					<a href="admin-panel-staff.php" class="list-group-item list-group-item-action">Add Staff</a>
					<a href="staff_details.php" class="list-group-item list-group-item-action active">Staff Details</a>
				</div>
			</div>
			<br>
			<div class="col-md-9">
				<div class="card">
					<div class="card-body" style="background-color: #007BFF; color: #FFFFFF;">
						<div class="row">
							<div class="col-md-1"><a href="admin-panel-staff.php" class="btn btn-light"><font color="#007BFF"><strong>Go Back</strong></font></a> </div>
							<div class="col-md-4"><center><h3>Staff Details</h3></center></div>
							<div class="col-md-7">
								<form class="form-group" action="staff_search.php" method="post">
									<div class="row">
										<div class="col-md-9"><input type="text" name="search" class="form-control" placeholder="enter contact"></div>
										<div class="col-md-3"><input type="submit" name="staff_search_submit" class="btn btn-light" value="Search"></div>
									</div>
								</form>
							</div>
						</div>
					</div>
					<div class="card-body" style="background-color: #007BFF; color: #FFFFFF;">
						<table class="table table-hover">
						  <thead>
						    <tr>
						      <th scope="col">First Name</th>
						      <th scope="col">Last Name</th>
						      <th scope="col">Contact</th>
						      <th scope="col">Gender</th>
						      <th scope="col">D.O.B.</th>
						      <th scope="col">Post</th>
						    </tr>
						  </thead>
						  <tbody>
						    <?php get_staff_details(); ?>
						  </tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
