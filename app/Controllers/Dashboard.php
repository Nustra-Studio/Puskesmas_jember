<?php namespace App\Controllers;
use App\Models\HistoryModel;
class Dashboard extends BaseController
{
	public function index()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Dashboard']),
			'page_title' => view('partials/page-title', ['title' => 'Dashboard', 'pagetitle' => 'App'])
		];
		return view('index', $data);
	}
	public function LaporanKunjungan(){
		return view('laporan/kunjungan');
	}
	public function Penyakit(){
		return view('laporan/penyakit');
	}
	public function kunjungan (){
		$model = new HistoryModel;
		if(!empty($this->request->getGet('range'))){
			$request =$this->request->getGet('range');
			if($request =="weekly"){
				$data = $model->week();		
				$week = [];
				foreach ($data as $call) {
					$month = date('Y-m-d', strtotime($call->created_at));
					$month = date('d F Y',strtotime($month));
					if (!isset($week[$month])) {
						$week[$month] = 0;
					}
					$week[$month]++;
				}	
				$data = $week;
			}
			elseif($request =="monthly"){
				
				$callData = $model->month();
				$monthlyCallCounts = [];
				foreach ($callData as $call) {
					$month = date('Y F', strtotime($call->created_at));
					if (!isset($monthlyCallCounts[$month])) {
						$monthlyCallCounts[$month] = 0;
					}
					$monthlyCallCounts[$month]++;
				}
				
				$data = $monthlyCallCounts;
			}
		
			elseif($request =="yearly"){
				$callData = $model->findAll();
				$monthlyCallCounts = [];
				foreach ($callData as $call) {
					$month = date('Y', strtotime($call['created_at']));
					if (!isset($monthlyCallCounts[$month])) {
						$monthlyCallCounts[$month] = 0;
					}
					$monthlyCallCounts[$month]++;
				}
				$data=$monthlyCallCounts;
			}
			else{
				$data =['message'=>'data not fond'];
			}
			return $this->response->setJSON($data);	
		}
	}
}