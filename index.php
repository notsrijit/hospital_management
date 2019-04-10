<!DOCTYPE html>
<html>
<head>
	<title>Index Page</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<style type="text/css">
		hr{ 
		  height: 1px;
		  color: white;
		  background-color: white;
		  border: none;
		}
	</style>
</head>

<body id="backimg" style="background: url('Images/2.jpg') no-repeat; background-size: cover";>
	
	<div class="container" style="width: 450px; margin: 100px auto 50px auto;">
		<div class="card">
			<img class="card-img-top" src="Images/1.jpg" alt="Card image cap">
			<div class="card-body" style="background-color: #007BFF; color: #FFFFFF;">
				<center><h5 class="card-title"><strong>Hospital Management System</strong></h5></center><hr>
				<form class="form-group" action="func.php" method="post">

					<div class="row">

						<div class="col-md-4">
							<label><i class="fas fa-user-circle" aria-hidden="true"></i>  Username</label>
						</div>
						<div class="col-md-8">
							<input type="text" name="username" class="form-control" placeholder="enter username" required="">
						</div><br><br>

						<div class="col-md-4">
							<label><i class="fas fa-key" aria-hidden="true"></i>  Password</label>
						</div>
						<div class="col-md-8">
							<input type="password" name="password" class="form-control" placeholder="enter password" required="">
						</div><br><br>

					</div>

					<center><input type="submit" name="login_submit" class="btn btn-light" value="Submit"></center>
				</form>
			</div>
		</div>
	</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>