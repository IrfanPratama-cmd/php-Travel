<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Akun</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="login-box">
        <img src="avatar.png" class="avatar">
        <h1>Buat Akun</h1>
        <form action="terimaakun.php" method="post">
            <p>Username</p>
            <input type="text" name="username" placeholder="Masukkan Username">
            <p>Password</p>
            <input type="Password" name="password" placeholder="Masukkan Password">
            <input type="submit" name="submit" value="Buat">
        </form>
    </div>
</body>
</html>