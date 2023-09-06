<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php
/*for and while loops do the same thing just in different ways. loops allow us to repeat the code until certain condition is meet.*/ 
for ($i=0;$i<10;$i++){ //index(variable declaration and initialisation),condition,increment
     echo $i;
}
echo "<br>";

$j = 0; //variable declaration and initialisation before the loop
while($j < 5){ 
  echo $j;
  $j++;
}
echo "<br>";
// second example
$number = 1;
while ($number < 10){
  echo "zero"."<br>";
  $number++; // increment operator ++
  //or $number = $number + 1
}
echo "<br>";
/* for each loop works with arrays by going through its value and process them , it will automatically finish once the array is completed*/
$array = ['red','green','yellow'];
foreach($array as $arra){
  echo $arra;
  echo "<br>";
 
}
echo count($array);
?>
    <script src="https://replit.com/public/js/replit-badge-v2.js" theme="dark" position="bottom-right"></script>
  </body>
</html>