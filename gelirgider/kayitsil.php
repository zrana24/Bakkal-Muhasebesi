<?php
include("gelirgiderveritabani.php");

$id=$_POST["id"];

$sql="DELETE FROM gelir_gider WHERE id=".$id;
$query = $db->query($sql, PDO::FETCH_ASSOC);

if($query){
    echo "success";
}
else{
    echo "error";
}
?>