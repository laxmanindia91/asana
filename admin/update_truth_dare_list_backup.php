<?php
include 'db.php';

$id = $_POST['truth_or_dare_id'];
//$text = $_POST['text'];

$op = isset($_POST['text'])? $_POST['text']: NULL;
$op = isset($_POST['changetext'])? $_POST['changetext']: NULL;
$data = $_POST['changetext'];
//echo $id;
//echo $op;
//echo $data;
if($op == 'truth')
{
	$sql = "update truth_or_dare set type = '$op' where truth_or_dare_id = '$id'";
	mysqli_query($conn, $sql);
}
else if($op == 'dare')
{
	$sql = "update truth_or_dare set type = '$op' where truth_or_dare_id = '$id'";
	mysqli_query($conn, $sql);
}
else if($op == 'kids')
{
	$sql = "update truth_or_dare set user_type = '$op' where truth_or_dare_id = '$id'";
	mysqli_query($conn, $sql);
}
else if($op == 'teens')
{
	$sql = "update truth_or_dare set user_type = '$op' where truth_or_dare_id = '$id'";
	mysqli_query($conn, $sql);
}
else if($op == 'extreme')
{
	$sql = "update truth_or_dare set user_type = '$op' where truth_or_dare_id = '$id'";
	mysqli_query($conn, $sql);
}
else if(isset($_POST['changetext']))
{
	$sql = "update truth_or_dare set text = '$op' where truth_or_dare_id = '$id'";
	mysqli_query($conn, $sql);
}
else
{
	return;
}

//mysql_close();

?>