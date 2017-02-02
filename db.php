<?php 

$server = 'localhost:8888';
$user = 'will';
$password = 'toor0'
$db = 'school';

$conn = mysqli_connect($server,$user,$password,$db);

if(!$conn){
	die("Fuck your connection ".mysqli_connect_error());  
}
 ?>
