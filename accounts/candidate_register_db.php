<?php
$servername = "localhost";
$dbuser = "raspoi";
$dbpass = "poisql";
$dbname = "jobPortal";
$conn = new mysqli($servername, $dbuser, $dbpass, $dbname);

//candidate sign up form data
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$dob = $_POST['birthday'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$passwd = $_POST['passwd'];
$contact_number = $_POST['contact_number'];
$address = $_POST['address'];
$tenth = $_POST['tenth'];
$twelfth = $_POST['twelfth'];
$cgpa = $_POST['cgpa'];
$course = $_POST['course'];
$passing_year = $_POST['passing_year'];
if ($conn->connect_error) {
  echo"<script>window.alert('DB error!')</script>";
  die("Connection failed: " . $conn->connect_error);
}else{
    //check if email already present
    $sql = "select * from candidates where email='$email'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0){
      echo"<script>window.alert('Email already registered!')</script>";
    }else{
      $reg_sql = "insert into candidates(fname,lname,dob,gender,email,passwd,mobile_no,address,tenth,twelfth,cgpa,course,passing_year) values('$fname','$lname','$dob','$gender','$email','$passwd',$contact_number,'$address','$twelfth','$tenth','$cgpa','$course','$passing_year')";
      mysqli_query($conn, $reg_sql);
      echo"<script>window.alert('Registration Successful!')</script>";

    }
}
 ?>
