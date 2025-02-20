<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard - Mini Donasi</title>
    <link rel="stylesheet" href="public/css/style.css">
</head>
<body>
    <nav>
        <h1>Mini Donasi - Admin Dashboard</h1>
        <div>
            <a href="home">Home</a>
            <a href="logout">Logout</a>
        </div>
    </nav>

    <main>
        <h2>Users</h2>
        <table class="admin-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Created At</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($users as $user): ?>
                    <tr>
                        <td><?php echo $user['id']; ?></td>
                        <td><?php echo htmlspecialchars($user['name']); ?></td>
                        <td><?php echo htmlspecialchars($user['email']); ?></td>
                        <td><?php echo $user['role']; ?></td>
                        <td><?php echo $user['created_at']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <h2>All Donations</h2>
        <table class="admin-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>User</th>
                    <th>Amount</th>
                    <th>Message</th>
                    <th>Created At</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($donations as $donation): ?>
                    <tr>
                        <td><?php echo $donation['id']; ?></td>
                        <td><?php echo htmlspecialchars($donation['name']); ?></td>
                        <td>Rp<?php echo number_format($donation['amount']); ?></td>
                        <td><?php echo htmlspecialchars($donation['message']); ?></td>
                        <td><?php echo $donation['created_at']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </main>
</body>
</html>