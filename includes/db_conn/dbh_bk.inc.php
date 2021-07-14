<?php

$dBserver = "localhost";
$dBusername = "root";
$dBpwd = "";
$dBname = "thedencontacts";

$connbookings = mysqli_connect($dBserver, $dBusername, $dBpwd, $dBname);

if(!$connbookings){
	die("Connection failed: ".mysqli_connect_error());
}


?>
