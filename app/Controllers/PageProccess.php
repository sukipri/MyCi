<?php

namespace App\Controllers;
use \App\Models\Data1Models;
use CodeIgneter\Exceptions\PageNotFoundException;
use CodeIgneter\Database\RawSql;
class PageProccess extends BaseController
{
     public function data1INpost()
    {
        // lakukan validasi
        $validation =  \Config\Services::validation();
        $validation->setRules(['dokter_nik_01' => 'required']);
        $isDataValid = $validation->withRequest($this->request)->run();

        // jika data valid, simpan ke database
        // if($isDataValid){
        //     $news = new RawSql('DEFAULT'),
        //     $news->insert([
        //         "idmain_dokter" => $this->request->getPost('idmain_dokter'),
        //         "dokter_nik_01" => $this->request->getPost('dokter_nik_01'),
        //         "dokter_idss_01" => $this->request->getPost('dokter_idss_01'),
        //         "dokter_nama_01" => $this->request->getPost('dokter_nama_01'),
        //         "dokter_jenis_01" => $this->request->getPost('dokter_jenis_01')
        //     ]);
        //     #return redirect('data1INpost');
        // }
             $db = db_connect();
            $builder = $db->table('nat_dokter');
        $data = [
                "idmain_dokter" => $this->request->getPost('idmain_dokter'),
                "dokter_nik_01" => $this->request->getPost('dokter_nik_01'),
                "dokter_idss_01" => $this->request->getPost('dokter_idss_01'),
                "dokter_nama_01" => $this->request->getPost('dokter_nama_01'),
                "dokter_jenis_01" => $this->request->getPost('dokter_jenis_01')
                ];

                    $builder->insert($data);
        
        $data['thalaman'] = "Proccessing Data";
        echo view('data1INpost',$data);
        }
		
        
    
}
