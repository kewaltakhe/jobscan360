<?php
session_start();
$servername = "localhost";
$dbuser = "raspoi";
$dbpass = "poisql";
$dbname = "jobPortal";
$conn = new mysqli($servername, $dbuser, $dbpass, $dbname);

if(!isset($_SESSION['id'])){
    //send a login required message
    header("location: ../accounts/candidate_login.php");
}
$user_id = $_SESSION['id'];
$sql = "select * from candidates where candidate_id = '$user_id'";
$res = mysqli_query($conn,$sql);
$user_data = mysqli_fetch_array($res);
$firstname = $user_data['fname'];
$lastname = $user_data['lname'];
$email=$user_data['email'];
$dob=$user_data['dob'];
$gender=$user_data['gender'];
$mobile=$user_data['mobile_no'];
$course=$user_data['course'];
$candidate_id=$user_data['candidate_id'];
$passing_year=$user_data['passing_year'];
?>