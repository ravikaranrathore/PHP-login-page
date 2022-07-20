<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
    
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



$email = $_POST['email'];
$pass = $_POST['pass'];

$sql = "SELECT name FROM accounts where email = '$email' AND password = '$pass'";
$retval = mysqli_query($connect,$sql);

if(mysqli_num_rows($retval) > 0)
{
    while ($row = mysqli_fetch_assoc($retval))
    {
        echo "Your name is ".$row['name']." <br>LOGIN SUCCESSFUL!";
    }
}
else
{
    echo "Email or Passwords incorrect !!!<br> TRY AGAIN!!";
    echo "<a href ='index.php'>click here</a>";
}


?>

</body>
</html>