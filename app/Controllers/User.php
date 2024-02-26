<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\UserModel;

class User extends ResourceController
{
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    protected $model;
    function __construct()
    {
        $this->model = new UserModel();
        $this->namepage =[
			'title_meta' => view('partials/title-meta', ['title' => 'Master Data User']),
			'page_title' => view('partials/page-title', ['title' => 'Masterdata User'])
		];
    }
    public function index()
    {

		return view('datamaster/user', $this->namepage);
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
            'tanggal_lahir' => $this->request->getPost('tanggal_lahir'),
            'gender' => $this->request->getPost('gender'),
            'jabatan' => $this->request->getPost('jabatan'),
            'username' => $this->request->getPost('username'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT), // Hash password sebelum disimpan ke database
            'alamat' => $this->request->getPost('alamat'),
            'foto' => $this->request->getFile('file')->getName(), // Contoh menyimpan nama file, sesuaikan dengan kebutuhan Anda
        ];

        // Upload file ke folder tertentu (opsional)
        $file = $this->request->getFile('file');
        $file->move(ROOTPATH . 'public/uploads');

        $this->model->insert($data);

        return view('datamaster/user', $this->namepage);
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
    
        if ($this->request->getPost('tanggal_lahir')) {
            $data['tanggal_lahir'] = $this->request->getPost('tanggal_lahir');
        }
    
        if ($this->request->getPost('gender')) {
            $data['gender'] = $this->request->getPost('gender');
        }
    
        if ($this->request->getPost('jabatan')) {
            $data['jabatan'] = $this->request->getPost('jabatan');
        }
    
        if ($this->request->getPost('username')) {
            $data['username'] = $this->request->getPost('username');
        }
    
        // Periksa apakah password baru diinput, jika ya, hash dan tambahkan ke data
        $password = $this->request->getPost('password');
        if (!empty($password)) {
            $data['password'] = password_hash($password, PASSWORD_DEFAULT);
        }
    
        if ($this->request->getPost('alamat')) {
            $data['alamat'] = $this->request->getPost('alamat');
        }
    
        // Periksa apakah file diupload, jika ya, tambahkan ke data
        $file = $this->request->getFile('file');
        if ($file->isValid() && !$file->hasMoved()) {
            $data['file'] = $file->getName();
        }
    
        // Update data jika ada setidaknya satu field yang diinputkan
        if (!empty($data)) {
            $this->model->update($id, $data);
        }
    
        echo "<script>
        Swal.fire({
            icon: 'success',
            title: 'Success!',
            text: 'Data has been updated successfully!',
        });
    </script>";
    return view('datamaster/user', $this->namepage);
    }
    

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        $this->model->delete($id);
    
        return view('datamaster/user', $this->namepage);
    }
}
