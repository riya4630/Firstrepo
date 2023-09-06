<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php
$colour = 10;
switch ($colour){
  case "red":
  echo "red";
break;
case "green" :
echo "green ";
break;
case "yellow":
echo "yellow";
break;
  case 10 :
  echo "yes,it's a number";
  break;
default : echo 'none';
  break;
}
?>
    <script src="https://replit.com/public/js/replit-badge-v2.js" theme="dark" position="bottom-right"></script>
  </body>
</html>