<?php
   session_start();

   if(isset($_SESSION['counter'])) {
      $_SESSION['counter'] += 1;
   }else{
      $_SESSION['counter'] = 1;
   }

   $msg = "You have visited this page " . $_SESSION['counter'] . " in this session.";

   session_destroy(); // distruge sesiunea, counter-ul nu mai functioneaza
?>

<html>

   <head>
      <title>Setting up a PHP session</title>
   </head>

   <body>
      <?php  echo  $msg ; ?>
   </body>

</html>
