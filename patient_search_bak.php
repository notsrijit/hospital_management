<!-- <html>
<head>
	<title>Search Result/title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body> -->

<?php
include("func.php");
if(isset($_POST['patient_search_submit'])){
	$contact=$_POST['search'];
	$query="select* from doctorapp where contact='$contact'";
	$result=mysqli_query($con,$query);
	echo '

	<!DOCTYPE html>
	<html>
	<head>
		<title>Search Result/title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	</head>
	<body>

	<div class="card">
			<img src="Images/4.png" class="card-img-top">
			<div class="card-body" style="background-color: #007BFF; color: #FFFFFF;">
				<table class="table table-hover">
				  <thead>
				    <tr>
				      <th>First Name</th>
				      <th>Last Name</th>
				      <th>Email ID</th>
				      <th>Contact</th>
				      <th>Doctor Appointment</th>
				    </tr>
				  </thead>
				  <tbody>';
	while ($row=mysqli_fetch_array($result)){
		$fname=$row['fname'];
	    $lname=$row['lname'];
	    $email=$row['email'];
	    $contact=$row['contact'];  
	    $docapp=$row['docapp'];
	    echo '	<tr>
			      <td>'.$fname.'</td>
			      <td>'.$lname.'</td>
			      <td>'.$email.'</td>
			      <td>'.$contact.'</td>
			      <td>'.$docapp.'</td>
			  	</tr>';
	}
	echo '</tbody></table></div></div>;

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>';
}

?>