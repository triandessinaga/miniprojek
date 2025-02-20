<!DOCTYPE html>
<html>
<head>
    <title>Donate - Mini Donasi</title>
    <link rel="stylesheet" href="public/css/style.css">
</head>
<body>
    <nav>
        <h1>Mini Donasi</h1>
        <a href="home">Home</a>
    </nav>

    <main>
        <h2>Make a Donation</h2>
        <form method="POST" action="donate">
            <div>
                <label>Amount (Rp)</label>
                <input type="number" name="amount" required>
            </div>
            <div>
                <label>Message</label>
                <textarea name="message" required></textarea>
            </div>
            <button type="submit">Donate</button>
        </form>
    </main>
</body>
</html>