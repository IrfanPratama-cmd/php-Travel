<?php 
        extract($_POST);
        $target=$_GET['target'];
        require('database.php');
        $queryselect = "SELECT * FROM daftar_destinasi WHERE no_destinasi='$target'";
        $hasilselect = mysqli_query($conn,$queryselect);
        $row = mysqli_fetch_array($hasilselect);
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
                <li><a href="#">Hapus Travel</a></li>
                <li><a href="daftar2.php">Input Destinasi</a></li>
            </div>
		</div>
    </section>
    
    <div id="wrapper">

    <section id="boxes" class="order">
            <h1 align="center">Hapus Destinasi</h1>
			<form class="order" action="cetakhapus2.php" method="post">
				<div>
				    <label class="label">Nama Destinasi</label><br>
					<input type="text" placeholder="Nama Destinasi" name="destinasi" value="<?= $row['destinasi']?>" readonly>
				</div><br>
				<div>
					<label class="label">No. Destinasi</label><br>
					<input type="text" placeholder="No. Destinasi" name="no_destinasi" value="<?= $row['no_destinasi']?>" readonly>
				</div><br>
				<div>
					<label class="label">Harga Destinasi</label><br>
					<input type="text" name="harga_destinasi" value="<?= $row['harga_destinasi']?>" readonly>
                </div><br>
                <button class="button_1" type="gass">Hapus</button>
            </form>
        </section>
    <br>
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