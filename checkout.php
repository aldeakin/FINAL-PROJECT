<?php
session_start();
if (!isset($_SESSION['username'])){
  header("location:index.php");
}
?>
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
<h1>Shipping ETA</h1>

  <h2>to buy or not to buy, that is the question</h2>

<?php
include_once "nav.php";

?>

<h1>Your socks will arrive in 1 to 2 days after you order them. Thank you for shopping with us!</h1>
    
</body>
</html>