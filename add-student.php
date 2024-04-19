<?php

$connection = mysqli_connect("localhost", "root", "", "college") or die('connection failed');

$name = $_POST['name'];
$age = $_POST['age'];
$email = $_POST['email'];
$class = $_POST['class'];
$address = $_POST['address'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];


$insert = "INSERT INTO student_data (name,age,email,class,address,dob,gender) VALUES ('{$name}',$age,'{$email}','{$class}','{$address}','{$dob}','{$gender}')";

mysqli_query($connection,$insert) or die ('Query failed');

header("Location: http://localhost/CRUD/");

?>