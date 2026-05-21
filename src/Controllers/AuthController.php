<?php
declare(strict_types=1);

namespace App\Controllers;

use App\Support\Response;

class AuthController
{
    public function login(): void
    {
        Response::view('auth/login', ['title' => 'Login to Training Center']);
    }

    public function handleLogin(): void
    {
        $email = trim($_POST['email'] ?? '');
        $password = trim($_POST['password'] ?? '');

        // Demo login - accept any non-empty credentials
        if ($email !== '' && $password !== '') {
            Response::redirect('/?login=success');
        }

        Response::view('auth/login', [
            'title' => 'Login to Training Center',
            'error' => 'Please enter both email and password.'
        ]);
    }

    public function logout(): void
    {
        Response::redirect('/');
    }
}