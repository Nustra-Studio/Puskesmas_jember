<?php namespace App\Controllers;

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
}