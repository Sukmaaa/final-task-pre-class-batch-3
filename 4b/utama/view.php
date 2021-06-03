<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.83.1">
    <title>Blog Template · Bootstrap v5.0</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/blog/">



    <!-- Bootstrap core CSS -->
    <link rel="shortcut icon" href="../assets/img/letter s.jpg" type="image/x-icon">
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

        .background-ml {
            background: center, url("assets/img/ml-bg.png") rgba(0, 204, 250, 0.5);
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: 40%;
            height: 50%;
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="../assets/css/blog.css" rel="stylesheet">
</head>

<body>
    <header>
        <div class="navbar navbar-dark bg-dark shadow-sm">
            <div class="container">
                <a href="index.php" class="navbar-brand d-flex align-items-center">
                    <img src="../assets/img/letter s baru.jpg" alt="" style="width: 30px; height:30px">
                    <strong class="m-2"> Wikisedia </strong>
                </a>
            </div>
        </div>
    </header>
    <div class="container">
        <div class="nav-scroller py-1 mb-2">
            <nav class="nav d-flex justify-content-between">
            </nav>
        </div>
    </div>

    <main class="container">
        <div class="p-4 p-md-5 mb-4 text-white rounded bg-dark background-ml">
            <div class="col-md-6 px-0">
                <h1 class="display-4 fst-italic">Mobile legends hero story collection</h1>
                <p class="lead my-3">here we provide so many storylines from mobile legends heroes who became legends in land of dawn, let's see some stories from our legendary heroes</p>
                <p class="lead mb-0"><a href="#" class="text-white fw-bold">Continue reading</a></p>
            </div>
        </div>
        <h3 class="pb-4 mb-4 fst-italic border-bottom">
            Recomended Story
        </h3>
        <div class="row mb-2">
            <?php include "../proses/koneksi.php";
            $data_heroes = mysqli_query($koneksi, "SELECT heroes_tb.*, heroes_tb.name as heroesName, heroes_tb.id as heroesId, type_tb.*, type_tb.name as typeName, type_tb.id as typeId FROM heroes_tb LEFT JOIN type_tb ON heroes_tb.type_id = type_tb.id ORDER BY heroesId DESC LIMIT 2");
            while ($hasil = mysqli_fetch_assoc($data_heroes)) {
                $content = $hasil['content'];
                if (strlen($content) > 120) {
                    $content = substr($content, 0, 120) . "...";
                }
            ?>
                <div class="col-md-6">
                    <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                        <div class="col p-4 d-flex flex-column position-static">
                            <strong class="d-inline-block mb-2 text-primary"><?= $hasil['typeName']; ?></strong>
                            <h3 class="mb-2"><?= $hasil['heroesName']; ?></h3>
                            <p class="card-text mb-auto"><?= $content; ?></p>
                            <a href="#" class="stretched-link">Continue reading</a>
                        </div>
                        <div class="col-auto d-none d-lg-block">
                            <?= "<img src='$hasil[photo]' class='bd-placeholder-img' style='background: dimgrey; width:220px; height: 250px; object-fit: contain;'></img>" ?>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>

        <div class="row g-5">
            <div class="col-md-12">
                <?php include "../proses/koneksi.php";
                $id = $_GET['heroesId'];
                $data_heroes = mysqli_query($koneksi, "SELECT heroes_tb.*, heroes_tb.name as heroesName, heroes_tb.id as heroesId, type_tb.*, type_tb.name as typeName, type_tb.id as typeId FROM heroes_tb LEFT JOIN type_tb ON heroes_tb.type_id = type_tb.id WHERE heroes_tb.id = '$id'");
                while ($hasil = mysqli_fetch_assoc($data_heroes)) {
                ?>
                    <article class="blog-post">
                        <h2 class="blog-post-title"><?= $hasil['heroesName']; ?></h2>

                        <p><?= $hasil['content']; ?></p>
                    </article>
                <?php } ?>
            </div>
        </div>

    </main>

    <footer class="blog-footer">
        <p>Blog template built for <a href="https://getbootstrap.com/">Bootstrap</a> by <a href="https://twitter.com/mdo">@mdo</a>.</p>
        <p>
            <a href="#">Back to top</a>
        </p>
    </footer>



</body>

</html>