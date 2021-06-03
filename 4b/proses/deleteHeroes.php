<?php
include "koneksi.php";
//Hapus/DELETE

{
    $id = $_GET['id'];
    $hapus = mysqli_query($koneksi, "DELETE FROM heroes_tb WHERE id = '$id'");
    if ($hapus) {
        header("Location:../tambah/Heroes.php");
    }
}
