<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\NewsModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class NewsController extends BaseController
{
	public function index()
	{
		// buat object model $news
		$news = new NewsModel();
		/*
         siapkan data untuk dikirim ke view dengan nama $newses
         dan isi datanya dengan news yang sudah terbit
        */
		$data['newes'] = $news->findAll();
		echo view('pages/news', $data);
	}
	public function read($id)
	{
		$news = new NewsModel();
		$data['newes'] = $news->where('id', $id)->first();

		// tampilkan 404 error jika data tidak ditemukan
		if (!$data['newes']) {
			throw PageNotFoundException::forPageNotFound();
		}
		echo view('pages/newsdetail', $data);
	}
	public function create()
	{
		session();
		$data = [
			'validation'=> \Config\Services::validation()
		];
		return view('pages/newsadd',$data);
	}
	public function store()
	{
		helper(['form', 'url']);
		$validation = $this->validate([
			'title' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'masukan judul post'
				]

			],
			'content' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'masukan conent main'
				]
			],
			'author' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'masukan conent main'
				]
			]
		]);

		if (!$validation) {
			return redirect()->to(base_url('news-add'))->withInput()->with('validation', $this->validator->getErrors());
		} else {
			$newsmodel = new NewsModel();
			$newsmodel->insert([
				'title' => $this->request->getPost('title'),
				'content' => $this->request->getPost('content')
			]);

			session()->setFlashdata('message', 'berhasil');
			return redirect()->to(base_url('news'));
		}
	}
}
