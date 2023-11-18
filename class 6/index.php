<?php 
 //learn constant.

 define("NAME" , "Safaeat");
 define("MOBILE" ,"01515###368");
 define("ID", '2020000###029');

 echo NAME;
 echo "<br>";
 echo MOBILE ."<br>";
 echo ID. "<br><br>";
 
$text = "constant";

 echo "So your full name is ". $text("NAME").".<br>";
 echo "Your contact number is ". $text("MOBILE")."<br>";
 echo "And your id is ". $text("ID").".";

?> 