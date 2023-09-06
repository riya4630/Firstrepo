
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
  if(!in_array($username,$name)){
    echo "hey,welcome .";

  } else {
    echo " welcome!";
  }
  
  
  //echo $username "<br>";
  //echo $password;
  
}


?>

