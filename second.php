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
<body>
  <h1>Your Receipt</h1>
  <div id="datagrid">
  </div>
  <h2>
  You ordered:
  </h2>
  <h2>
  <?php
    echo $_POST["hoodie"];
  ?>
</h2>
<h2>
<?php
    echo $_POST["tee"];
  ?>
</h2>
<h2>
<?php
    echo $_POST["sticker"];
  ?>
</h2>
<h2>
<?php
  echo "of merchandise. <br> <br> Thank you for shopping with us!";
  ?>
</h2>
<form action="index.php" method="post">
<p id="buttoncenter">
      <button type="submit">Submit another order</button>
    </p>
  
</body>
</html>