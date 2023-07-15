<?php
//replace
$servername = "localhost";
$dbuser = "raspoi";
$dbpass = "poisql";
$dbname = "jobPortal";
$conn = new mysqli($servername, $dbuser, $dbpass, $dbname);
//check connection
if($conn->connect_error)
{
    die("Connection failed: ".$conn->connect_error);
}

//company sign up form data
$company_name = $_POST['company_name'];
$email = $_POST['email'];
$passwd = $_POST['passwd'];
$contact_no = $_POST['contact_number'];
$name_of_ceo = $_POST['ceo'];
$name_of_cto = $_POST['cto'];
$address = $_POST['address'];
//check email
$sql = "select * from companies where email='$email'";
$res =$conn->query($sql);;
$row_count=$res->num_rows;
if($row_count>0){
    echo"<script>window.alert('Company Already Registered');";

  echo 'window.location= "../index.html"';
  echo '</script>';
}else{
    $sql = "insert into companies(company_name,email,passwd,contact_no,name_of_ceo,name_of_cto,address)VALUES('$company_name','$email','$passwd','$contact_no','$name_of_ceo','$name_of_cto','$address')";
    mysqli_query($conn,$sql);
    echo"<script>window.alert('Registration Succesfull');window.location= '../index.html'";
    echo '</script>';
}



?>