<?php
//updated since last class to add links to two other pages (was assigned as homework)
  echo "
  <div id=\"nav\">
    <div>
      <a href='index.php'>Home</a>
    </div>
    <div>
      <a href='about.php'>About Marshmallow Hugs</a>
    </div>
    <div>
      <a href='FAQ.php'>FAQ</a>
    </div>
    <div>
      <a href='premade.php'>Sock Designs</a>
    </div>
    <div>
    <a href='order.php'>Place an Order</a>
  </div>
  ";
  if (isset($_SESSION['username'])){
    echo "
    <div>
      <a href='checkout.php'>ETA</a>
    </div>
    <div>
      <a href='signout.php'>Sign Out</a>
    </div>"
    ;
  }else{
    echo "
    <div>
      <a href='signup.php'>Sign Up</a>
    </div>
    <div>
      <a href='signin.php'>Log In</a>
    </div>";
  }
  echo '</div>';
?>