<?php

namespace App\Http\Controllers;

class ArticleController extends Controller
{
    public function articles(int $id): void
    {
        echo "Halaman Artikel dengan Id $id";
    }
}
