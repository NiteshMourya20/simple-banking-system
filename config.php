<?php

$username='root';
$password='';
$server='localhost';
$db='banking_customers';


$con= mysqli_connect($server,$username,$password,$db);

if ($con){
	echo "connection sucessful";
} else{
	echo "no connection";
}

?>