<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= htmlspecialchars($title ?? 'Create Course') ?></title>
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
        <h1>➕ Create New Course</h1>
        <p>This form submits to <code>POST /courses</code> with redirect response.</p>

        <?php if (!empty($error)): ?>
            <div class="alert danger">
                ❌ <?= htmlspecialchars($error) ?>
            </div>
        <?php endif; ?>

        <form class="form-card" method="POST" action="/courses">
            <div class="form-group">
                <label>Course Code *</label>
                <input type="text" name="code" placeholder="e.g., PHP101" required>
            </div>

            <div class="form-group">
                <label>Course Name *</label>
                <input type="text" name="name" placeholder="e.g., PHP Cơ Bản" required>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label>Category *</label>
                    <input type="text" name="category" placeholder="Lập trình Web" required>
                </div>
                <div class="form-group">
                    <label>Duration (hours) *</label>
                    <input type="number" name="duration" placeholder="30" required>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label>Price (VND) *</label>
                    <input type="number" name="price" placeholder="1500000" required>
                </div>
                <div class="form-group">
                    <label>Seats Available *</label>
                    <input type="number" name="quantity" placeholder="10" required>
                </div>
            </div>

            <button class="button" type="submit">✨ Create Course</button>
        </form>
    </main>
</body>
</html>