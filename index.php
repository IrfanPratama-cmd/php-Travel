<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Change Later">
	<meta name="keywords" content="Change Later">
	<meta name="author" content="Onyx Phantomhive">
    <link rel="stylesheet" href="style.css">
    <title>Touring</title>
</head>
<body>
<?php 
        extract($_GET);
        error_reporting(0);
        if(isset($target)){
            if($target == "travel"){
                require("travel.php");
            }
            elseif($target == "destination"){
                require("destination.php");
            }
            elseif($target == "order"){
                require("order.php");
            }
            elseif($target == "about"){
                require("about.php");
            }
        }else{
            require("home.php");
		}
?>
</body>
</html>