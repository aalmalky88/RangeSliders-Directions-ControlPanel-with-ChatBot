<?php
$conn= new mysqli("localhost","root","","rage");


if(isset($_POST['r'])){
	 $stmt=$conn->prepare("insert into rage(Direction) values('r')");
	 $stmt->execute();
	 echo "r";
 }
 elseif(isset($_POST['l'])){
	 	 $stmt=$conn->prepare("insert into rage(Direction) values('l')");
	 $stmt->execute();
	 echo"l";
 }
 elseif(isset($_POST['f'])){
	 	 $stmt=$conn->prepare("insert into rage(Direction) values('f')");
	 $stmt->execute();
     echo"f";
 }
 elseif (isset($_POST['b'])){
	 	 $stmt=$conn->prepare("insert into rage(Direction) values('b')");
	 $stmt->execute();
     echo "b";
 }
 elseif(isset($_POST['s'])){
	 	 $stmt=$conn->prepare("insert into rage(Direction) values('s')");
	 $stmt->execute();
	 echo "s";
 }
 else{ echo"please try again";}
?>
