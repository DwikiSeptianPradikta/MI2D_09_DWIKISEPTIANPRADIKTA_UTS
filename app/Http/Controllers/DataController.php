<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class DataController extends Controller
{
    public function index()
    {
        $collection = new Collection([
            'nama' => 'Nganjuk',
            'Harga' => '120000',
        ],
        [
            'nama' => 'Kediir',
            'Harga' => '140000',
        ],
        [
            'nama' => 'Tulungagung',
            'Harga' => '160000',
        ]);

        return view('Travel', ['data' => $collection]);
    }
}
