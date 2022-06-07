<?php 
error_reporting(0);
require('database.php');
require('ceksession.php');
extract($_POST);
$sql = "SELECT * FROM orders";
$result = mysqli_query($conn,$sql);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Change Later">
	<meta name="keywords" content="Change Later">
	<meta name="author" content="Onyx Phantomhive">
    <link rel="stylesheet" href="style2.css">
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
                <li><a href="daftar.php">Input Travel</a></li>
                <li><a href="daftar2.php">Input Destinasi</a></li>
                <li><a href="hasilorder.php">Order</a></li>
                <li style="float:right"><a href="logout.php">Log Out</a></li>
            </div>
		</div>
    </section>
    
    <div id="wrapper">
        
        <section id="boxes" class="tabel">
        <div class="hasil">
            <h1>Orders</h1>
            <table  border="1" cellpadding="8" cellspacing="0">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Aksi</th>
                        <th>Nama</th>
                        <th>E-Mail</th>
                        <th>No. Telp</th>
                        <th>Travel</th>
                        <th>Destination</th>
                        <th>Bukti Pembayaran</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i=1; ?>
                    <?php while($row=mysqli_fetch_array($result)) :?>
                        <tr>    
                            <td align="center"><?= $i; ?></td>
                            <td>
                                <a href="hapusorder.php?target=<?= $row['telp'] ?>" id="hapus">Hapus</a>
                                <a href="#" id="edit">Terima</a>
                            </td> 
                            <td><?= $row['nama'] ?></td>
                            <td><?= $row['email'] ?></td>
                            <td><?= $row['telp'] ?></td>
                            <td><?= $row['travel'] ?></td>
                            <td><?= $row['destinasi'] ?></td>
                            <td><img src="uploads/<?= $row['gambar'] ?>" width="200px" height="100px"></td>
                        </tr>
                    <?php $i++;?>
                    <?php endwhile; ?>
                </tbody>
            </table>

    <br><br><br><br><br><br><br><br><br>
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