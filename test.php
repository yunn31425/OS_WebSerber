<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
$conn = mysqli_connect(
  'localhost:3306',
  'root',
  'lab1234!',
  'test1');
$sql = "SELECT * FROM name";
$result = mysqli_query($conn, $sql);
var_dump($result->num_rows);