<?php
$con=mysqli_connect("localhost","root","","hospitaldb");
if(isset($_POST['patient_search_submit'])){
  $contact=$_POST['search'];
 $query="select * from doctorapp where contact='$contact';";
 $result=mysqli_query($con,$query);
 echo '<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  </head>
  <body style="background-color:#3498DB;color:white;text-align:center;padding-top:50px;">
  <div class="container" style="text-align:left;">
  	<div class="row">
  		<div class="col-md-1"><a href="patient_details.php" class="btn btn-light" style><font color="3C8BDE"><strong>Go Back</strong></font></a> </div>
		<div class="col-md-11"><center><h3><strong>Search Results</strong></h3></center><br></div>
	</div>
  <table class="table table-hover">
  <thead>
    <tr>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Contact</th>
      <th>Gender</th>
      <th>D.O.B.</th>
      <th>Blood Group</th>
      <th>Problem</th>
      <th>Payment</th>
      <th>Release</th>
    </tr>
  </thead>
  <tbody>
  ';
  while($row=mysqli_fetch_array($result)){
    $fname=$row['fname'];
    $lname=$row['lname'];
    $contact=$row['contact'];
    $gender=$row['gender'];
    $dob=$row['dob'];
    $blood=$row['blood'];
    $problem=$row['problem'];
    $payment=$row['payment'];
    $discharge=$row['discharge'];
    echo '<tr>
      <td>'.$fname.'</td>
      <td>'.$lname.'</td>
      <td>'.$contact.'</td>
      <td>'.$gender.'</td>
      <td>'.$dob.'</td>
      <td>'.$blood.'</td>
      <td>'.$problem.'</td>
      <td>'.$payment.'</td>
      <td>'.$discharge.'</td>
    </tr>';
  }
echo '</tbody></table></div> 
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  </body>
</html>';
}

?>