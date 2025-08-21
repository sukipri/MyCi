<?= $this->extend("layout/page_layout") ?>
<?= $this->section('content') ?>
<div class="container">

<?php
   $db = db_connect();
    $query = $db->query('select * from nat_dokter order by dokter_nama_01 asc'); 
echo"<table class='table table-bordered table-striped table-sm'>";
echo"<tr class='table-dark'>";

    echo "<td>Nik</td>";
    echo "<td>SS ID</td>";
    echo "<td>Nama</td>";
    echo "<td>-</td>";
    echo"</tr>";
foreach ($query->getResult('array') as $row) {
    echo"<tr>";

    echo "<td>".$row['dokter_nik_01']."</td>";
    echo "<td>".$row['dokter_idss_01']."</td>";
    echo "<td>".$row['dokter_nama_01']."</td>";
    echo"<td>";
    $query2 = $db->query("select idmain_rjkj1 FROM  nat_rjkj1 WHERE rjkj1_nikdokter_01='$row[dokter_nik_01]'");
    foreach($query2_f = $query2->getResult('array') as $row2){
      echo $row2['idmain_rjkj1'];
    }
    echo"</td>";
    echo"</tr>";
}
echo"</table>";
?>

</div>
<?= $this->endSection() ?>
