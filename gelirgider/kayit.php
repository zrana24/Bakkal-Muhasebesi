<?php
include("gelirgiderveritabani.php");

$gelir = $_POST['gelir'];
$gider = $_POST['gider'];
$aciklama1 = $_POST['aciklama'];
$tarih = $_POST['tarih'];

$aciklama=strtoupper($aciklama1);

if($gider > 0 || $gelir > 0){
    $sql = "INSERT INTO gelir_gider (id, aciklama, tarih, gelir, gider) VALUES (NULL, '".$aciklama."', '".$tarih."','".$gelir."' , '".$gider."')";
    $query = $db->query($sql, PDO::FETCH_ASSOC);
    
    if ($query) {
        echo "success";
    }
}

?>