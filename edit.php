<?php

include 'koneksi.php';

$id = $_POST['id'];
$semester = $_POST['semester'];
$ip = $_POST['ip'];


mysqli_query($koneksi,"update nilai set semester='$semester', ip='$ip' where id='$id'");


header("location:index.php");

?>