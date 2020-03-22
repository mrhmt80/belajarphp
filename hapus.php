<?php 
include 'db.php';
$id = $_GET['id'];
mysql_query("DELETE FROM siswa WHERE id='$id'")or die(mysql_error());

header("location:data.php");

?>