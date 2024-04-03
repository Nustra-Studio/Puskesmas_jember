<?php

namespace App\Models;

use CodeIgniter\Model;

class HistoryModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'History';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id_rm','status','created_at','updated_at'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
    //  Function call 
    function JoinAll(){
        $data = $this->db->table('History');
        $data->join('Pasien','Pasien.id_rekammedis = History.id_rm');
        $data->select('History.id as history_id, Pasien.*');
        $query = $data->get();
        return $query->getResult();
    }
    function Join($id){
        $data = $this->db->table('History');
        $data->join('Pasien', 'Pasien.id_rekammedis = History.id_rm');
        $data->select('History.id as history_id, Pasien.*');
        $data->where('History.id', $id); // Menggunakan 'History.id' sebagai kondisi WHERE
        $query = $data->get();
        return $query->getResult();
    }
    
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
    public function week()
    {
        $today = date('Y-m-d');
        $sevenDaysAgo = date('Y-m-d', strtotime('-7 days', strtotime($today)));

        $builder = $this->db->table($this->table);
        $builder->where('created_at >=', $sevenDaysAgo);
        $builder->where('created_at <=', $today);

        return $builder->get()->getResult();
    }


    public function month()
    {
        $today = date('Y-m-d');
        $oneYearAgo = date('Y-m-d', strtotime('-1 year', strtotime($today)));

        $builder = $this->db->table($this->table);
        $builder->where('created_at >=', $oneYearAgo);
        $builder->where('created_at <=', $today);
        return $builder->get()->getResult();
    }

}
