<?php
error_reporting(0);
extract($_POST);
$nod;
$nama;
$email;
$travel;
$telp;
$destinasi;
$gambar;
	if(isset($submit)){
		$nod="File telah berhasil diupload!";
	}
	else{
		$nod="File belum diupload!";
	}
$sql = "SELECT * FROM daftar_travel";
$sql2 = "SELECT * FROM daftar_destinasi";
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
    <title>Touring | Order</title>
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
                    <li><a href="#">Order</a></li>
					<li><a href="about.php">About</a></li>
					<li><a href="hasil.php">Database</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section id="newsletter">
		<div class="container">
			<h1>Search Travel</h1>
			<form>
				<input type="input" placeholder="Search...">
				<button type="submit" class="button_1">Search Now</button>
			</form>
		</div>
    </section>
    
    <div id="wrapper">

		<section id="boxes" class="order">
            <h1 align="center">Order Now</h1>
			<form class="order" enctype="multipart/form-data" action="terimaorder.php" method="post">
				<div>
				    <label class="label">Nama</label><br>
					<input type="text" placeholder="Name" name="nama" >
				</div><br>
				<div>
					<label class="label">E-mail</label><br>
					<input type="text" placeholder="E-mail Address" name="email">
				</div><br>
				<div>
					<label class="label">No. Telp</label><br>
					<input type="text" placeholder="No. Telp" name="telp">
				</div><br>
				<label class="label">Travel</label><br>
				<div class="dropdown">
					<select name="travel" class="select" value="<?= $row['nama_travel']?>">
        			<?php 
            		require('database.php');
            		$queryselect = "SELECT * FROM daftar_travel";
					$hasilselect = mysqli_query($conn,$queryselect);
					?>
					<option disabled selected>Pilih Travel</option>
					<?php while($row=mysqli_fetch_array($hasilselect)) :?>
                	<option style="width:100%" cols="26" rows="2"><?= $row['nama_travel'] ?></option>
					<?php endwhile; ?>
    				</select>
                </div><br>
				<label class="label">Destinasi</label><br>
                <div class="dropdown">
					<select name="destinasi" class="select" value="">
        			<?php 
            		require('database.php');
            		$queryselect = "SELECT * FROM daftar_destinasi";
					$hasilselect = mysqli_query($conn,$queryselect);
					?>
					<option disabled selected>Pilih Destinasi</option>
            		<?php while($row=mysqli_fetch_array($hasilselect)) :?>
					<option style="width:100%"><?= $row['destinasi'] ?></option>
					<?php endwhile; ?>
    			</select>
                </div><br>
                <div>
					<label>Upload Bukti Pembayaran</label><br>
					<input type="file" accept="image/*" name="gambar">
				</div><br>
				<button class="button_1" type="submit">Send</button>
                <?php echo $nod; ?>
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