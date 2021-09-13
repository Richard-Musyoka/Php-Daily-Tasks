<?php 
$serverName="localhost";
$username="root";
$password="";
$db="costke_db";

$connection=new Mysqli($serverName,$username,$password,$db);


if ($connection==true) {
	echo "Connected";
}else
 echo "Failed to connect";

 ?>