<?php
include "db.php";
$ids = explode(',',$_POST['list_order']);
print_r($ids);
$sr = 1;
foreach($ids as $id)
{
	$conn->query("UPDATE truth_or_dare SET order_id = '$sr' WHERE truth_or_dare_id = '$id'");
$sr++;	
}

$conn->close();
 ?>