<?php
session_start();
  $host = "localhost";
  $db = "final";
  $user = "root";
  $pw = "root";
  $port = 3306;

  $link = mysqli_connect(
  $host, 
  $user, 
  $pw, 
  $db,
  $port
);
if(mysqli_connect_errno()){
  echo "<h2>failed to connect"  . mysqli_connect_error() . "</h2>";
  exit();
}
?>
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
  <h1>You have been logged in!</h1>
<?php
  include_once "login.php";
  include_once "nav.php";
  
    /*$querystring = "INSERT INTO "


                  . "users"
                  . "(design, size)"
                  . " VALUES "
                  ."("
                  . "\"" . $_POST['design'] . "\","
                  . "\"" . $_POST['size'] . "\","
                  . ")";
*/

$querystring = "INSERT INTO userorder (design, size, height, quantity, area, extrainstructions) VALUES (?, ?, ?, ?, ?, ?)";
$stmt=mysqli_prepare($link, $querystring);
mysqli_stmt_bind_param($stmt,"sssiss", $_POST['design'], $_POST['size'], $_POST['height'], $_POST['quantity'], $_POST['area'], $_POST['extrainstructions']);
// $dataset = mysqli_stmt_execute($stmt2);
mysqli_stmt_execute($stmt);

echo $result;
echo "<br>";
echo $link->error;

// $querystring2 = "SELECT * FROM design WHERE design=?";

// $result = mysqli_stmt_get_result($stmt);
// $rows = mysqli_num_rows($result);

//   if(mysqli_stmt_execute($stmt)){
//     echo "You have been logged in.";
//     $_SESSION['isloggedin']=true;
//     $_SESSION['userdisplay']=$_POST['design'];
//   } else {
//   }
  
?>
<img src="http://cdn.shopify.com/s/files/1/1061/1924/products/Smiling_Face_Emoji_grande.png?v=1571606036" class="center">
</body>
</html>