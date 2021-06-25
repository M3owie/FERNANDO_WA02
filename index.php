<?php
     echo "<center><h1>ZEZAR IAN FERNANDO</center></h1><br>";
     echo"<br>";
     echo"<br>";
     echo "<center><h1>BSIT 1</center></h1><br>";
     echo"<br>";
     echo"<br>";
     // Data types
     $num1 = 143;
     var_dump($num1);
     echo"<br>";
     // Constant
define("GREETING", "Welcome to my village!");
echo GREETING;
echo"<br>";
// Array
$cars = array("Honda", "BMW", "Toyota"); 
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
echo"<br>";
// Operators
$num2 = 20;  
$num2 += 10;

echo $num2;
echo"<br>";
// Function
function writeMsg() {
     echo "Hello po sir PENA!";
   }
   
   writeMsg();
   echo"<br>";
   
   // If else,else if
   $days = date("H");

   if ($days < "20") {
     echo "Have a good day!";
   } else {
     echo "Have a good night!";
   }  
   echo"<br>";
   
   // Switch
   $favcolor = "blue";
         
switch ($favcolor) {
    case "red":
      echo "Your favorite color is red!";
      break;
    case "blue":
      echo "Your favorite color is blue!";
      break;
    default:
      echo "Your favorite color is neither red and blue";
  }
?>