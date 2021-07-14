<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";

$mot1=$_POST['mot1'];
$mot2=$_POST['mot2'];
$mot3=$_POST['mot3']; 
$mot4=$_POST['mot4'];
$mot5=$_POST['mot5'];
$mot6=$_POST['mot6'];

// Create connection
$conn = new mysqli("localhost", "root","","mydb");
// Check connection

if(isset($_POST['save'])) 
{ 
$stmt=$conn->prepare("insert into rage(mot1,mot2,mot3,mot4,mot5,mot6)
VALUES('$mot1','$mot2','$mot3','$mot4','$mot5','$mot6')");




$stmt->execute();
  
  echo "The data is inserted correctly..";
}
elseif(isset($_POST['run']))
{
$stmt=$conn->prepare("insert into run (start) values ('1')");
$stmt->execute();
	echo "The data is inserted correctly..";
}
else { echo "try again";}


?>


