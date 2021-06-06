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
  <h1>Pre-Made Socks</h1>

  <h2>quick buy</h2>
<?php
   include_once "nav.php";
?>
<div class="hover">
    <a href="duck.php" input type="image" name="duck" img src="DuckCollection-18.png" class="center"><br><img src="BH6Socks-06.png" class=
    "center">
</div>
</body>
</html>