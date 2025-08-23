<?= $this->extend("layout/page_layout") ?>
<?= $this->section('content') ?>
<br>
<div class="container">
<form method="post">
    <div class="card">
  <div class="card-header">
    Practicioner
  </div>
  <div class="card-body">
    <!--  -->
        <div class="input-group mb-3" style="max-width:30rem;">
            <span class="input-group-text" id="basic-addon1">ID</span>
            <input type="number" name="idin1" class="form-control" placeholder="Entri ID Civilian">
        </div>
        <div class="input-group mb-3" style="max-width:30rem;">
            <span class="input-group-text" id="basic-addon1">ID SS</span>
            <input type="number" class="form-control" name="ssin1" placeholder="Entri ID ">
        </div>
        <div class="input-group mb-3" style="max-width:30rem;">
            <span class="input-group-text" id="basic-addon1">Name</span>
            <input type="text" class="form-control" name="namein1" placeholder="Name...">
        </div>
        <br>
        <button class="btn btn-success btn-sm" name="btn_simpanprac">Save Data</button>
    <!--  -->
  </div>
</div>
</form>
    <?PHP 
        $din1 = @$_POST['idin1'];
        $ssin1 =@$_POST['ssin1'];
        $namein1 = @$_POST['namein1'];
        if(isset($_POST['btn_simpanproc'])){
            $db = db_connect();
            $query = $db->query("insert into nat_dokter(idmain_dokter,dokter_nik_01,dokter_idss_01,dokter_nama_01)VALUES('TEST1001','$din1','$ssin1','$namein1')"); 

        }
    ?>


</div>
<?= $this->endSection() ?>
