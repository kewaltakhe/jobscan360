<?php
session_start();
$servername = "localhost";
$dbuser = "raspoi";
$dbpass = "poisql";
$dbname = "jobPortal";
$conn = new mysqli($servername, $dbuser, $dbpass, $dbname);

if(!isset($_SESSION['cid'])){
    header("location:../index.html");
}
$user_id = $_SESSION['cid'];
$sql = "select * from companies where company_id='$user_id'";
$res = mysqli_query($conn,$sql);
$user_data = mysqli_fetch_array($res);
$company_name = $user_data['company_name'];
$email = $user_data['email'];
$contact_no = $user_data['contact_no'];
$ceo = $user_data['name_of_ceo'];
$cto = $user_data['name_of_cto'];
$address = $user_data['address'];
$cid = $user_data['company_id'];
?>