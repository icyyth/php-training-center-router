<?php
declare(strict_types=1);

namespace App\Controllers;

use App\Support\Response;

class HomeController
{
    public function index(): void
    {
        Response::view('home', [
            'title' => 'Training Center',
            'message' => 'Welcome to PHP Training Center',
            'loginSuccess' => $_GET['login'] ?? false
        ]);
    }

    public function goHome(): void
    {
        Response::redirect('/');
    }
}