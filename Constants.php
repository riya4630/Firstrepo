<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php
/* difference between variables and constants : constants value does not change and defined with a predefined function define() .. similarity : both holds a value*/

 $number = 10; //declaration and initialisation at the same time.
$number = 20; // can change variables value
echo $number."<br>";

define ("NAME","riya");
//NAME = "prashant"; // error:because name is a constant and so value must be constant
echo NAME;

// another way of defining a constant:const keyword (boolean,string,float,string)
const CONSTANT = "hello world";
const animal = ["cat","dog","hen"];
// or 
define("animal",array("cat","dog","hen"));
?>
    <script src="https://replit.com/public/js/replit-badge-v2.js" theme="dark" position="bottom-right"></script>
  </body>
</html>