<?php
include("gelirgiderveritabani.php");
$tarih=$_POST['tarih'];

$sql="SELECT SUM(gelir)-SUM(gider) as devir FROM gelir_gider WHERE tarih<'".$tarih."'";
$query=$db->query($sql, PDO::FETCH_ASSOC);
$row =$query->fetchAll(PDO::FETCH_ASSOC);

$devir=$row[0]['devir'];
$ydevir=floor($devir*100)/100;
echo "<h6>DEVİR: ".$ydevir."</h6>";

?>