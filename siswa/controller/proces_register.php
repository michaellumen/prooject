<?php
session_start();
include '../config/conn.php';

// if (isset($_SESSION['nama'])) {
//     header("Location: ../login.php");
//     exit();
// }

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = ($_POST['password']);
    $cpassword = ($_POST['cpassword']);
    $role = $_POST['role']; 

    if ($password == $cpassword) {
        $query = "SELECT * FROM user WHERE username='$username'";
        $exe = mysqli_query($connn, $query);
        if (!$exe->num_rows > 0) {
            $query = "INSERT INTO user (nama, username, password, role)
            VALUES('$nama', '$username', '$password', '$role')";
            $exe = mysqli_query($connn, $query);
            if ($exe) { 
                echo "<script>alert('  Berhasil Registrasi  ! ') </script>";
                $nama= "";
                $email= "";
                $_POST['password'] = "";  
                $_POST['cpassword'] = "";
                $role = "";
            } else {
                echo "<script>alert(' Error  ') </script>";
            }
        } else {
            echo "<script>alert('User Yang Anda Buat Sudah Terdaftar ')</script>";
        }
    } else {
        echo "<script>alert(' Password Tidak Sama  ! ')</script>";
    }
}
?>