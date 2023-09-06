<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php
 /* functions helps us organise our code into block of code and we can use that code over and over again,just by naming it and referring to it by name.
    just like variables ,we use a name and then we enclose values into it. */
function riya(){
  echo "riya"."<br>";
}

function calculate(){
 echo 2 * 4;
}

function init(){
 echo "hello init"."<br>";
  riya();
  calculate();
}

init();


?>
    <script src="https://replit.com/public/js/replit-badge-v2.js" theme="dark" position="bottom-right"></script>
  </body>
</html>