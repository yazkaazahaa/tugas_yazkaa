<?php
include 'config.php';
session_start();

// Jika sudah login, langsung alihkan ke index
if (isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}

// Jika tombol submit ditekan
if (isset($_POST['submit'])) {

    $username = $_POST['username'];
    $email    = $_POST['email'];

    // Hash password
    $password     = hash('sha256', $_POST['password']);
    $password_conf = hash('sha256', $_POST['cpassword']);

    // Cek konfirmasi password
    if ($password === $password_conf) {

        // Cek email sudah terdaftar atau belum
        $cek = "SELECT * FROM users WHERE email='$email'";
        $result = mysqli_query($conn, $cek);

        if (mysqli_num_rows($result) == 0) {

            // Query insert
            $sql = "INSERT INTO users (username, email, password)
                    VALUES ('$username', '$email', '$password')";
            $insert = mysqli_query($conn, $sql);

            if ($insert) {
                echo "<script>alert('Selamat, registrasi berhasil!');</script>";
                $username = "";
                $email = "";
                $_POST['password'] = "";
                $_POST['cpassword'] = "";
            } else {
                echo "<script>alert('Woops! Terjadi kesalahan.');</script>";
            }

        } else {
            echo "<script>alert('Woops! Email sudah terdaftar.');</script>";
        }

    } else {
        echo "<script>alert('Password dan Konfirmasi Password tidak sesuai!');</script>";
    }
}
?>