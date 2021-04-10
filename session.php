<?php 


include"config.php";

session_start();


$check1=$_SESSION['login'];
 $ses_sql = mysqli_query($conn,'SELECT name form user WHERE uname='$check1'');

 $row=mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

 $login_Session=$row['name'];
 if (!isset($_SESSION['login'])) {
 	header('location:login.php');
 	die();




 	if
 }

 ?>
