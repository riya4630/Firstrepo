
<?php

if(isset($_POST["submit"])){
//echo "yeaahhh!";

  $name = ["riya","prashant","prachi","khyati","ritvik","aaru","rishabh"];
  $minimum = 5;
$username = $_POST["username"];
$password = $_POST["password"];
  
  if(strlen($username) < $minimum){
    echo "username has to be longer";

  }
  if(!in_array($username,$name)) { //not function is not working
    echo "hey,welcome .";

  } else {
    echo " welcome!";
  }
  
  
  //echo $username "<br>";
  //echo $password;
  
}


?>


<!DOCTYPE html>
<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    
<!--$_POST  global variable to pick up data from form in a post format -->
<form action="index.php" method="post"><!--Form_process.php -->
  <input type="text" name="username" placeholder="enter username"><br>
  <input type="password" name="password" placeholder="enter password"><br>
  <input type="submit" name="submit">
  

</form>


    <script src="https://replit.com/public/js/replit-badge-v2.js" theme="dark" position="bottom-right"></script>
  </body>
</html>