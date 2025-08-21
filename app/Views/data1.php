<?= $this->extend("layout/page_layout") ?>
<?= $this->section('content') ?>
<div class="container">

<?php
   $db = db_connect();
    $query = $db->query('select * from nat_dokter order by dokter_nama_01 asc'); 

foreach ($query->getResult('array') as $row) {
    echo $row['dokter_nik_01'];
    echo $row['dokter_idss_01'];
    echo $row['dokter_nama_01'];
    echo"<br>";
}
?>

</div>
<?= $this->endSection() ?>
