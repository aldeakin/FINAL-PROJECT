<?php
session_start();

if (!isset($_SESSION['username'])){
  $username=$_POST['username'];
  $password=$_POST['password'];
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
$result=mysqli_query($link, "SELECT * FROM users WHERE username='$username' AND password='$password'");
if (mysqli_num_rows($result)===1){
  $_SESSION['username']=$username;
}
else{
  echo $result;
  echo "<br>";
  echo $link->error;
  // header('location:signup.php');
  die();
}
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
                  . "(username, password)"
                  . " VALUES "
                  ."("
                  . "\"" . $_POST['username'] . "\","
                  . "\"" . $_POST['password'] . "\","
                  . ")";
*/

$querystring = "INSERT INTO users (username, password)" 
."VALUES (?, ?)";
$stmt=mysqli_prepare($link, $querystring);
mysqli_stmt_bind_param($stmt,"ss", $_POST['username'], $_POST['password']);
$dataset = mysqli_stmt_execute($stmt2);
mysqli_stmt_execute($stmt);

$querystring2 = "SELECT * FROM username WHERE username=?";

$result = mysqli_stmt_get_result($stmt);
$rows = mysqli_num_rows($result);

  if(mysqli_stmt_execute($stmt)){
    echo "You have been logged in.";
    $_SESSION['isloggedin']=true;
    $_SESSION['userdisplay']=$_POST['username'];
  } else {
  }
  
?>
<img src="http://cdn.shopify.com/s/files/1/1061/1924/products/Smiling_Face_Emoji_grande.png?v=1571606036" class="center">
</body>
</html>