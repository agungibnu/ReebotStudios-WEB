<?php

namespace App\Controllers;

class Pages extends BaseController
{

    public function index()
    {
        $data = [
            'title' => 'Beranda'

        ];
        return view('pages/beranda', $data);
    }

    public function tentang()
    {
        $data = [
            'title' => 'Tentang'

        ];
        return view('/pages/tentang', $data);
    }
}
