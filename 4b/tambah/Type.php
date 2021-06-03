<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.83.1">
    <title>Web Wiki Games</title>
    <link rel="shortcut icon" href="../assets/img/letter s.jpg" type="image/x-icon">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/album/">



    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
    <link href="../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="../assets/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="../assets/vendor/datatables/css/jquery.dataTables.css" rel="stylesheet">
    <link href="../assets/vendor/fontawesome/css/all.min.css" rel="stylesheet">
    <link href="../assets/vendor/fontawesome/css/all.css" rel="stylesheet">
    <link href="../assets/css/css.min.css" rel="stylesheet">
    <meta name="theme-color" content="#7952b3">


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


</head>

<body>

    <header>
        <div class="navbar navbar-dark bg-dark shadow-sm">
            <div class="container">
                <a href="../index.php" class="navbar-brand d-flex align-items-center">
                    <img src="../assets/img/letter s baru.jpg" alt="" style="width: 30px; height:30px">
                    <strong class="m-2"> Wikisedia </strong>
                </a>
                <div class="btn-group">
                    <a href="heroes.php"><button type="button" class="btn btn-sm btn-outline-light">Heroes Data</button></a>
                    <a href="../index.php"><button type="button" class="btn btn-sm btn-outline-light">Show Type</button></a>
                </div>
            </div>
        </div>
    </header>

    <main>

        <div class="right_col" role="main">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-body">
                        <!-- modal untuk tambah data  -->
                        <div style="padding: 0px; width: 100%; background-color: #fff; ">
                            <a class="btn btn-info my-3" href="#" data-toggle="modal" data-target="#exampleModal">Tambah Data</a>
                        </div>
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel"> Tambah Type </h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="addType.php" method="POST" enctype="multipart/form-data">
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label> Nama Heroes </label>
                                                        <input class="form-control" name="name" placeholder="Nama Heroes"></input>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <?php
                        if (isset($_GET['pesan'])) {
                            if ($_GET['pesan'] == "gagal") {
                                echo '<div class="alert alert-warning">
                        <span>Data Gagal Ditambahkan!</span>
                    </div>';
                            } else if ($_GET['pesan'] == "berhasil") {
                                echo '<div class="alert alert-warning">
                        <span>Data Berhasil Ditambahkan!</span>
                    </div>';
                            } else if ($_GET['pesan'] == "gagal_update") {
                                echo '<div class="alert alert-warning">
                        <span>Data Gagal Di Ubah!</span>
                    </div>';
                            } else if ($_GET['pesan'] == "update") {
                                echo '<div class="alert alert-warning">
                        <span>Data Berhasil Di Ubah!</span>
                    </div>';
                            }
                        }
                        ?>
                        <table id="example" class="table" style="font-family:calibri; color:black;">
                            <thead class="thead-active">
                                <tr>
                                    <th> No </th>
                                    <th> Type Id </th>
                                    <th> Name Type </th>
                                    <th> Aksi </th>
                                </tr>
                            </thead>
                            <?php include "../proses/koneksi.php";
                            $data_heroes = mysqli_query($koneksi, "SELECT * from type_tb order by id");
                            $no = 1;
                            while ($hasil = mysqli_fetch_array($data_heroes)) {
                                if ($no % 2 == 0) {
                                    $class = "td_list";
                                } else {
                                    $class = "";
                                }
                            ?>
                                <tr class="<?php echo $class ?>">
                                    <td> <?php echo $no++; ?> </td>
                                    <td> <?php echo $hasil['id']; ?> </td>
                                    <td> <?php echo $hasil['name']; ?> </td>
                                    <td>
                                        <div class="btn-group">
                                            <a class="btn btn-success" href="#" data-toggle="modal" data-target="#exampleModal<?= $hasil['id']; ?>">
                                                Edit
                                            </a>

                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModal<?= $hasil['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel"> Edit Type </h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <form action="../proses/editType.php" method="POST" enctype="multipart/form-data">
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <div class="form-group">
                                                                            <input type="hidden" name="id" value="<?= $hasil['id']; ?>">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label> Name </label>
                                                                            <input class="form-control" name="name" value="<?= $hasil['name']; ?>">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn btn-primary">Save changes</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <a class=" btn btn-danger" href="../proses/deleteType.php?id=<?php echo $hasil['id']; ?>" onclick="return confirm ('Apakah anda yakin data ingin dihapus ?')">
                                                Delete
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            <?php

                            }
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>


        <!-- Bootstrap core JavaScript-->
        <script src="../assets/vendor/jquery/jquery.min.js"></script>
        <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Page level plugins -->
        <script src="../assets/vendor/chart.js/Chart.min.js"></script>

        <!-- Page level custom scripts -->
        <script src="../assets/js/demo/chart-area-demo.js"></script>
        <script src="../assets/js/demo/chart-pie-demo.js"></script>
        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="../assets/vendor/bootstrapjs/bootstrap.bundle.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/jquery-3.4.1.slim.min.js"></script>
        <script src="../assets/vendor/datatables/js/jquery.dataTables.min.js"></script>
        <script src="../assets/vendor/datatables/js/jquery.dataTables.js"></script>

        <script src="../assets/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="../assets/vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="../assets/js/js.min.js"></script>

        <script type="text/javascript" src="../assets/bootstrap/js/popper.min.js"></script>
        <script type="text/javascript" src="../assets/bootstrap/js/bootstrap.min.js"></script>

        <script type="text/javascript">
            $(document).ready(function() {

                $('#sidebarCollapse').on('click', function() {
                    $('#sidebar').toggleClass('active');
                });

            });
        </script>


        <script>
            $(document).ready(function() {
                $('#example').DataTable();
            });
        </script>

</body>

</html>