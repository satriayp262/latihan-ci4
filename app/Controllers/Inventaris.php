<?php
namespace App\Controllers;
use App\Models\InventarisModel;

class Inventaris extends BaseController
{
    protected $inventaris;

    function __construct()
    {
        $this->inventaris = new InventarisModel();
    }

    public function index()
    {
        $data['inventaris'] = $this->inventaris->findAll();
        return view('inventaris/index', $data);
    }

    public function create()
    {
        return view('inventaris/create');
    }

    public function store()
    {
        if (!$this->validate([
            'nama_brg' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'jumlah' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'kondisi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ]
 
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }
 
        $this->inventaris->insert([
            'nama_brg' => $this->request->getVar('nama_brg'),
            'jumlah' => $this->request->getVar('jumlah'),
            'kondisi' => $this->request->getVar('kondisi'),
        ]);
        session()->setFlashdata('message', 'Tambah Data Barang Berhasil');
        return redirect()->to('/inventaris');
    }

    function edit($id)
    {
        $dataInventaris = $this->inventaris->find($id);
        if (empty($dataInventaris)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Barang Tidak ditemukan !');
        }
        $data['inventaris'] = $dataInventaris;
        return view('inventaris/edit', $data);
    }

    public function update($id)
    {
        if (!$this->validate([
            'nama_brg' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'jumlah' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'kondisi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ]
 
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back();
        }
 
        $this->inventaris->update($id, [
            'nama_brg' => $this->request->getVar('nama_brg'),
            'jumlah' => $this->request->getVar('jumlah'),
            'kondisi' => $this->request->getVar('kondisi'),
        ]);
        session()->setFlashdata('message', 'Update Data Barang Berhasil');
        return redirect()->to('/inventaris');
    }

    function delete($id)
    {
        $dataInventaris = $this->inventaris->find($id);
        if (empty($dataInventaris)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Barang Tidak ditemukan !');
        }
        $this->inventaris->delete($id);
        session()->setFlashdata('message', 'Delete Data Barang Berhasil');
        return redirect()->to('/inventaris');
    }
}