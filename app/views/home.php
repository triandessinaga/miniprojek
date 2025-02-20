<!DOCTYPE html>
<html>
<head>
    <title>Home - Mini Donasi</title>
    <link rel="stylesheet" href="public/css/style.css">
</head>
<body>
    <nav>
        <h1>Mini Donasi</h1>
        <?php if(isset($_SESSION['user_id'])): ?>
            <div>
                Welcome, <?php echo $_SESSION['user_name']; ?>
                <?php if($_SESSION['user_role'] === 'admin'): ?>
                    <a href="admin">Admin Dashboard</a>
                <?php endif; ?>
                <a href="donate">Donate</a>
                <a href="logout">Logout</a>
            </div>
        <?php else: ?>
            <div>
                <a href="login">Login</a>
                <a href="register">Register</a>
            </div>
        <?php endif; ?>
    </nav>

    <main>
        <h2>Recent Donations</h2>
        <?php foreach($donations as $donation): ?>
            <div class="donation-card">
                <h3><?php echo htmlspecialchars($donation['name']); ?></h3>
                <p>Amount: Rp<?php echo number_format($donation['amount']); ?></p>
                <p>Message: <?php echo htmlspecialchars($donation['message']); ?></p>
                <small>Date: <?php echo $donation['created_at']; ?></small>
            </div>
        <?php endforeach; ?>
    </main>
</body>
</html>