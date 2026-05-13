<?php
session_start();
include("db_conn.php");

if(!isset($_SESSION['customer_email'])){
    header("Location: user-otp.php");
    exit();
}

$customer_email = $_SESSION['customer_email'];

$otp = rand(1000,9999);
$_SESSION['otp_time'] = time();

$sql = "UPDATE customertable SET otp='$otp', `status`='Pending' WHERE customer_email='$customer_email'";
mysqli_query($conn, $sql);

$otp = $_SESSION['otp'];

header("Location: user-newotp.php");
exit();
?>