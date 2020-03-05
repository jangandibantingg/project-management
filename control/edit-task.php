<?php
require 'connect.php';
$status_id = $_GET["status_id"];
$task_id = $_GET["task_id"];

mysqli_query($con, "update tbl_task set status_id='$status_id' where id='$task_id' ");
// echo "update tbl_task set status_id='$status_id' where id='$status_id'";
?>
