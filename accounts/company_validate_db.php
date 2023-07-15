<?php
session_start();
$servername = "localhost";
$dbuser = "raspoi";
$dbpass = "poisql";
$dbname = "jobPortal";
$conn = new mysqli($servername, $dbuser, $dbpass, $dbname);

//company login form data
$username = $_POST['username'];
$passwd = $_POST['passwd'];

$sql = "select * from companies where email='$username' and passwd='$passwd'";
$res = mysqli_query($conn, $sql);
$res_count = mysqli_num_rows($res);
$row = mysqli_fetch_array($res);
if($res_count>0){
    $_SESSION['cid'] = $row['company_id'];
    echo "<script>alert('Login Success'); window.location.href='../company/company_dashboard.php';</script>";
}else{
    echo "<script>alert('Login failed');window.location.href='../company/company_dashboard.php';</script>";
}

?>