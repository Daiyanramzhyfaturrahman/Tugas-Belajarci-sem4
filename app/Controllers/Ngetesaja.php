<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Ngetesaja extends BaseController
{
    public function index()
    {
        $data = [
            "title" => "Halo Gesss",
            "name" => "Aldi Ganteng"
        ];

        echo view('index', $data);
    }
}