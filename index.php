<?php
if(isset($_POST["submit"])){
//echo "yes we got it";  
$username = $_POST["username"];
$password = $_POST["password"];
// if($username && $password){ 
//  echo $username;
//  echo $password;
// }else{
//    echo "no";
//}
}
?>
<!DOCTYPE html>
<html>
  <head>
    </head>
  <body>
<div class = "container">
  <div class ="col-sm-6">
    <form action="index.php" method = "post">
      <div class = "form-group">
      <label for="username">username</label>
        <input type="text" name="username" class="form-control">
      </div>
      <div class = "form-group">
        <label for="password">password</label>
      <input type="password" name="password" class="form-control">
      </div>
      <input class="btn btn-primary" type="submit" name ="submit" value="Submit">
    </form>
  </div>
</div>
    <script src="https://replit.com/public/js/replit-badge-v2.js" theme="dark" position="bottom-right"></script>
  </body>
</html>
curl $REPLIT_DB_URL -d 'key = https://replit.com/@ykdojo/db'
curl $REPLIT_DB_URL/key
curl -XDELETE $REPLIT_DB_URL/key
curl "$REPLIT_DB_URL?prefix=key"