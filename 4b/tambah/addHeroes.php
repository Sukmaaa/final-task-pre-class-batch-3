<?php
include '../proses/koneksi.php'; {
    $data = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM heroes_tb "));
    $namafolder = "../assets/img/heroes/";     //tempat menyimpan file
    if (!empty($_FILES["link_gambar"]["tmp_name"])) {
        $jenis_gambar = $_FILES['link_gambar']['type'];
        $name = $_POST['name'];
        $content = mysqli_real_escape_string($koneksi, $_POST['content']);
        $typeId = $_POST['type_id'];
        if ($jenis_gambar == "image/jpeg" || $jenis_gambar == "image/jpg" || $jenis_gambar == "image/png" || $jenis_gambar == "image/PNG") {
            if ($data['photo'] = '../images/carousel/default.png') {
                unlink($data['photo']);
            }
            $gambar = $namafolder . $_FILES['link_gambar']['name'];
            if (move_uploaded_file($_FILES['link_gambar']['tmp_name'], $gambar)) {
                mysqli_query($koneksi, "INSERT into heroes_tb SET 
				name = '$name',
				content = '$content',
                type_id = '$typeId',
				photo = '$gambar'");
                header("location:Heroes.php?pesan=berhasil");
            } else {
                header("location:Heroes.php?pesan=gagal");
            }
        } else {
            header("location:Heroes.php?pesan=gagal");
        }
    } else {
        $name = $_POST['name'];
        $content = $_POST['content'];
        $typeId = $_POST['type_id'];
        $default = "../assets/img/heroes/default.png";
        mysqli_query($koneksi, "INSERT into heroes_tb SET 
				name = '$name',
				content = '$content',
                type_id = '$typeId',
				photo = '$default'");
        header("location:Heroes.php?pesan=berhasil");
    }
}
