<?php

if(isset($_POST ["submit"])){
   $firstname = $_POST["firstName"];
  echo $firstname;
}







?>
<!DOCTYPE html>
<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    

<!-- step1 make a form that submits one value to POST super global -->

<form action = "index.php" method="post">
  <input type ="firstName" name="firstName" placeholder="firstName" >
  <input type = "lastName" name = "lastName" placeholder="lastName">
  <input type ="submit" name="submit">
</form>


    <script src="https://replit.com/public/js/replit-badge-v2.js" theme="dark" position="bottom-right"></script>
  </body>
</html>