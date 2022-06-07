<?php 
    extract($_POST);
    $username;
    $password;
    require('database.php');
    $queryinput = "INSERT INTO user
    VALUES ('$username', '$password')";
    $hasilqueryinput = mysqli_query($conn,$queryinput);
    if($hasilqueryinput==1){
        echo "
            <script>
                alert('Buat akun berhasil!');
                document.location.href = 'login.php';
            </script>
        ";
    }else{
        echo "
            <script>
                alert('Buat akun gagal!');
                document.location.href = 'index.php';
            </script>
        ";
    }
?>