<?php
session_start();
$servername = "localhost";
$dbuser = "raspoi";
$dbpass = "poisql";
$dbname = "jobPortal";
$conn = new mysqli($servername, $dbuser, $dbpass, $dbname);

// get data from login page
$username = $_POST['username'];
$passwd = $_POST['password'];

$sql = "select * from candidates where email='$username' and passwd='$passwd'";
$res = mysqli_query($conn, $sql);
$res_count = mysqli_num_rows($res);
$row = mysqli_fetch_array($res);
if($res_count>0){
    $_SESSION['id'] = $row['candidate_id'];
    echo "<script>alert('Login Success'); window.location.href='../candidate/candidate_dashboard.php';</script>";
}else{
    echo "<script>alert('Login failed'); window.location.href='candidate_login.php';</script>";
}
?>