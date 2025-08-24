<?php

namespace App\Models;

use CodeIgniter\Model;

class Data1Model extends Model
{
    protected $table      = 'nat_dokter';
    protected $primaryKey = 'idmain_dokter';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['idmain_dokter','dokter_nik_01','dokter_idss_01','dokter_nama_01','dokter_jenis_01'];
}
