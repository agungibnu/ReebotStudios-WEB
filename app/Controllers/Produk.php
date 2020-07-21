<?php

namespace App\Controllers;

use App\Models\ProdukModel;

class Produk extends BaseController
{
    protected $produkModel;

    public function __construct()

    {
        $this->produkModel = new ProdukModel();
    }

    public function index()
    {
        // $produk = $this->produkModel->findAll(); gak dipake dari video 8

        $data = [
            'title' => 'Daftar Produk',
            'produk' => $this->produkModel->getProduk()

        ];
        return view('produk/produk', $data);
    }

    // video 8

    public function detail($slug)
    {
        $data = [
            'title' => 'Detail Produk',
            'produk' => $this->produkModel->getProduk($slug)


        ];
        //jika produk tidak ada di tabel
        if (empty($data['produk'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('nama produk ' . $slug . ' tidak ditemukan');
        }
        return view('produk/detail', $data);
    }

    // video 9
    public function create()
    {
        $data = [
            'title' => 'Tmabah Data Produk'

        ];

        return view('produk/create', $data);
    }

    public function save()
    {
        dd($this->request->getVar());
    }
}
