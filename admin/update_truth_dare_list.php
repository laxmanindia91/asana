<?php
include 'db.php';
error_reporting(0);
$id = $_POST['truth_or_dare_id'];
//$text = $_POST['text'];

$op = isset($_POST['text'])? $_POST['text']: NULL;
$op1 = isset($_POST['changetext'])? $_POST['changetext']: NULL;

if($op == 'truth')
{
	$sql = "update truth_or_dare set type = '$op' where truth_or_dare_id = '$id'";
	mysqli_query($conn, $sql);
	echo $op;
}
else if($op == 'dare')
{
	$sql = "update truth_or_dare set type = '$op' where truth_or_dare_id = '$id'";
	mysqli_query($conn, $sql);
	echo $op;
}
else if($op == 'kids')
{
	$sql = "update truth_or_dare set user_type = '$op' where truth_or_dare_id = '$id'";
	mysqli_query($conn, $sql);
	echo $op;
}
else if($op == 'teens')
{
	$sql = "update truth_or_dare set user_type = '$op' where truth_or_dare_id = '$id'";
	mysqli_query($conn, $sql);
	echo $op;
}
else if($op == 'extreme')
{
	$sql = "update truth_or_dare set user_type = '$op' where truth_or_dare_id = '$id'";
	mysqli_query($conn, $sql);
	echo $op;
}
else if(isset($_POST['changetext']))
{
	$sql = "update truth_or_dare set text = '$op1' where truth_or_dare_id = '$id'";
	mysqli_query($conn, $sql);
	echo $op1;
}
else if(isset($_POST['addrow']))
{
	$rowSQL = mysqli_query($conn ,  "SELECT MAX(order_id) AS max FROM truth_or_dare" );
$row = mysqli_fetch_array( $rowSQL );
$largestNumber = $row['max'];
$ord_id = $largestNumber+1;

$sql = "INSERT INTO truth_or_dare (type, user_type,text,order_id) VALUES ('Truth', 'Kids','','1')";
$rs = mysqli_query($conn, $sql);
$id1 = mysqli_insert_id($conn);
echo $id1;
return $ord_id;

}

else
{
	return;
}

//mysql_close();
?>