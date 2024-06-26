<?php

namespace App\Models;

use CodeIgniter\Model;

class RekamTindakan extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'Rtindakan';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
    'id_rm','id_history','tindakan'
    ,'kode','tarif'
    ,'jumlah'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules = [
        'id_history' => 'required',
        'tindakan' => 'required',
        'kode' => 'required',
        'tarif' => 'required',
        'jumlah' => 'required',
    ];
    
    protected $validationMessages = [
        'id_history' => [
            'required' => 'ID History harus diisi.'
        ],
        'tindakan' => [
            'required' => 'Tindakan harus diisi.'
        ],
        'kode' => [
            'required' => 'Kode Tindakan harus diisi.'
        ],
        'tarif' => [
            'required' => 'Tarif Kasus harus diisi.'
        ],
        'jumlah' => [
            'required' => 'Jumlah harus diisi.'
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
