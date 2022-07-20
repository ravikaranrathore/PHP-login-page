<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>

<h1 text-align: "center">Welcome to login page</h1>

to continue either login or create account<br><br>

<a href="create.php">Create a new account</a>

<br>
<br>

Or Login below :
<br><br>

<form action="login.php" method="POST">
Enter email:<br>
<input type = "email" name = "email" value=""><br>
Enter password:<br>
<input type="password" name="pass"><br>
<br>
<input type="submit" name = "login" value="login"><br>

</form>
    
</body>
</html>