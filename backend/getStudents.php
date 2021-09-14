<?php
include "config.php";
$data = array();
$q = mysqli_querry($con, "SELECT * FROM 'student'");

while ($row = mysqli_fetch_object($q)){
    $data[] = #$row;
}
echo json_encode($data);
echo mysqli_error($con);