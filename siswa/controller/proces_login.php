<?php
session_start();
include '../config/conn.php';

if (isset($_POST['submit'])) {
    $username = mysqli_real_escape_string($connn, $_POST['username']);
    $password = ($_POST['password']);

    $query = "SELECT * FROM user WHERE username ='$username' AND password='$password'";
    $exe = mysqli_query($connn, $query);

    if ($exe->num_rows > 0) {
        $row = mysqli_fetch_assoc($exe);
    
        if ($row['role']=="petugas") {
            $_SESSION['username'] = $username;
            $_SESSION['role'] = "petugas";
            header("Location: ../index.php");

        } elseif ($row['role']== "siswa") {
            $_SESSION['username'] = $username;
            $_SESSION['role'] = "siswa";
            header("Location: ../index_siswa.php");

        } elseif ($row['role']== "administrator") {
            $_SESSION['username'] = $username;
            $_SESSION['role'] = "administrator";
            header("Location: ../index.php");

        } else {
            echo "<script>alert(' ! Gagal untuk Login ')</script>";
        }
        
    } else {
        echo "<script>alert('Username atau Password salah ! ')</script>";
    }
}
?>