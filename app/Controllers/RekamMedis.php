<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PasienModel;
use App\Models\HistoryModel;
use App\Models\ObatModel;
use App\Models\AlergiObat;
use App\Models\Anamnese;
use App\Models\RekamDiagnosa;
use App\Models\RekamTindakan;
use App\Models\RekamObat;

class RekamMedis extends BaseController
{
    protected $model;
    protected $namepage;
    function __construct()
    {
        $this->model = new PasienModel();
        $this->history = new HistoryModel();
        $this->obat = new ObatModel();
        $this->alergi = new AlergiObat();
        $this->anamnese = new Anamnese();
        $this->diagnosa = new RekamDiagnosa();
        $this->Rtindakan = new RekamTindakan();
        $this->Robat = new RekamObat();
        $this->namepage =[
			'title_meta' => view('partials/title-meta', ['title' => 'Rekam_medis ']),
			'page_title' => view('partials/page-title', ['title' => 'Rekam Medis']),
            'RekamMedis' => 'rekammedis',
		];
    }
    public function index()
    {
        $id = $this->request->getGet('id');
        $id = $id ?? 0;
        $data =$this->history->find($id);
        if(empty($data)){
            return redirect()->back();
        }
        $this->namepage['id_perserta'] = $id;
        return view('rekammedis/Pasien', $this->namepage);
    }
    public function CetakKartu(){
        $id = $this->request->getGet('id');
        $id = $id ?? 1;
        $data =$this->model->find($id);
        if(empty($data)){
            return redirect()->back();
        }
        $this->namepage['data'] = $data;
        return view('rekammedis/kartu', $this->namepage);
    }

// return view
        public function pasien()
        {
            $id = $this->request->getGet('id');
            $id = $id ?? 0;
            $data =$this->history->find($id);
            if(empty($data)){
                return redirect()->to(site_url('pendaftaran'));
            }
            $this->namepage['id_perserta'] = $id;
            $this->namepage['page_title'] =  view('partials/page-title', ['title' => 'Rekam Medis Pasien']);
            return view('rekammedis/Pasien', $this->namepage);
        }
        public function anamnese()
        {
            $id = $this->request->getGet('id');
            $id = $id ?? 0;
            $data =$this->history->find($id);
            if(empty($data)){
                return redirect()->to(site_url('pendaftaran'));
            }
            $this->namepage['page_title'] =  view('partials/page-title', ['title' => 'Rekam Medis Anamnese']);
            $this->namepage['id_perserta'] = $id;
            return view('rekammedis/Anamnese', $this->namepage);
        }
        public function tindakan()
        {
            $id = $this->request->getGet('id');
            $id = $id ?? 0;
            $data =$this->history->find($id);
            if(empty($data)){
                return redirect()->to(site_url('pendaftaran'));
            }
            $this->namepage['id_perserta'] = $id;
            $this->namepage['page_title'] =  view('partials/page-title', ['title' => 'Rekam Medis Tindakan']);
            return view('rekammedis/Tindakan', $this->namepage);
        }
        public function obat()
        {
            $id = $this->request->getGet('id');
            $id = $id ?? 0;
            $data =$this->history->find($id);
            if(empty($data)){
                return redirect()->to(site_url('pendaftaran'));
            }
            $this->namepage['id_perserta'] = $id;
            $this->namepage['page_title'] =  view('partials/page-title', ['title' => 'Rekam Medis Obat']);
            return view('rekammedis/Obat', $this->namepage);
        }
        public function diagnosis()
        {
            $id = $this->request->getGet('id');
            $id = $id ?? 0;
            $data =$this->history->find($id);
            if(empty($data)){
                return redirect()->to(site_url('pendaftaran'));
            }
            $this->namepage['id_perserta'] = $id;
            $this->namepage['page_title'] =  view('partials/page-title', ['title' => 'Rekam Medis Diagnosis']);
            return view('rekammedis/Diagnosis', $this->namepage);
        }
    //core  
        // pasien
        public function Cpasien()
        {
            $model = $this->model;
            $check = $model->where('id_rekammedis',$this->request->getPost('id_rekammedis'))->first();
            $ids =$this->request->getPost('id'); 
            if ($this->request->getMethod() === 'post' && $this->validate($model->validationRules)) {
                        $id = $check['id'];
                        $this->model->update($id, $this->request->getPost());
                return redirect()->to(site_url("/rekam-pasien?id=$ids"))->with('success', 'Data saved successfully.');
            } else {
                // If validation fails, return to the form with errors
                return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
            }
        }
        public function alergi(){
            $data =$this->request->getJSON();
            $model = $this->obat;
            $alergi = $this->alergi;
            $datas = $model->where('id',$data->alergi)->first();
            $push = [
                        'name'=>$datas['name'],
                        'kode'=>$datas['kode'],
                        'id_history'=>$data->id
                    ];
            $alergi->insert($push);
            return $this->response->setJSON(['status' => 'success', 'message' => 'Alergi added successfully']);
        }
        public function DistoryAlergi($id){
            $data = $this->alergi->find($id);
            if (!$data) {
                return $this->response->setStatusCode(404)->setBody('Record not found');
            }
            $this->alergi->delete($id);
            return $this->response->setStatusCode(200)->setBody('Record deleted successfully');
        }
        public function DistoryDiagnosa($id){
            $data = $this->diagnosa->find($id);
            if (!$data) {
                return $this->response->setStatusCode(404)->setBody('Record not found');
            }
            $this->diagnosa->delete($id);
            return $this->response->setStatusCode(200)->setBody('Record deleted successfully');
        }
        public function Canamnese(){
            $model = $this->anamnese;
            $check = $model->where('id_history',$this->request->getPost('id_history'))->first();
            if ($this->request->getMethod() === 'post' && $this->validate($model->validationRules)) {
                if($this->request->getPost('status') == "create" ){
                    $model->insert($this->request->getPost());
                }
                else{
                    $model->update($check->id,$this->request->getPost());
                }
            return redirect()->back()->withInput()->with('success', 'Data saved successfully.');
            } else {
                // If validation fails, return to the form with errors
                return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
            }
        }
        public function Cdiagnosa(){
            $model = $this->diagnosa;
            if ($this->request->getMethod() === 'post' && $this->validate($model->validationRules)) {
                $model->insert($this->request->getPost());
            
            return redirect()->back()->withInput()->with('success', 'Data saved successfully.');
        } else {
            // If validation fails, return to the form with errors
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }
        }
        public function Ctindakan(){
            $model = $this->Rtindakan;
            if ($this->request->getMethod() === 'post' && $this->validate($model->validationRules)) {
                $model->insert($this->request->getPost());
            
            return redirect()->back()->withInput()->with('success', 'Data saved successfully.');
        } else {
            // If validation fails, return to the form with errors
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }
        }
        public function DistoryTindakan($id){
            $data = $this->Rtindakan->find($id);
            if (!$data) {
                return $this->response->setStatusCode(404)->setBody('Record not found');
            }
            $this->Rtindakan->delete($id);
            return $this->response->setStatusCode(200)->setBody('Record deleted successfully');
        }
        public function Cobat(){
            $model = $this->Robat;
            if ($this->request->getMethod() === 'post' && $this->validate($model->validationRules)) {
                $model->insert($this->request->getPost());
            
            return redirect()->back()->withInput()->with('success', 'Data saved successfully.');
        } else {
            // If validation fails, return to the form with errors
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }
        }
        public function DistoryObat($id){
            $data = $this->Robat->find($id);
            if (!$data) {
                return $this->response->setStatusCode(404)->setBody('Record not found');
            }
            $this->Robat->delete($id);
            return $this->response->setStatusCode(200)->setBody('Record deleted successfully');
        }
}   
