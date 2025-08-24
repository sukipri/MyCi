<?= $this->extend("layout/page_layout") ?>
<?= $this->section('content') ?>
<br>
<div class="container">
<form method="post" action="<?= base_url('data1INpost'); ?>">
    <div class="card">
  <div class="card-header">
    Practicioner
  </div>
  <div class="card-body">
    <!--  -->
        <div class="input-group mb-3" style="max-width:30rem;">
            <span class="input-group-text" id="basic-addon1">ID</span>
            <input type="text" readonly name="idmain_dokter" value="TEST1001" class="form-control" placeholder="Entri ID Civilian">
        </div>
        <div class="input-group mb-3" style="max-width:30rem;">
            <span class="input-group-text" id="basic-addon1">ID Identity</span>
            <input type="number" class="form-control" autocomplete="off" name="dokter_nik_01" placeholder="Entri ID ">
        </div>
        <div class="input-group mb-3" style="max-width:30rem;">
            <span class="input-group-text" id="basic-addon1">ID IHS</span>
            <input type="text" class="form-control"  autocomplete="off" name="dokter_idss_01" placeholder="Enter...">
        </div>
        <div class="input-group mb-3" style="max-width:30rem;">
            <span class="input-group-text" id="basic-addon1">Name</span>
            <input type="text" class="form-control" autocomplete="off" name="dokter_nama_01" placeholder="Enter...">
        </div>
        <div class="input-group mb-3" style="max-width:30rem;">
            <span class="input-group-text" id="basic-addon1">Name</span>
            <input type="text" readonly class="form-control" name="dokter_jenis_01" value="1" placeholder="Enter...">
        </div>
        <br>
        <button class="btn btn-success btn-sm" name="btn_simpanprac">Save Data</button>
    <!--  -->
  </div>
</div>
</form>
    <?PHP 
        // $din1 = @$_POST['idin1'];
        // $ssin1 =@$_POST['ssin1'];
        // $namein1 = @$_POST['namein1'];
        // if(isset($_POST['btn_simpanproc'])){
        //     $db = db_connect();
        //     $query = $db->query("insert into nat_dokter(idmain_dokter,dokter_nik_01,dokter_idss_01,dokter_nama_01)VALUES('TEST1001','$din1','$ssin1','$namein1')"); 

        // }
    ?>


</div>
<?= $this->endSection() ?>
