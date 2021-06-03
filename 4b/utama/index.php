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
                <a href="#" class="navbar-brand d-flex align-items-center">
                    <img src="../assets/img/letter s baru.jpg" alt="" style="width: 30px; height:30px">
                    <strong class="m-2"> Wikisedia </strong>
                </a>
            </div>
        </div>
    </header>

    <main>

        <section class="py-5 text-center container">
            <div class="row py-lg-5">
                <div class="col-lg-6 col-md-8 mx-auto">
                    <h1 class="fw-light">Wiki Games</h1>
                    <p class="lead text-muted">Something short and prominent about games in the mobile world that are played by both young and adults alike. </p>
                    <p>
                    <div class="btn-group">
                        <a href="../tambah/Heroes.php" class="btn btn-outline-primary my-2">Heroes Data</a>
                        <a href="../tambah/Type.php" class="btn btn-outline-secondary my-2">Type Data</a>
                    </div>
                    </p>
                </div>
            </div>
        </section>

        <div class="album py-5 bg-light">
            <div class="container">

                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    <?php include "../proses/koneksi.php";
                    $data_heroes = mysqli_query($koneksi, "SELECT heroes_tb.*, heroes_tb.name as heroesName, heroes_tb.id as heroesId, type_tb.*, type_tb.name as typeName, type_tb.id as typeId FROM heroes_tb LEFT JOIN type_tb ON heroes_tb.type_id = type_tb.id");
                    while ($hasil = mysqli_fetch_assoc($data_heroes)) {
                        $content = $hasil['content'];
                        if (strlen($content) > 120) {
                            $content = substr($content, 0, 120) . "...";
                        }
                    ?>
                        <div class="col">
                            <div class="card shadow-sm">
                                <?= "<img src='$hasil[photo]' class='bd-placeholder-img card-img-top shadow-sm' style='background: dimgrey;' width='100%' height='225' alt='...'>"; ?></img>
                                <div class="card-body">
                                    <h3 class="mb-0"><?= $hasil['heroesName']; ?> | <?= $hasil['typeName']; ?></h3>
                                    <p class="card-text"><?= $content; ?></p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <a href="view.php?heroesId=<?= $hasil['heroesId']; ?>"><button type="button" class="btn btn-sm btn-outline-secondary">View</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php

                    }
                    ?>
                </div>
            </div>
        </div>

    </main>

    <footer class="text-muted py-5">
        <div class="container">
            <p class="float-end mb-1">
                <a href="#">Back to top</a>
            </p>
            <p class="mb-1">This Website &copy; Sukma, but please download and customize it for yourself!</p>
        </div>
    </footer>


    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>


</body>

</html>