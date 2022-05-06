<?php
session_start();


$con = mysqli_connect('localhost','root');
	if($con){
		echo"Connect";
	}

	mysqli_select_db($con,'users');


	$username = $_POST['username'];
	$password = $_POST['password'];

$q = " select * from users where username = '$username' && password='$password' ";

$result = mysqli_query($con,$q);

$row = mysqli_num_rows($result);

if($row == 1){
	$_SESSION['username'] = $username;

	$userquery = " insert into users(username) values ('$username')";
	$userresult = mysqli_query($con,$userquery) ;

	header('location:home.html');	
}else{
	header('location:index1.php');
}

?>