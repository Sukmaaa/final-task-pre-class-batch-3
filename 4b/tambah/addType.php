<?php

include "../proses/koneksi.php"; {
    $name = mysqli_real_escape_string($koneksi, $_POST['name']);

    $hasil = mysqli_query($koneksi, "INSERT INTO type_tb SET
    name = '$name';");
    if ($hasil) {
        header("Location:Type.php?pesan=berhasil");
    } else {
        header("location:Type.php?pesan=gagal");
    }
}
