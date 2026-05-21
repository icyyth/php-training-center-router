<?php
declare(strict_types=1);

namespace App\Controllers;

use App\Support\Response;

class HealthController
{
    public function index(): void
    {
        Response::json(200, [
            'status' => 'ok',
            'message' => 'Training Center API is healthy',
            'time' => date('Y-m-d H:i:s'),
            'version' => '1.0.0'
        ]);
    }
    public function check(): void {
        Response::json(200, [
            'status' => 'ok',
            'message' => 'Training Center is running',
            'time' => date('Y-m-d H:i:s')
        ]);
     }
}