<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Your Cart</h1>
<h2>before checkout</h2>
<?php
   include_once "nav.php";
   echo "Your cart:"
?>

<br><a href="checkout.php" class="button">Check Out</a>
    
</body>
</html>