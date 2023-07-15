<?php
session_start();
$servername = "localhost";
$dbuser = "raspoi";
$dbpass = "poisql";
$dbname = "jobPortal";
$conn = new mysqli($servername, $dbuser, $dbpass, $dbname);

// get job form data
$job_name = $_POST["jname"];
$salary=$_POST["sal"];
$deadline=$_POST["deadline"];
$job_location=$_POST["loc"];
$min_cgpa=$_POST["cgpa"];
$year=$_POST["year"];
$course=$_POST["course"];
$max_age=$_POST["age"];

//new entry
$company_id=$_SESSION['cid'];
$sql="select * from jobs where company_id='$company_id' && job_prof = '$job_name'";
$result=$conn->query($sql);
$row_count=$result->num_rows;
if($row_count >0)
{
  echo"<script>alert('This Job Profile is already Created');";
  echo 'window.location= "company_dashboard.php"';
  echo '</script>';
}
else{
  $reg="INSERT INTO jobs(job_prof, job_sal, job_loc, deadline, year, min_cgpa, course, max_age, company_id) VALUES ('$job_name', $salary, '$job_location', '$deadline', '$year', $min_cgpa, '$course', $max_age, $company_id);";
  mysqli_query($conn,$reg);
  // echo"Registration Successfull";
  echo"<script>alert('Job generated!');";
  echo 'window.location= "company_dashboard.php"';
  echo '</script>';
}
//c
?>