<?php 

$server = 'localhost';
$user = 'root';
$password = '';
$db = 'crudFull';

$con = mysqli_connect($server,$user,$password,$db);

if(!$con){
	echo "No Connection";
}

?>