<?php

$dbhost = "localhost";
$user = "root";
$pass = "";
$dbname = "inmate";

$connection = mysqli_connect($dbhost,$user,$pass,$dbname);

if(mysqli_connect_errno()){
    die ("". mysqli_connect_error());
}
