<?php 
        $target=$_GET['target'];
        require('database.php');
        $queryselect = "SELECT * FROM daftar_travel WHERE no_travel='$target'";
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
                <li><a href="#">Input Travel</a></li>
                <li><a href="daftar2.php">Input Destinasi</a></li>
            </div>
		</div>
    </section>
    
    <div id="wrapper">

    <section id="boxes" class="order">
            <h1 align="center">Edit Travel</h1>
			<form class="order"  action="cetakedit.php" method="post">
				<div>
				    <label class="label">Nama Travel</label><br>
					<input type="text" placeholder="Nama Travel" name="nama_travel" value="<?= $row['nama_travel']?>" required>
				</div><br>
				<div>
					<label class="label">No. Travel</label><br>
					<input type="number" placeholder="No. Travel" name="no_travel" value="<?= $row['no_travel']?>" required>
				</div><br>
				<div>
					<label class="label">Kapasitas</label><br>
					<input type="number" name="kapasitas" value="<?= $row['kapasitas']?>" required>
                </div><br>
                <div>
					<label class="label">Harga Travel</label><br>
					<input type="number" name="harga_travel" value="<?= $row['harga_travel']?>" required>
                </div><br>
                <div>
					<label class="label">Deskripsi</label><br>
					<textarea name="deskripsi" id="" cols="85" rows="4"  required><?= $row['deskripsi']?></textarea>
                </div><br>
                <button class="button_1" type="gass1">Send</button>
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