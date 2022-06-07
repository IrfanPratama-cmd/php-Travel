<?php 
require('database.php');
extract($_POST);
$destinasi;
$no_destinasi;
$harga_destinasi;
$deskripsi;
$queryinput = "UPDATE `daftar_destinasi` 
SET `destinasi` = '$destinasi', `harga_destinasi` = '$harga_destinasi', `deskripsi` = '$deskripsi' WHERE `no_destinasi` = '$no_destinasi'";
$hasilqueryinput = mysqli_query($conn,$queryinput);
if($hasilqueryinput==1){
    $nod ="Edit Berhasil";
}else{
    $nod = "Edit Gagal";
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Change Later">
	<meta name="keywords" content="Change Later">
	<meta name="author" content="Onyx Phantomhive">
    <link rel="stylesheet" href="style.css">
    <title>Touring | Database</title>
</head>
<body>
    <header>
        <div class="container">
            <div id="branding">
                <h1>Touring Travel</h1>
            </div>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="travel.php">Travel</a></li>
                    <li><a href="destination.php">Destination</a></li>
                    <li><a href="order.php">Order</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="hasil.php">Database</a></li>
                </ul>
            </nav>
        </div>
    </header>



    <section id="newsletter">
		<div class="container">
            <div class="database">
                <li><a href="#">Input Travel</a></li>
                <li><a href="daftar2.php">Input Destinasi</a></li>
            </div>
		</div>
    </section>
    
    <div id="wrapper">

    <section id="boxes" class="order" align="center">
            <h1 align="center"><?= $nod ?></h1>
            <a href="hasil.php">Lihat Database</a>
            <br><br><br>
        </section>
    <br><br><br><br><br><br><br><br><br><br>
    <footer>
		<div id="column">
			<h2>Order Now and Get Discount!!</h2>
			Please click the following link <a href="#">touringtravel.net</a> and get your desire.<br />
			<p>Touring Travel &copy; 2020</p>
		</div>
		<div id="column">
			<h2>Alamat</h2>
			Jl. Ir. Sutami No.36 A, Pucangsawit, Kec. Jebres, Kota Surakarta, Jawa Tengah 57126
		</div>
		<div id="column">
			<h2>Find Us</h2>
            <a href="#">facebook.com</a><br>
            <a href="#">instagram.com</a>
		</div>
	</footer>
</body>
</html>