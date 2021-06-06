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
<BODY>
  <h1>Marshmallow Hugs</h1>

  <h2>a sock company</h2>
<?php
   include_once "nav.php";
?>
<div class="triangle">
  <h3>Marshmallow Hugs is a Chicago-based sock company. It is dedicated to the improvement of socks for complete comfort. Combining plush fibers and new gel-infused techology, Marshmallow Hugs is the most customizable and most <em>comfortable</em> socks on the market. Whether you have AFOs, the first day of school, work, or an upcoming soccer game-- Marshmallow Hugs is the best choice.</h3>
  <img src="https://i.pinimg.com/originals/e5/86/1e/e5861e17e203a296ef77e5fba5adb2a7.png" class="pic">
</div>
</body>
</html>