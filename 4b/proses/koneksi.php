<?php

$koneksi = mysqli_connect("localhost", "root", "", "wiki_games");

if (!$koneksi) {
    echo "koneksi gagal";
}
