<?php

include "koneksi.php";

$username = $_POST['username'];
$password = $_POST['password'];

$login = mysqli_query($koneksi, "SELECT * FROM petugas where username = '$username' AND password = '$password'");

$cek = mysqli_num_rows($login);

if ($cek > 0) {

    $level = mysqli_fetch_assoc($login);

    if ($level['level'] == "Admin") {
        session_start();
        $_SESSION['status'] = "login";
        $_SESSION['user'] = "Admin";
        header("location:../index.php");
    } else if ($level['level'] == "Petugas") {
        session_start();
        $_SESSION['status'] = "login";
        $_SESSION['user'] = "Petugas";
        header("location:../p_entripembayaran.php");
    } else if ($level['level'] == "Siswa") {
        session_start();
        $_SESSION['status'] = "login";
        $_SESSION['user'] = "Siswa";
        header("location:../s_historypembayaran.php");
    }
} else {
    header("location:../login.php?pesan=gagal");
}
