<?php

$dBserver = "localhost";
$dBusername = "root";
$dBpwd = "";
$dBname = "thedenofsted";

$connofsted = mysqli_connect($dBserver, $dBusername, $dBpwd, $dBname);

if(!$connofsted){
	die("Connection failed: ".mysqli_connect_error());
}


