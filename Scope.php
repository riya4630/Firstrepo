<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php
$variable = "outside"; //global scope

function convert(){
  global $variable;
  $variable = "inside";//local scope
}
echo $variable;
echo "<br>";
convert();
echo $variable;
?>
    <script src="https://replit.com/public/js/replit-badge-v2.js" theme="dark" position="bottom-right"></script>
  </body>
</html>