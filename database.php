<?php 
    $conn = mysqli_connect('localhost','root','','travel');

    /*function daftar($data1){
        global $conn;
        //ambil data
        $nama_travel = htmlspecialchars($data1["nama_travel"]);
        $no_travel = htmlspecialchars($data1["no_travel"]);
        $kapasitas = htmlspecialchars($data1["kapasitas"]);
        $harga_travel = htmlspecialchars($data1["harga_travel"]);
        //query insert data
        $query = "INSERT INTO mahasiswa
        VALUES 
        ('$nama_travel','$no_travel','$kapasitas','$harga_travel')";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }*/

   
?>