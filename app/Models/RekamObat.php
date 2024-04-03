<?php

namespace App\Models;

use CodeIgniter\Model;

class RekamObat extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'Robat';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'id_rm','id_history','obat'
        ,'satuan','catatan'
        ,'dosis','tarif','jumlah'];
    
    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules = [
        'id_history' => 'required',
        'obat' => 'required',
        'satuan' => 'required',
        'dosis' => 'required',
        'tarif' => 'required',
        'jumlah' => 'required'
    ];
    protected $validationMessages   = [
        'id_history' => [
            'required' => 'ID History harus diisi.',
            'numeric' => 'ID History harus berupa angka.'
        ],
        'obat' => [
            'required' => 'Obat harus diisi.'
        ],
        'satuan' => [
            'required' => 'Satuan harus diisi.'
        ],
        'dosis' => [
            'required' => 'Dosis harus diisi.',
        ],
        'tarif' => [
            'required' => 'Tarif harus diisi.',
            'numeric' => 'Tarif harus berupa angka.'
        ],
        'jumlah' => [
            'required' => 'Jumlah harus diisi.',
            'numeric' => 'Jumlah harus berupa angka.'
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
