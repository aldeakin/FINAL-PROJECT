<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<div class=image>
</div>
  <h1>Sign Up!</h1>
  <h2>make your account</h2>
  <?php
  include_once "nav.php";
  ?>
  <form action="view-copy.php" method="post">
    <div>
      <label for="username"> Username:</label>
      <textarea name="username" id="username" cols="30" rows="1" required></textarea> 
    </div>
    <div>
      <label for="password">Password:</label>
      <textarea name="password" id="password" cols="30" rows="2.5" required></textarea> 
    </div>
    <div>
      <button type="submit">Sign Up</button>
      <h5>(or <a href="signin.php">sign in</a>)</h3>
    </div>
  </form>
  
</body>
</html>
