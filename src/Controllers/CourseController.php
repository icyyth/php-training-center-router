<?php
declare(strict_types=1);

namespace App\Controllers;

use App\Support\Response;

class CourseController
{
    public function index(): void
    {
        $courses = $this->getCourses();

        Response::view('courses/index', [
            'title' => 'Course List',
            'courses' => $courses,
            'created' => ($_GET['created'] ?? '') === '1'
        ]);
    }

    public function create(): void
    {
        Response::view('courses/create', [
            'title' => 'Create New Course',
            'error' => null
        ]);
    }

    public function store(): void
    {
        $code = trim($_POST['code'] ?? '');
        $name = trim($_POST['name'] ?? '');
        $category = trim($_POST['category'] ?? '');
        $duration = (int)($_POST['duration'] ?? 0);
        $price = (int)($_POST['price'] ?? 0);
        $quantity = (int)($_POST['quantity'] ?? 0);

        if ($code === '' || $name === '' || $category === '' || $duration <= 0 || $price <= 0 || $quantity < 0) {
            Response::view('courses/create', [
                'title' => 'Create New Course',
                'error' => 'Please fill all fields correctly. Code, Name, Category, Duration (>0), Price (>0), Quantity (>=0) are required.'
            ]);
            return;
        }

        Response::redirect('/courses?created=1');
    }

    private function getCourses(): array
    {
        return require dirname(__DIR__) . '/Data/courses.php';
    }
}