<?php

require_once('db.php');

$user_type = ((!empty($_REQUEST['user_type'])) ? $_REQUEST['user_type'] : "");

if ((!empty($user_type))) {
    $truth_or_dare = $conn->query("SELECT * FROM truth_or_dare where user_type = '{$user_type}' ");
    $arraytruth_or_dare_row = array();
    if ($truth_or_dare->num_rows > 0) {
        while ($truth_or_dare_row = $truth_or_dare->fetch_assoc()) {
            $arraytruth_or_dare_row[] = $truth_or_dare_row;
            $output = array('status' => TRUE, "message" => "Successfully Get truth or dare List", "DataList" => $arraytruth_or_dare_row);
        }
    } else {
        $output = array('status' => false, "message" => "No Get data list");
    }
} else {
    $output = array('status' => false, "message" => "missing parameter Please Enter user_type ");
}
print(json_encode($output));
?>