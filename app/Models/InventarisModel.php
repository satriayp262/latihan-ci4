<?php

namespace App\Models;

use CodeIgniter\Model;

class InventarisModel extends Model
{
    protected $table = "inventaris";
    protected $primaryKey = "id_barang";
    protected $returnType = "object";
    protected $useTimestamps = true;
    protected $allowedFields = ['id_barang', 'nama_brg', 'jumlah', 'kondisi'];
}