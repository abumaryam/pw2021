<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function beranda()
    {
        return view('beranda'); //Lokasi file: resource/views/beranda.php
    }

    public function tentang()
    {
        $nama_prodi = 'Sistem Informasi';
        $universitas = 'Universitas Tanjungpura';
        $kajur = 'Ilhamsyah';

        return view('site.tentang', compact('nama_prodi', 'universitas','kajur'));
    }

    public function kontak()
    {
        return view('site.kontak');
    }

    public function layanan()
    {
        return view('site.layanan');
    }

    public function listDosen($tahun)
    {
        echo "Ini adalah halaman list dosen " . $tahun;
    }
}