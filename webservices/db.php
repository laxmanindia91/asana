<?php

$servername = "armyproofdb.cj11f3mugl9w.us-east-1.rds.amazonaws.com";
$username = "archisec1";
$password = "$3cur34L!f3!";
$database = "archisec_TruthOrDare";


//$username = "root";
//$password = "mysql";
//$database = "zerones";
$conn= mysqli_connect($servername,$username, $password, $database);
mysqli_query($conn,"set character_set_server='utf8'");
mysqli_query($conn,"set names 'utf8'");
if(!$conn){
    die("connection failed: " . mysqli_error());
}

?>
