<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        h2 {
            color: #333;
            margin-bottom: 20px;
            text-align: center;
        }
        form {
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            color: #555;
        }
        input[type="text"],
        input[type="password"] {
            width: 100%;
            box-sizing: border-box;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"] {
            background-color: #007BFF;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        .error-message {
            color: red;
            text-align: center;
            margin-top: 10px;
            display: none; /* Hide by default */
        }
    </style>
</head>
<body>
    <div>
        <h2>Login Admin</h2>
        <form action="./Login.php" method="post" onsubmit="return validateForm()">
            <label for="username">Username:</label>
            <input type="text" name="username" required>
            <label for="password">Password:</label>
            <input type="password" name="password" required>
            <input type="submit" value="Login">
            <div class="error-message" id="error-message">Username atau password salah!</div>
        </form>
    </div>

    <script>
        function validateForm() {
            // Simulasi validasi (ganti dengan logika validasi sebenarnya)
            const username = document.querySelector('input[name="username"]').value;
            const password = document.querySelector('input[name="password"]').value;
            const errorMessage = document.getElementById('error-message');

            if (username !== "admin" || password !== "1234") {
                errorMessage.style.display = 'block'; // Tampilkan pesan kesalahan
                return false; // Mencegah form dikirim
            }
            errorMessage.style.display = 'none'; // Sembunyikan pesan kesalahan jika valid
            return true; // Izinkan form dikirim
        }
    </script>
</body>
</html>
