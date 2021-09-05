<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class News extends Seeder
{
	public function run()
	{
		$news_data = [
			[
				'title' => 'hello ci',
				'content' => 'ssdasdfggg'
			],
			[
				'title' => 'hi ci',
				'content' => 'ssdasdfggg'
			],
			[
				'title' => 'super ci',
				'content' => 'ssdasdfggg'
			],
		];

		foreach($news_data as $data){
			$this->db->table('news')->insert($data);
		}
	}
}
