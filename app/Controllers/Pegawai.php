<?php

namespace App\Controllers;

use App\Models\PegawaiModel;

class Pegawai extends BaseController
{
    protected $pegawai;

    function __construct()
    {
        $this->pegawai = new PegawaiModel();
    }

    public function index()
    {
        $data['pegawai'] = $this->pegawai->findAll();
        return view('pegawai/index', $data);
    }
}