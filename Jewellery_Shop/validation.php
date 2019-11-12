<?php 
	if(isset($_POST['submit']))
	{
	require_once('include/connection.php');
	mysqli_select_db($conn, 'jewe');
	
	$name = $_POST['username'];
	$email = $_POST['email'];
	$message = $_POST['message'];
 
	$s = "select * from usertable";
	$result = mysqli_query($conn, $s);
	

	if($result){
	$reg = "insert into usertable(username, email, message) values ('$name','$email', '$message')";
	mysqli_query($conn, $reg);
	header('Location: index.php');
	}
}
 ?>	
		