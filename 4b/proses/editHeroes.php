
<?php
include '../proses/koneksi.php'; {
    $id = $_POST['id'];
    $data = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM heroes_tb WHERE id='$id'"));
    $namafolder = "../assets/img/heroes/";     //tempat menyimpan file
    if (!empty($_FILES["link_gambar"]["tmp_name"])) {
        $jenis_gambar = $_FILES['link_gambar']['type'];
        $name = $_POST['name'];
        $content = mysqli_real_escape_string($koneksi, $_POST['content']);
        $typeId = $_POST['type_id'];
        if ($jenis_gambar == "image/jpeg" || $jenis_gambar == "image/jpg" || $jenis_gambar == "image/gif" || $jenis_gambar == "image/png") {
            if ($data['photo'] = '../images/carousel/default.png') {
                unlink($data['photo']);
            }
            $gambar = $namafolder . $_FILES['link_gambar']['name'];
            if (move_uploaded_file($_FILES['link_gambar']['tmp_name'], $gambar)) {
                mysqli_query($koneksi, "UPDATE heroes_tb SET 
                name = '$name',
                content = '$content',
                type_id = '$typeId',
                photo = '$gambar'
                WHERE id = $id");
                header("location:../tambah/Heroes.php?pesan=update");
            } else {
                header("location:../tambah/Heroes.php?pesan=gagal");
            }
        } else {
            header("location:../tambah/Heroes.php?pesan=gagal");
        }
    } else {
        $name = $_POST['name'];
        $content = $_POST['content'];
        $typeId = $_POST['type_id'];
        $namabaru = $_POST['namabaru'];
        mysqli_query($koneksi, "UPDATE heroes_tb SET 
        name = '$name',
        content = '$content',
        type_id = '$typeId',
        photo = '$namabaru'
        WHERE id = $id");
        header("location:../tambah/Heroes.php?pesan=update");
    }
}
?>


