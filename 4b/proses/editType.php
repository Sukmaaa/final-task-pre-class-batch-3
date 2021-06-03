<?php
include "koneksi.php";

$id = $_POST['id'];
$data = mysqli_query($koneksi, "SELECT * FROM type_tb WHERE id = '$id'");
$hasil = mysqli_fetch_object($data); {
    $id = $_POST['id'];
    $name = $_POST['name'];

    mysqli_query($koneksi, "UPDATE type_tb SET
        name = '$name'
        where id = '$id'");
    header("Location:../tambah/Type.php?pesan=update");
}
