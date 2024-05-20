<?php namespace App\Controllers;
	use App\Models\PasienModel;
class Masterdata extends BaseController
{
    // -------------------------------------------------Pasien------------------------------------------
    public function pasien()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Master Data Pasien']),
			'page_title' => view('partials/page-title', ['title' => 'Masterdata Pasien'])
		];
		return view('datamaster/pasien', $data);
	}
	public function pasiencreate()
	{
		// Add
	}
	
	public function pasienupdate($id)
	{
		// Add
	}
	
	public function pasiendelete($id)
	{
		// Add
	}
    // ----------------------------------------------------Pasien End------------------------------------------

	// -------------------------------------------------user--------------------------------------------
	public function user()
	{
		// Add functionality here
	}
	
	public function usercreate()
	{
		// Add functionality here
	}
	
	public function userupdate($id)
	{
		// Add functionality here
	}
	
	public function userdelete($id)
	{
		// Add functionality here
	}
	public function DataPasien()
{
    $model = new PasienModel();
    $request = $this->request->getGet('id_rm');
    
    if (!empty($request)) {
        $data = $model->where('id_rekammedis', $request)->first();
        
        if ($data) {
            return $this->response->setJSON($data);
        } else {
            return $this->response->setJSON(['message' => 'Not Found'])->setStatusCode(404);
        }
    } else {
        return $this->response->setJSON(['message' => 'Not Found'])->setStatusCode(404);
    }
}

	// ----------------------------------------------------user End------------------------------------------
    
}