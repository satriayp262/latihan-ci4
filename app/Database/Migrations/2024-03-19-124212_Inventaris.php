<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Inventaris extends Migration
{
    public function up()
    {
        $this->forge->addField([
			'id_barang'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'nama_brg'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'jumlah'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '10',
			],
			'kondisi'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '50',
			],
			'created_at' => [
				'type'           => 'DATETIME',
				'null'           => true,
			],
			'updated_at' => [
				'type'           => 'DATETIME',
				'null'           => true,
			]
		]);
		$this->forge->addPrimaryKey('id_barang');
		$this->forge->createTable('inventaris');
	}
 
	public function down()
	{
		$this->forge->dropTable('inventaris');
	}
}
