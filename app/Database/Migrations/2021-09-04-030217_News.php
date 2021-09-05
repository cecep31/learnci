<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use phpDocumentor\Reflection\Types\This;

class News extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id' => [
				'type' => 'INT',
				'constraint' => '5',
				'unsigned'       => true,
				'auto_increment' => true
			],
			'title'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'author'      => [
				'type'           => 'VARCHAR',
				'constraint'     => 100,
				'default'        => 'John Doe',
			],
			'content' => [
				'type'           => 'TEXT',
				'null'           => true,
			],
			'status'      => [
				'type'           => 'ENUM',
				'constraint'     => ['published', 'draft'],
				'default'        => 'draft',
			],
		]);
		//membuat primary key
		$this->forge->addKey('id',TRUE);
		// membuat tabel new
		$this->forge->createTable('news', TRUE);
	}

	public function down()
	{
		$this->forge->dropTable('news');
	}
}
