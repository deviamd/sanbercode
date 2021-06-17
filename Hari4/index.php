<?php
 require_once('animal.php');
 require_once('frog.php');
 require_once('ape.php');

 $shaun= new shaun("shaun");

 echo "Name : ".$shaun->name ."<br>";
 echo "legs : ".$shaun->legs ."<br>";
 echo "cold blooded : ".$shaun->cold_blooded ."<br> <br>" ;

 $frog= new frog("buduk");
 
 echo "Name : ".$frog->name ."<br>";
 echo "legs : ".$frog->legs ."<br>";
 echo "cold blooded : ".$frog->cold_blooded ."<br>";
 echo "jump : ".$frog->jump . "<br> <br>";

 $ape= new ape("kera sakti");
 echo "Name : ".$ape->name ."<br>";
 echo "legs : ".$ape->legs ."<br>";
 echo "cold blooded : ".$ape->cold_blooded ."<br>";
 echo "Yell : " .$ape->Yell . "<br> <br>";

?>