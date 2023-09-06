<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php
/* step1 use a pre_built math function here and echo it.
    step2 use a pre built string function here and echo it anything.
    step3 use a pre built array function here echo it.
    */
$class = [2,4,5,3,7,9];
echo max($class);
echo "<br>";
print_r($class);
echo "<br>";
$hup = "huuppp";
echo strlen($hup);

echo "<br>";

$values = ['hfjd','fgddufiue',476534,'dsgrf',435657,$hup];
$found = in_array($hup,$values);

if ($found){
  echo "yeahhh!";
}else {
  echo "ohhh!";
}
?>
    <script src="https://replit.com/public/js/replit-badge-v2.js" theme="dark" position="bottom-right"></script>
  </body>
</html>