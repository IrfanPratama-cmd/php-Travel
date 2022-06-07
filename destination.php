<?php 
error_reporting(0);
require('database.php');
//require('ceksession.php');
extract($_POST);
$sql = "SELECT * FROM daftar_destinasi";
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
    <link rel="stylesheet" href="style.css">
    <title>Touring | Destination</title>
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
                    <li><a href="#">Destination</a></li>
                    <li><a href="order.php">Order</a></li>
                    <li><a href="about.php">About</a></li>
					<li><a href="hasil.php">Database</a></li>
                </ul>
            </nav>
        </div>
    </header>



    <section id="newsletter">
		<div class="container">
			<h1>Search Destination</h1>
			<form>
				<input type="input" placeholder="Search...">
				<button type="submit" class="button_1">Search Now</button>
			</form>
		</div>
    </section>
    
	<div id="wrapper">
		<section id="boxes">
			<div class="container">
			<?php while($row=mysqli_fetch_array($result)) :?>
				<div class="box">
					<a href="order.php"><img src="uploads/<?= $row['gambar'] ?>"></a>
					<h3><?= $row['destinasi'] ?><br/>
					<?="Rp.".number_format($row['harga_destinasi'])?></h3>
					<p><?= $row['deskripsi'] ?></p>
				</div>
			<?php endwhile; ?>
			</div>
        </section>
	<div>

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