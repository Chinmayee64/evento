<?php

session_start();
header('location:index1.php');

$con = mysqli_connect('localhost','root');
	if($con){
		echo"Connect";
	}

	mysqli_select_db($con,'users');


	$username = $_POST['username'];
	$password = $_POST['password'];
	

	// echo $username;
	// echo $password;

	$check = "select * from users where username='$username' && password='$password' ";
	$resultcheck = mysqli_query($con,$check);	

	 $row = mysqli_num_rows($resultcheck);
			if($row == 1){
				echo"Username or Password already taken!";
			     
				
			}	else{

				$q = "insert into users(username, password) values ('$username', '$password')"  ;

				$result = mysqli_query($con,$q);

			}
