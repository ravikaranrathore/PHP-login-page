<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'accounts';

$connect = mysqli_connect($host,$user,$pass,$db);

if(! $connect)
{
	die('could not connect to database !<br>'.mysqli_error());
}

$name = $_POST['name'];
$DOB = $_POST['DOB'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT INTO accounts VALUE('$name',$DOB,'$email','$password')";

if(mysqli_query($connect,$sql))
{
    echo "<h1>Account Created Successfully:\nGo to login page and login now !";
    echo "<a href='index.php'>click here</a>";
}
else
{
    echo "Failed due to some reasons.\nTry again with different values!\n";
    echo "<a href = 'create.php'>try again</a>";
}


?>