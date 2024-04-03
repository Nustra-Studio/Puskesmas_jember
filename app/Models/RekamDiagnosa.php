<?php

namespace App\Models;

use CodeIgniter\Model;

class RekamDiagnosa extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'Rdiognosa';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
    'id_rm','id_history','diagnosa'
    ,'kode_icd','jenis_kasus'
    ,'jenis_diagnosa'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules = [
        'id_history' => 'required',
        'diagnosa' => 'required',
        'kode_icd' => 'required',
        'jenis_kasus' => 'required',
        'jenis_diagnosa' => 'required',
    ];
    
    protected $validationMessages = [
        'id_history' => [
            'required' => 'ID History harus diisi.'
        ],
        'diagnosa' => [
            'required' => 'Diagnosa harus diisi.'
        ],
        'kode_icd' => [
            'required' => 'Kode Icd harus diisi.'
        ],
        'jenis_kasus' => [
            'required' => 'Jenis Kasus harus diisi.'
        ],
        'jenis_diagnosa' => [
            'required' => 'Jnis Diagnosa Gizi harus diisi.'
        ]
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
}
