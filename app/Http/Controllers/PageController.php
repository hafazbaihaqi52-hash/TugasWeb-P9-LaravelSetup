<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function about()
    {
        $data = [
            'nama' => 'Muhammad Hafaz Baihaqi',
            'kampus' => 'Universitas Negeri Medan',
            'jurusan' => 'Ilmu Komputer',
            'status' => 'Mahasiswa'
        ];

        return view('about', $data);
    }

    public function contact()
    {
        $data = [
            'email' => 'hafazbaihaqi52@gmail.com',
            'telepon' => '081260287470'
        ];

        return view('contact', $data);
    }
}