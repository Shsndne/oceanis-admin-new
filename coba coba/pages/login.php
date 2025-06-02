<?php
session_start();
require_once 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = md5($_POST['password']); // Sesuai dengan data di database

    $sql = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $admin = $result->fetch_assoc();
        $_SESSION['admin_id'] = $admin['id'];
        $_SESSION['username'] = $admin['username'];
        header("Location: dashboard.php");
        exit();
    } else {
        $error_message = "Username atau password salah!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin - Oceanis</title>
    <style>
        
body {
    background-color: #eee9e0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.login-container {
    display: flex;
    width: 850px;
    height: 500px;
    background-color: #fff;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    flex-direction: row;
}

/* Tambahkan bagian kiri gambar dari CSS langsung */
.login-container::before {
    content: '';
    background-image: url('https://img.freepik.com/free-photo/top-view-pans-with-mushroom-sautee-mashed-potato-sabzi-boiled-vegetables-roasted-potatoes_140725-5210.jpg?t=st=1746511430~exp=1746515030~hmac=09461ac8c5236b2b1594f96fc5961d32b6b0409bd8f381d54c283ae688e1023f&w=740'); /* ganti path sesuai lokasi gambar kamu */
    background-size: cover;
    background-position: center;
    width: 50%;
    height: 100%;
}

/* Form login */
form {
    width: 50%;
    background-color: #fdf4e3;
    padding: 60px 50px;
    display: flex;
    flex-direction: column;
    justify-content: center;
}

form h2 {
    font-size: 26px;
    margin-bottom: 30px;
    color: #3f2e1f;
    text-align: center;
}

.error {
    background-color: #ffe5e5;
    color: #c0392b;
    padding: 12px 15px;
    border-radius: 8px;
    margin-bottom: 20px;
    font-weight: bold;
    border: 1px solid #e74c3c;
}


/* Input style */
input[type="text"],
input[type="password"] {
    width: 100%;
    padding: 12px 15px;
    margin-bottom: 20px;
    border: none;
    border-radius: 8px;
    background-color: #e6d3aa;
    font-size: 14px;
    color: #3a2d1f;
}

input::placeholder {
    color: #7e6a4f;
}

/* Tombol */
button {
    width: 100%;
    padding: 13px;
    background-color: #5a4234;
    color: white;
    border: none;
    border-radius: 8px;
    font-weight: bold;
    font-size: 15px;
    cursor: pointer;
    transition: 0.3s ease;
}

button:hover {
    background-color: #3e2f24;
}

/* Responsive */
@media screen and (max-width: 768px) {
    .login-container {
        flex-direction: column;
        width: 90%;
        height: auto;
    }

    .login-container::before {
        width: 100%;
        height: 200px;
    }

    form {
        width: 100%;
        padding: 40px 30px;
    }
}


    </style>
</head>
<body>
    <div class="login-container"> 
            
                <form method="post">
            <h2>Selamat Datang Admin!</h2>
            <?php if (!empty($error_message)): ?>
                <div class="error"><?php echo $error_message; ?></div>
            <?php endif; ?>
            <input type="text" name="username" placeholder="Username" required><br>
            <input type="password" name="password" placeholder="Password" required><br>
            <button type="submit">Login</button>
        </form>
        <script>
        // Hilangkan notifikasi error setelah 3 detik
        setTimeout(() => {
            const errorBox = document.querySelector('.error');
            if (errorBox) {
                errorBox.style.display = 'none';
            }
        }, 3000); // 3000 ms = 3 detik
    </script>

    </div>
</body>
</html>
