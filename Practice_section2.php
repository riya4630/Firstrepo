<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
   <?php 
/* step 1: make 2 variables called number1 and number2 and set 1 to value 10 and the other 20.
    step 2: add the 2 variables and display the sum with echo.
    step 3: make 2 arrays with the same value, one regular and other associative. */
$number1 = 10;
$number2 = 20;
$sum = $number1 + $number2;
echo $sum."<br>";

$array = [1,2,'riya'];
$assoc_array = ['first_value' => 1,'second_value' => 2,'third_value' => 'riya'];
print_r($array);
echo "<br>";
print_r($assoc_array);
echo "<br>";
echo $assoc_array['first_value'];


?>
    <script src="https://replit.com/public/js/replit-badge-v2.js" theme="dark" position="bottom-right"></script>
  </body>
</html>