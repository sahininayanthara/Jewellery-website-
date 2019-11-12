<?php  
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'jewe';
$conn = mysqli_connect('localhost', 'root', '', 'jewe');

if(mysqli_connect_errno()){
	die('Database Connection Failed' . mysqli_connect_error());
}
?>




