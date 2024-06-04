<?php

namespace App\Models;

use CodeIgniter\Model;

class PendaftaranModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'Pendaftaran';
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
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    // Validation
    protected $validationRules = [
        'tanggal_daftar' => 'required|valid_date',
        'id_rekammedis'=> 'required',
        'ktp' => 'required|numeric',
        'bpjs' => 'permit_empty|numeric',
        'nama' => 'required',
        'lahir' => 'required|valid_date',
        'usia' => 'permit_empty|numeric',
        'gender' => 'required',
        'category' => 'required',
        'payment' => 'required',
        'alamat' => 'required',
        'no_hp' => 'required|numeric',
        'agama' => 'required',
        'gol_darah' => 'required',
        'pekerjaan' => 'required',
        'pendidikan' => 'required',
        'ayah' => 'permit_empty',
        'ibu' => 'permit_empty',
        'hubungi' => 'permit_empty',
        'poli' => 'required',
    ];
   // Validation messages
protected $validationMessages = [
    'tanggal_daftar' => [
        'required' => 'The tanggal daftar field is required.',
        'valid_date' => 'The tanggal daftar field must be a valid date format.'
    ],
    'ktp' => [
        'required' => 'The KTP field is required.',
        'numeric' => 'The KTP field must be a number.'
    ],
    'bpjs' => [
        'numeric' => 'The BPJS field must be a number.'
    ],
    'nama' => [
        'required' => 'The Nama field is required.'
    ],
    'lahir' => [
        'required' => 'The Lahir field is required.',
    ],
    // 'usia' => [
    //     'numeric' => 'The Usia field must be a number.'
    // ],
    'gender' => [
        'required' => 'The Gender field is required.',
    ],
    'category' => [
        'required' => 'The Category field is required.'
    ],
    'payment' => [
        'required' => 'The Payment field is required.',
    ],
    'alamat' => [
        'required' => 'The Alamat field is required.'
    ],
    'no_hp' => [
        'required' => 'The No HP field is required.',
    ],
    'agama' => [
        'required' => 'The Agama field is required.',
    ],
    'gol_darah' => [
        'required' => 'The Gol Darah field is required.',
    ],
    'pekerjaan' => [
        'required' => 'The Pekerjaan field is required.'
    ],
    'pendidikan' => [
        'required' => 'The Pendidikan field is required.',
    ],
    'poli' => [
        'required' => 'The Poli field is required.',
    ],
];

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
