<?php 

$host='localhost';
$user='root';
$password='';
$database='db_siswa';

$konek_db=mysql_connect($host,$user,$password);
mysql_select_db($database, $konek_db) or die("Tidak ada database yang dipilih!");

?>