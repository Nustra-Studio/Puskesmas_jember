<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\PasienModel;
use App\Models\HistoryModel;
use App\Models\PendaftaranModel;

class Pendaftaran extends ResourceController
{
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    protected $model;
    function __construct()
    {
        $this->history =  new HistoryModel();
        $this->model = new PasienModel();
        $this->pendaftaran = New PendaftaranModel();
        $this->namepage =[
			'title_meta' => view('partials/title-meta', ['title' => 'Pendaftaran ']),
			'page_title' => view('partials/page-title', ['title' => 'Pendaftaran'])
		];
    }
    public function index()
    {

		return view('rekammedis/Pendaftaran', $this->namepage);
    }
    public function data(){
        return view('rekammedis/data_rekammedis', $this->namepage);
    }

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        //
    }

    /**
     * Return a new resource object, with default properties
     *
     * @return mixed
     */
    public function new()
    {
        //
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        $model = $this->model;
        $pendaftaran = $this->pendaftaran;
        $check = $model->where('id_rekammedis',$this->request->getPost('id_rekammedis'))->first();
        if ($this->request->getMethod() === 'post' && $this->validate($model->validationRules)) {
            
                if(empty($check)){
                    $model->save($this->request->getPost());
                    $pendaftaran->save($this->request->getPost());
                    $data =[ 'id_rm'=>$this->request->getPost('id_rekammedis')];
                    $this->history->insert($data);
                }
                else{
                    $data =[ 
                        'id_rm'=>$this->request->getPost('id_rekammedis'),
                        'option'=>$this->request->getPost('poli'),
                        'status'=>'pendding'
                    ];
                    $id = $check['id'];
                    $pendaftaran->save($this->request->getPost());
                    $this->history->insert($data);
                    $this->model->update($id, $this->request->getPost());
                }
            return redirect()->to(site_url('pendaftaran'))->with('success', 'Data saved successfully.');
        } else {
            // If validation fails, return to the form with errors
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }
    }
    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        //
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    // public function update($id = null)
    // {
    //     // Ambil data yang akan diupdate
    //     $user = $this->model->find($id);
    
    //     // Jika data tidak ditemukan, redirect atau tampilkan pesan kesalahan
    //     if (!$user) {
    //         return redirect()->back()->with('error', 'Data not found.');
    //     }
    
    //     // Inisialisasi array data
    //     $data = [];
    
    //     // Periksa setiap field dan tambahkan ke array data hanya jika nilainya tidak kosong
    //     if ($this->request->getPost('name')) {
    //         $data['name'] = $this->request->getPost('name');
    //     }
    
    //     if ($this->request->getPost('tanggal_lahir')) {
    //         $data['tanggal_lahir'] = $this->request->getPost('tanggal_lahir');
    //     }
    
    //     if ($this->request->getPost('gender')) {
    //         $data['gender'] = $this->request->getPost('gender');
    //     }
    
    //     if ($this->request->getPost('jabatan')) {
    //         $data['jabatan'] = $this->request->getPost('jabatan');
    //     }
    
    //     if ($this->request->getPost('username')) {
    //         $data['username'] = $this->request->getPost('username');
    //     }
    
    //     // Periksa apakah password baru diinput, jika ya, hash dan tambahkan ke data
    //     $password = $this->request->getPost('password');
    //     if (!empty($password)) {
    //         $data['password'] = password_hash($password, PASSWORD_DEFAULT);
    //     }
    
    //     if ($this->request->getPost('alamat')) {
    //         $data['alamat'] = $this->request->getPost('alamat');
    //     }
    
    //     // Periksa apakah file diupload, jika ya, tambahkan ke data
    //     $file = $this->request->getFile('file');
    //     if ($file->isValid() && !$file->hasMoved()) {
    //         $data['file'] = $file->getName();
    //     }
    
    //     // Update data jika ada setidaknya satu field yang diinputkan
    //     if (!empty($data)) {
    //         $this->model->update($id, $data);
    //     }
    
    //     // return view('datamaster/user', $this->namepage);
    //     return redirect()->to(site_url('/user'))
    //     ->with('namepage', $this->namepage)
    //     ->with('success', "sukses");

    // }
    

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        $data = $this->history->find($id);
        $pasien = $this->pendaftaran->where('id_rekammedis',$data['id_rm'])->where('poli',$data['option'])->first();

        if (!$data) {
            return $this->response->setStatusCode(404)->setBody('Record not found');
        }
        else{
        
        $this->pendaftaran->delete($pasien['id']);
        $this->history->delete($id);
        return $this->response->setStatusCode(200)->setBody('Record deleted successfully');
        // return $this->response->setStatusCode(200)->setBody($pasien);
        }
    }
}
