<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(): void
    {
        echo "Selamat Datang";
    }

    public function about(): void
    {
        echo "<pre>
            Nama        : Wiradarma Nurmagika Bagaskasra
            NIM         : 2141720184
        </pre>";
    }

    public function articles(int $id): void
    {
        echo "‘Halaman Artikel dengan Id $id";
    }
}
