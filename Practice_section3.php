<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php
   /* step 1 make an if statement with elseif and else to finally display string saying, i love php
    step 2 make a forloop that displays 10 numbers
    step 3 make a switch statement that test againts one condition with 5 cases.
    */

if (4 > 5){
  echo "true";
} elseif (8 > 10){
  echo "false";
} else { echo "I love PHP.";
       }

ECHO "<br>";

for($i=0; $i<10;$i++){
  echo $i."<br>";
}

echo "<br>";

$switch = "pink";
switch ($switch){
  case "red": echo "It's red.";
  break;
  case "green" : echo "It's green.";
  break;
  case "pink" : echo "It's pink";
  break;
  default : echo "none";
}
?>
    <script src="https://replit.com/public/js/replit-badge-v2.js" theme="dark" position="bottom-right"></script>
  </body>
</html>