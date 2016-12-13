<?php

$servername = "localhost";
$username = "truth_and_dare";
//$password = "12345678";
//$password = 'mysql';
$database = "zerones_TruthOrDare";


$username = "root";
$password = "mysql";
//$database = "zerones";
$conn= mysqli_connect($servername,$username, $password, $database);
mysqli_query($conn,"set character_set_server='utf8'");
mysqli_query($conn,"set names 'utf8'");
if(!$conn){
    die("connection failed: " . mysqli_error());
}

?>
