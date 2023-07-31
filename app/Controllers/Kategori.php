<?php

namespace App\Controllers;

class Kategori extends BaseController
{
    public function index(): string
    {
        $data['title'] = 'Kategori';
        return view('Kategori/IndexView', $data);
    }

    public function form()
    {
        $data['title'] = 'Kategori';
        return view('Kategori/FormView', $data);
    }
}
