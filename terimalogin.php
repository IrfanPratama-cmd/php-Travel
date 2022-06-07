<?php 
extract($_POST);
$username;
$password;
require('database.php');
$queryselect = "SELECT * FROM user where username='$username' 
and password='$password'";
$hasilselect = mysqli_query($conn,$queryselect);
$jumlah = mysqli_num_rows($hasilselect);

if ($jumlah==1){
    echo "
        <script>
            alert('Login berhasil!');
            document.location.href = 'hasil.php';
        </script>
        ";
    while ($row = mysqli_fetch_array($hasilselect))
    {
        session_start();
        $_SESSION['username']=$row['username'];
    }
}else{
    echo "
        <script>
            alert('Login gagal!');
            document.location.href = 'login.php';
        </script>
        ";
}