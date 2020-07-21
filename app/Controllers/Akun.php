<?php

namespace App\Controllers;

class Akun extends BaseController
{
    public function daftar()
    {
        $data = [
            'title' => 'Daftar'

        ];
        return view('akun/daftar', $data);
    }
    public function masuk()
    {
        $data = [
            'title' => 'Masuk'

        ];
        return view('/akun/masuk', $data);
    }
    public function admin()
    {
        $data = [
            'title' => 'Admin'

        ];
        return view('/akun/admin', $data);
    }
}
