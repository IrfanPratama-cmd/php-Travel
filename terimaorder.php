<?php 
//error_reporting(0);
extract($_POST);
$nama;
$email;
$travel;
$telp;
$destinasi;
$gambar;


$uploaddir = 'uploads/';
$uploadfile = $_FILES['gambar']['name'];
if (move_uploaded_file($_FILES['gambar']['tmp_name'], $uploaddir . $_FILES['gambar']['name'])){
    
}
    

require('database.php');
	$queryinput="INSERT INTO orders 
	VALUES ('$nama','$email','$telp','$travel','$destinasi', '$uploadfile')";
	$hasilqueryinput=mysqli_query($conn,$queryinput);
	if($hasilqueryinput==1){
		echo "
            <script>
                alert('Order berhasil!');
                document.location.href = 'order.php';
            </script>
        ";
	}
	else{
		echo "
            <script>
                alert('Order gagal!');
                document.location.href = 'order.php';
            </script>
        ";
	}
?>