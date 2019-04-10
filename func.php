<?php
$con=mysqli_connect("localhost","root","","hospitaldb");

// Login Section

if(isset($_POST['login_submit'])){
	$username=$_POST['username'];
	$password=$_POST['password'];
	$query="select * from logindb where username='$username' and password='$password'";
	$result=mysqli_query($con,$query);
	if(mysqli_num_rows($result)==1){
		header("Location:admin-panel.php");
	}
	else{
		header("Loaction:index.php");
	}
}

// Patient Section

if(isset($_POST['pat_submit'])){
  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $contact=$_POST['contact'];
  $gender=$_POST['gender'];
  $dob=$_POST['dob'];
  $blood=$_POST['blood'];
  $problem=$_POST['problem'];
  $payment=$_POST['payment'];
  $discharge=$_POST['discharge'];

  $query="insert into doctorapp(fname,lname,contact,gender,dob,blood,problem,payment,discharge)values('$fname','$lname','$contact','$gender','$dob','$blood','$problem','$payment','$discharge')";
  $result=mysqli_query($con,$query);
  if($result){
      echo "<script>alert('Admission Confirmed')</script>";
      echo "<script>window.open('admin-panel.php','_self')</script>";
  }
}
function get_patient_details(){
  global $con;
  $query="select * from doctorapp";
  $result=mysqli_query($con,$query);
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

    echo "<tr>
            <td>$fname</td>
            <td>$lname</td>
            <td>$contact</td>
            <td>$gender</td>
            <td>$dob</td>
            <td>$blood</td>
            <td>$problem</td>
            <td>$payment</td>
            <td>$discharge</td>
          </tr>";
  }
}

// Patient Checkout

if(isset($_POST['pay_submit'])){
  $contact=$_POST['contact'];
  $payment=$_POST['payment'];
  $discharge=$_POST['discharge'];
  $query="update doctorapp set payment='$payment', discharge='$discharge' where contact='$contact';";
  $result=mysqli_query($con,$query);
  if($result){
    echo "<script>alert('Payment and Checkout Updated')</script>";
    echo "<script>window.open('payment_update.php','_self')</script>";
  }
}

// Doctor Section

if(isset($_POST['doc_submit'])){
  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $email=$_POST['email'];
  $contact=$_POST['contact'];
  $gender=$_POST['gender'];
  $dob=$_POST['dob'];
  $degree=$_POST['degree'];
  $department=$_POST['department'];

  $query="insert into docdb(fname,lname,email,contact,gender,dob,degree,department)values('$fname','$lname','$email','$contact','$gender','$dob','$degree','$department')";
  $result=mysqli_query($con,$query);
  if($result){
      echo "<script>alert('Enrollment Confirmed')</script>";
      echo "<script>window.open('admin-panel-doctor.php','_self')</script>";
  }
}
function get_doctor_details(){
  global $con;
  $query="select * from docdb";
  $result=mysqli_query($con,$query);
  while($row=mysqli_fetch_array($result)){
    $fname=$row['fname'];
    $lname=$row['lname'];
    $email=$row['email'];
    $contact=$row['contact'];  
    $gender=$row['gender'];
    $dob=$row['dob'];
    $degree=$row['degree'];
    $department=$row['department'];
    echo "<tr>
            <td>$fname</td>
            <td>$lname</td>
            <td>$email</td>
            <td>$contact</td>
            <td>$gender</td>
            <td>$dob</td>
            <td>$degree</td>
            <td>$department</td>
          </tr>";
  }
}

// Staff Section

if(isset($_POST['staff_submit'])){
  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $contact=$_POST['contact'];
  $gender=$_POST['gender'];
  $dob=$_POST['dob'];
  $post=$_POST['post'];

  $query="insert into staffdb(fname,lname,contact,gender,dob,post)values('$fname','$lname','$contact','$gender','$dob','$post')";
  $result=mysqli_query($con,$query);
  if($result){
      echo "<script>alert('Enrollment Confirmed')</script>";
      echo "<script>window.open('admin-panel-staff.php','_self')</script>";
  }
}
function get_staff_details(){
  global $con;
  $query="select * from staffdb";
  $result=mysqli_query($con,$query);
  while($row=mysqli_fetch_array($result)){
    $fname=$row['fname'];
    $lname=$row['lname'];
    $contact=$row['contact'];  
    $gender=$row['gender'];
    $dob=$row['dob'];
    $post=$row['post'];
    echo "<tr>
            <td>$fname</td>
            <td>$lname</td>
            <td>$contact</td>
            <td>$gender</td>
            <td>$dob</td>
            <td>$post</td>
          </tr>";
  }
}

?>