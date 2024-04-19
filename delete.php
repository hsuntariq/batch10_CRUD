<?php
$connection = mysqli_connect("localhost", "root", "", "college") or die('connection failed');

$id = $_GET['id'];


$delete = "DELETE FROM student_data WHERE id = $id";
mysqli_query($connection, $delete);
header("Location: http://localhost/CRUD/");

?>