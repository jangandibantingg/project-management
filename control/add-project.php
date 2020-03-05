<?php
error_reporting(0);
include 'connect.php';
include 'function.php';


if($_POST){
  $salary=numberpost($_POST['salary']);
  mysqli_query($con, "insert into project (project_name, start_date, finish_date, priority, email, salary, file, project_by ) values
                      ('$_POST[project_name]','$_POST[create_at]','$_POST[finish_date]','$_POST[priority]','$_POST[email]','$salary','$_POST[file]','$_POST[project_by]')");
echo "succees";
}

 ?>
