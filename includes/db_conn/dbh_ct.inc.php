<?php

$dBserver = "localhost";
$dBusername = "root";
$dBpwd = "";
$dBname = "thedencontacts";

$conncontacts = mysqli_connect($dBserver, $dBusername, $dBpwd, $dBname);

if(!$conncontacts){
	die("Connection failed: ".mysqli_connect_error());
}


