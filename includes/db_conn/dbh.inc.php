<?php

$dBserver = "localhost";
$dBusername = "root";
$dBpwd = "";
$dBname = "thedencontacts";

$connusers = mysqli_connect($dBserver, $dBusername, $dBpwd, $dBname);

if(!$connusers){
	die("Connection failed: ".mysqli_connect_error());
}


?>
