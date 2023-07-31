<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data['title'] = 'Welcome';
        return view('Home/IndexView', $data);
    }
}
