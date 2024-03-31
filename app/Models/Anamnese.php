<?php

namespace App\Models;

use CodeIgniter\Model;

class Anamnese extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'Ranamnese';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields = [
        'id_rm', 'id_history', 'tinggi', 'berat', 'diastole', 'denyut_nadi', 'respirate_rate','gizi','sistole',
        'ket', 'thx', 'abd', 'ext', 'he', 'obat', 'alergi', 'anamnese', 'option', 'more', 'created_at', 'updated_at'
    ];



    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules = [
        'id_history' => 'required',
        'tinggi' => 'required',
        'berat' => 'required',
        'gizi' => 'required',
        'sistole' => 'required',
        'diastole' => 'required',
        'denyut_nadi' => 'required',
        'respirate_rate' => 'required',
        'ket' => 'required',
        'thx' => 'required',
        'abd' => 'required',
        'ext' => 'required',
        'he' => 'required',
        'anamnese' => 'required'
    ];
    protected $validationMessages = [
        'id_history' => [
            'required' => 'ID History harus diisi.'
        ],
        'tinggi' => [
            'required' => 'Tinggi harus diisi.'
        ],
        'berat' => [
            'required' => 'Berat harus diisi.'
        ],
        'gizi' => [
            'required' => 'Status Gizi harus diisi.'
        ],
        'sistole' => [
            'required' => 'Sistole harus diisi.'
        ],
        'diastole' => [
            'required' => 'Diastole harus diisi.'
        ],
        'denyut_nadi' => [
            'required' => 'Denyut nadi harus diisi.'
        ],
        'respirate_rate' => [
            'required' => 'Respirate rate harus diisi.'
        ],
        'ket' => [
            'required' => 'Keterangan harus diisi.'
        ],
        'thx' => [
            'required' => 'THX harus diisi.'
        ],
        'abd' => [
            'required' => 'ABD harus diisi.'
        ],
        'ext' => [
            'required' => 'Ext harus diisi.'
        ],
        'he' => [
            'required' => 'HE harus diisi.'
        ],
        'anamnese' => [
            'required' => 'Anamnese harus diisi.'
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
