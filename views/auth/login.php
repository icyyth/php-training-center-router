<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= htmlspecialchars($title ?? 'Login') ?></title>
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
        <h1>🔐 Login Demo</h1>
        <p>This demonstrates controller organization and redirect response.</p>

        <?php if (!empty($error)): ?>
            <div class="alert danger">
                ❌ <?= htmlspecialchars($error) ?>
            </div>
        <?php endif; ?>

        <form class="form-card" method="POST" action="/login">
            <div class="form-group">
                <label>Email (any)</label>
                <input type="email" name="email" placeholder="student@example.com">
            </div>
            <div class="form-group">
                <label>Password (any)</label>
                <input type="password" name="password" placeholder="anything works">
            </div>
            <button class="button" type="submit">🔑 Login</button>
        </form>

        <div class="info-note">
            <small>💡 Demo: Enter any email/password to test redirect response</small>
        </div>
    </main>
</body>
</html>