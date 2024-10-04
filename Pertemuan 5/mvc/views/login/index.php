<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login</title>
    <link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>assets/css/style3.css"> <!-- Akses file CSS -->
</head>
<body>
    <div class="container"> <!-- Pembungkus untuk form -->
        <h2>Form Login</h2>
        <form action="<?= BASEURL; ?>index.php?url=login/auth" method="POST">
            <input type="text" name="username" placeholder="Username" required><br>
            <input type="password" name="password" placeholder="Password" required><br>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
