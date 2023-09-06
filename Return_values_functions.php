<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php
function addNumbers($number1,$number2){
  $sum = $number1 + $number2;
  return $sum;
}
$result = addNumbers(2,3);
echo $result;
$result = addNumbers(100+$result);
echo $result;
?>
    <script src="https://replit.com/public/js/replit-badge-v2.js" theme="dark" position="bottom-right"></script>
  </body>
</html>