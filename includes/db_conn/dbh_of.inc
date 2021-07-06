<?php

$dBserver = "localhost";
$dBusername = "root";
$dBpwd = "";
$dBname = "thedenofsted";

$conncontacts = mysqli_connect($dBserver, $dBusername, $dBpwd, $dBname);

if(!$conncontacts){
	die("Connection failed: ".mysqli_connect_error());
}


