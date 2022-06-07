<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="alert">
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
        <p>Hanya Admin yang berhak memasuki database!!</p>
    </div>
    <div class="login-box">
        <img src="avatar.png"class="avatar">
        <h1>Login</h1>
        <form action="terimalogin.php" method="post">
            <p>Username</p>
            <input type="text" name="username" placeholder="Username">
            <p>Password</p>
            <input type="Password" name="password" placeholder="Password">
            <input type="submit" name="submit" value="Login">
        </form>
            <a href="buatakun.php">Belum punya akun</a>
    </div>
</body>
</html>