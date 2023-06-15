<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\JadwalModel;

class Penjadwalan extends BaseController
{
    public function index()
    {
        $model = new JadwalModel();
        $data['jadwal'] = $model->findAll();

        return view('admin/penjadwalan', $data);
    }

    public function save()
    {
        $model = new JadwalModel();

        $judul = $this->request->getPost('judul');
        $waktu = $this->request->getPost('waktu');
        $jam = $this->request->getPost('jam');
        $lokasi = $this->request->getPost('lokasi');
        $diskripsi = $this->request->getPost('diskripsi');

        $data = [
            'judul' => $judul,
            'waktu' => $waktu,
            'jam' => $jam,
            'lokasi' => $lokasi,
            'diskripsi' => $diskripsi
        ];

        $gambarDirectory = 'public/assets/images/jadwal/';
        if (!is_dir($gambarDirectory)) {
            mkdir($gambarDirectory, 0777, true);
        }

        $gambarName = $_FILES['gambar']['name'];
        $gambarTmp = $_FILES['gambar']['tmp_name'];
        $gambarPath = $gambarDirectory . $gambarName;
        move_uploaded_file($gambarTmp, $gambarPath);
        $data['gambar'] = $gambarPath;


        $saved = $model->insert($data);

        if ($saved) {
            session()->setFlashdata('success', 'Data jadwal berhasil disimpan!');
        } else {
            session()->setFlashdata('error', 'Gagal menyimpan data jadwal. Silakan coba lagi.');
        }

        return redirect()->to(site_url('administrator/penjadwalan'));
    }
}
