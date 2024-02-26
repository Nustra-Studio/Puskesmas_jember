<?php namespace App\Controllers;

class Masterdata extends BaseController
{
<<<<<<< HEAD
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
	// ----------------------------------------------------user End------------------------------------------
=======
    
>>>>>>> 9cabbd98071b7eb516a66736afdf499132bab616
}