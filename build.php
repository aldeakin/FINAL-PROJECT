<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Receiver</title>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>
<body onload="initialise()">

<script>
  function initialise(){
    console.log("initialise");
    var canvas = document.getElementById("canvas_1");
    canvas.addEventListener("mousedown", doMouseDown, false);
  }
  function doMouseDown(event) {
    canvas_x = event.pageX;
    canvas_y = event.pageY;
    alert("x=" + canvas_x + "Y=" + canvas_y);
  }

</script>
  <h1>Build Your Sock!</h1>

  <h2>pick the support area</h2>
<?php
  include_once "nav.php";
?>

<div class="container">
  <img src="front-07.png" alt="front of leg area">
  <button class="btn">Add to Cart</button>
</div>

<div class="container">
  <img src="top-07.png" alt="front of leg area">
  <button class="btn">Add to Cart</button>
</div>

<div class="container">
  <img src="frontTop-07.png" alt="front of leg area">
  <button class="btn">Add to Cart</button>
</div>

<div class="container">
  <img src="topArch-07.png" alt="front of leg area">
  <button class="btn">Add to Cart</button>
</div>