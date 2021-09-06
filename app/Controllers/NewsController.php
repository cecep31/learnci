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
		echo view('pages/news',$data);
	}
	public function read($id)
	{
		$news = new NewsModel();
		$data['newes'] = $news->where('id',$id)->first();

		// tampilkan 404 error jika data tidak ditemukan
		if (!$data['newes']) {
			throw PageNotFoundException::forPageNotFound();
		}
		echo view('pages/newsdetail', $data);
	}
}
