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
  <h1>About Us</h1>

  <h2>marshmallow hugs</h2>
<?php
   include_once "nav.php";
?>
<div class="hover">
    <img src="https://media.istockphoto.com/photos/stickers-on-white-picture-id1131809575?k=6&m=1131809575&s=612x612&w=0&h=2lrJi8HUaL-0K2bTT06PrvJ25Y1QWw27UBVk1NY7YbM=" class="center">
    <h4><em>Marshmallow Hugs</em> is a Chicago-based sock company dedicated to making comfortable, personal and fun socks. We guarantee that we have a sock for everyone, even you! <br><br> All products are made in the USA. <br><br> For more information, call (XXX) XXX-XXXX or email ********@*****.com</h4>
</div>
</body>
</html>