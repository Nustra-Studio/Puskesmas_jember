<?php

namespace App\Models;

use CodeIgniter\Model;

class PasienModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'Pasien';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields = [
        'id_rekammedis',
        'tanggal_daftar',
        'ktp',
        'bpjs',
        'nama',
        'lahir',
        'usia',
        'gender',
        'category',
        'payment',
        'alamat',
        'no_hp',
        'agama',
        'gol_darah',
        'pekerjaan',
        'pendidikan',
        'ayah',
        'ibu',
        'hubungi',
        'poli',
        'created_at',
        'updated_at',
    ];
    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function last() {
            $data = $this->select('id_rekammedis')
                        ->orderBy('id_rekammedis', 'DESC')
                        ->limit(1)
                        ->first();
    
        if ($data === null) {
            return '01-01-01'; // Nomor rekam medis pertama
        }
                    
        $parts = explode('-', $data['id_rekammedis']); // Extracting id_rekammedis from the data object
        $section1 = intval($parts[0]);
        $section2 = intval($parts[1]);
        $section3 = intval($parts[2]);  
        
        if ($section1 < 99 && $section2 < 99 && $section3 < 99) {
            $section3++;
        } elseif ($section1 < 99 && $section2 < 99 && $section3 >= 99) {
            $section3 = 1;
            $section2++;
        } elseif ($section1 < 99 && $section2 >= 99 && $section3 >= 99) {
            $section3 = 1;
            $section2 = 1;
            $section1++;
        }        
        return sprintf('%02d-%02d-%02d', $section1, $section2, $section3);        
    }
    
}
