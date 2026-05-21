<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= htmlspecialchars($title ?? 'Training Center') ?></title>
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
        <?php if (!empty($loginSuccess)): ?>
            <div class="alert success">
                ✅ Login successful! You are now redirected to Home.
            </div>
        <?php endif; ?>

        <section class="hero">
            <h1><?= htmlspecialchars($title ?? 'Training Center') ?></h1>
            <p><?= htmlspecialchars($message ?? 'Welcome to PHP Training Center') ?></p>
        </section>

        <section class="grid">
            <div class="card">
                <h3>📖 HTML Response</h3>
                <p>Visit <code>/</code> or <code>/courses</code></p>
            </div>
            <div class="card">
                <h3>🩺 JSON Response</h3>
                <p>Visit <code>/health</code> for API status</p>
            </div>
            <div class="card">
                <h3>🔄 Redirect Response</h3>
                <p>Visit <code>/go-home</code> or submit login form</p>
            </div>
        </section>
    </main>
</body>
</html>