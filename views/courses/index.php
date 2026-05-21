<?php
$title = $title ?? 'Courses';
$courses = $courses ?? [];
$created = $created ?? false;

function stockStatus(int $quantity): string {
    if ($quantity <= 0) return 'Out of Stock';
    if ($quantity <= 5) return 'Low Stock';
    return 'Available';
}

function stockClass(int $quantity): string {
    if ($quantity <= 0) return 'danger';
    if ($quantity <= 5) return 'warning';
    return 'success';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= htmlspecialchars($title) ?></title>
    <link rel="stylesheet" href="/assets/style.css">
</head>
<body>
    <header class="topbar">
        <strong>📚 PHP Training Center</strong>
        <nav>
            <a href="/">Home</a>
            <a href="/courses">Courses</a>
            <a href="/courses/create">Create Course</a>
            <a href="/health">Health</a>
            <a href="/login">Login</a>
            <a href="/logout">Logout</a>
        </nav>
    </header>

    <main class="container">
        <?php if ($created): ?>
            <div class="alert success">
                ✅ Course created successfully! Redirect response worked.
            </div>
        <?php endif; ?>

        <div class="page-header">
            <div>
                <h1>📚 Course List</h1>
                <p>Managed by <strong>CourseController@index</strong></p>
            </div>
            <a class="button" href="/courses/create">+ Create New Course</a>
        </div>

        <div class="table-wrapper">
            <table>
                <thead>
                    <tr>
                        <th>Code</th>
                        <th>Course Name</th>
                        <th>Category</th>
                        <th>Duration (h)</th>
                        <th>Price (VND)</th>
                        <th>Seats</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($courses as $course): ?>
                    <tr>
                        <td><strong><?= htmlspecialchars($course['code']) ?></strong></td>
                        <td><?= htmlspecialchars($course['name']) ?></td>
                        <td><?= htmlspecialchars($course['category']) ?></td>
                        <td><?= $course['duration'] ?> hours</td>
                        <td><?= number_format($course['price']) ?> ₫</td>
                        <td><?= $course['quantity'] ?></td>
                        <td>
                            <span class="badge <?= stockClass((int)$course['quantity']) ?>">
                                <?= stockStatus((int)$course['quantity']) ?>
                            </span>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </main>
</body>
</html>