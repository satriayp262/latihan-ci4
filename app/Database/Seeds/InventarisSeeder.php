<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class InventarisSeeder extends Seeder
{
    public function run()
	{
		$data = [
			[
				'nama_brg'          =>  'Proyektor',
				'jumlah' =>  '10',
				'kondisi'       =>  'Baik',
				'created_at' => Time::now()
			],
			[
				'nama_brg'          =>  'Komputer',
				'jumlah' =>  '15',
				'kondisi'       =>  'Baik',
				'created_at' => Time::now()
			],
            [
				'nama_brg'          =>  'Printer',
				'jumlah' =>  '4',
				'kondisi'       =>  'Baik',
				'created_at' => Time::now()
			],
		];
		$this->db->table('inventaris')->insertBatch($data);
	}
}
