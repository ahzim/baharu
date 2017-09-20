<html>
<body>

<?php

 $x=5;
 $y=10;

 function myTest() //declare a function in php
 {
 global $x,$y; // declare a global variable in php
 $y=$x+$y;
 }

 
 mytest(); // calling out a function
 echo $y; 

 ?>

 </body>
 </html>