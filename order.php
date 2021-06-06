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
<h1>Place Your Order</h1>

  <h2>awesome choice!</h2>
<?php
   include_once "nav.php";
?>
<form action="orderview.php" method="post">
    <div>
      <label for="design">Design:</label>
      <select name="design" id="" required>
        <option value="gogohelmet">Go-Go Helmets</option>
        <option value="gogoconcept">Go-Go Concept Art</option>
        <option value="fredzilla">Fredzilla</option>
        <option value="wasabicar">Wasabi's Car</option>
      </select>
    </div>
    <div>
      <label for="size">Size:</label>
      <select name="size" id="" required>
        <option value="small">Small</option>
        <option value="medium">Medium</option>
        <option value="large">Large</option>
      </select>
    </div>
    <div>
      <label for="height">Height:</label>
      <select name="height" id="" required>
        <option value="crew">6"</option>
        <option value="knee">12"</option>
        <option value="high">24"</option>
      </select>
    </div>
    <div>
      <label for="quantity"># of Pairs:</label>
      <select name="quantity" id="" required>
        <option value=1>1</option>
        <option value=2>2</option>
        <option value=3>3</option>
      </select>
    </div>
    <div>
      <label for="area">Support Area:</label>
      <select name="area" id="" required>
        <option value="inarch">Inner Arch</option>
        <option value="inankle">Inner Ankle</option>
        <option value="outankle">Outer Ankle</option>
        <option value="other">Other (detail in <em>Extra Instructions</em> below)</option>
      </select>
    </div>
    <div>
      <label for="extrainstructions">Extra Instructions:</label>
      <textarea name="extrainstructions" id="" cols="30" rows="5"></textarea>
    </div>
    <div>
      <button type="submit">Save</button>
    </div>
  </form>
    
</body>
</html>