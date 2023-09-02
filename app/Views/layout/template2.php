<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/sidebar/main.css">
    <link rel="stylesheet" href="/css/sidebar/sidebar.css">
    <link rel="stylesheet" href="/css/sidebar/content.css">
    <link rel="stylesheet" href="/css/sidebar/media-queries.css">
    <link rel="stylesheet" href="/css/sidebar/navbar.css">
    <link rel="stylesheet" href="/fontawesome/css/all.css">

    <title>AHP Ranking</title>
</head>

<body>

    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar" class="align-content-around">
            <div class="sidebar-header">
                <h4 class="text-center header">Admin </h4>
                <strong><i class="fa-solid fa-user"></i></strong>
            </div>

            <ul class="list-unstyled components">
                <li class="">
                    <a href="/pagesmanager/dashboard">
                        <i class="fas fa-briefcase"></i>
                        Dashboard
                    </a>

                </li>
                <li>
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="menu dropdown-toggle">
                        <i class="fas fa-database"></i>
                        Data alternatif
                    </a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="/alternatifcontroller/alternatif">guru</a>
                        </li>
                        <li>
                            <a href="/kriteriacontroller/kriteria">kriteria</a>
                        </li>
                        <li>
                            <a href="/kriteriacontroller/nilaiperb">Nilai Kriteria</a>
                        </li>
                        <li>
                            <a href="/kriteriacontroller/irk">Nilai indeks</a>
                        </li>
                    </ul>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="menu dropdown-toggle">
                        <i class="fa-solid fa-table"></i>
                        Matriks
                    </a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="/kriteriacontroller/hasilmatriks">Matriks kriteria</a>
                        </li>
                        <li>
                            <a href="/alternatifcontroller/perbandinganalternatif">Matriks Alternatif</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="/alternatifcontroller/rank">
                        <i class="fa-solid fa-ranking-star"></i>
                        Rangking
                    </a>

                </li>
            </ul>

            <div class="sidebar-toggler">
                <button type="button" id="sidebarCollapse" class="toggler text-light btn btn-light btn-sm rounded-circle">
                    <i class="toggler-icon fas fa-angle-left"></i>
                </button>
            </div>
        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-ligth bg-ligth shadow-lg">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbar">

                    <ul class="navbar-nav ml-auto">

                        <li class="nav-item dropdown">
                            <button class="nav-link text-white dropdown-toggle btn btn-link" id="navbarDropdown" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <i class="fas fa-user-circle"></i>
                                <span>profile</span>
                                <span class="caret"></span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right animate slideIn" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user-cog"></i>
                                    Profile
                                </a>
                                <div class="d-none d-sm-block dropdown-divider"></div>
                                <a class="dropdown-item" href="/">
                                    <i class="fas fa-sign-out-alt"></i>
                                    Log out
                                </a>
                            </div>
                        </li>

                    </ul>
                </div>
            </nav>
            <div class="item mt-3 ms-3">
                <?= $this->renderSection('item'); ?>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="/bootstrap/js/bootstrap.min.js"></script>
    <script src="/js/main.js"></script>
</body>

</html>