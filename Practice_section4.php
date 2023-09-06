<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php
/* step1 define a function and make it return a calculation of 2 numbers
    step2 make a function that passes parameters and call it using parameters values
    */
function calculation (){
  $sum = 5+6;
  return $sum;
}

$thesum = calculation();
echo $thesum;
echo "<br>";

function greetings($x){
  echo $x;
}
greetings("hey,riya this side");
?>
    <script src="https://replit.com/public/js/replit-badge-v2.js" theme="dark" position="bottom-right"></script>
  </body>
</html>