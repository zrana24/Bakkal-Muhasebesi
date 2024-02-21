<?php
include("gelirgiderveritabani.php");

if ($_POST["tarih"]) {
    $tarih = $_POST["tarih"];
} else {
    $tarih = date('Y-m-d');
}

$sql = "SELECT * FROM gelir_gider WHERE tarih ='".$tarih."'";
$query=$db->query($sql, PDO::FETCH_ASSOC);
$row =$query->fetchAll(PDO::FETCH_ASSOC);

$i = 1;
echo '<table class="table">
            <thead>
                <tr style="background-color:rgb(128, 128, 128); color:white;">
                    <th>SIRA</th>
                    <th>AÇIKLAMA</th>
                    <th>TARİH</th>
                    <th>GELİR</th>
                    <th>GİDER</th>
                    <th>SEÇENEK</th>
                </tr>
            </thead>
            <icerik>';

foreach ($row as $rowK) {
    $etarih=$rowK["tarih"];
    $ytarih=date("d-m-Y",strtotime($etarih));

    echo '<tr>
            <td>'.$i.'</td>
            <td>'.$rowK["aciklama"].'</td>
            <td>'.$ytarih.'</td>
            <td>'.$rowK["gelir"].'</td>
            <td>'.$rowK["gider"].'</td>
            <td><a href="javascript:void(0);" class="sil-link" data-id="'.$rowK['id'].'">SİL</a></td>
        </tr>';
        //javascript:void(0) =>Sayfa yenilenmeden işlemi gerçekleştirir.Sahta urldir.
    $i++;
}
echo '</icerik></table>';
?>
