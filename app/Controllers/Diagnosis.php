<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\DiagnosaModel;

class Diagnosis extends ResourceController
{
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    protected $model;
    function __construct()
    {
        $this->model = new DiagnosaModel();
        $this->namepage =[
			'title_meta' => view('partials/title-meta', ['title' => 'Master Data Diagnosis']),
			'page_title' => view('partials/page-title', ['title' => 'Masterdata Diagnosis'])
		];
    }
    public function index()
    {

		return view('datamaster/Diagnosis', $this->namepage);
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
        $data = [
            'name' => $this->request->getPost('name'),
            'kode' => $this->request->getPost('kode'),
        ];

        $this->model->insert($data);

        return redirect()->to(site_url('/diagnosis'))
        ->with('namepage', $this->namepage)
        ->with('success', "sukses");
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
    public function update($id = null)
    {
        // Ambil data yang akan diupdate
        $user = $this->model->find($id);
    
        // Jika data tidak ditemukan, redirect atau tampilkan pesan kesalahan
        if (!$user) {
            return redirect()->back()->with('error', 'Data not found.');
        }
    
        // Inisialisasi array data
        $data = [];
    
        // Periksa setiap field dan tambahkan ke array data hanya jika nilainya tidak kosong
        if ($this->request->getPost('name')) {
            $data['name'] = $this->request->getPost('name');
        }
    
        if ($this->request->getPost('kode')) {
            $data['kode'] = $this->request->getPost('kode');
        }
    
        // Update data jika ada setidaknya satu field yang diinputkan
        if (!empty($data)) {
            $this->model->update($id, $data);
        }
    
        // return view('datamaster/user', $this->namepage);
        return redirect()->to(site_url('/diagnosis'))
        ->with('namepage', $this->namepage)
        ->with('success', "sukses");

    }
    

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        $data = $this->model->find($id);
        if (!$data) {
            return $this->response->setStatusCode(404)->setBody('Record not found');
        }
        $this->model->delete($id);
        return $this->response->setStatusCode(200)->setBody('Record deleted successfully');
    }
}
