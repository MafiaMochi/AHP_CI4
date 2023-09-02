<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rangking Guru</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/fontawesome/css/all.css">
</head>

<body>
    <div class="main-container d-flex">
        <div class="sidebar" id="side_nav">
            <div class="header-box mt-3 ms-4">
                <h1 class="fs-4"><span class="bg-white text-dark rounded shadow px-2 me-2"><i class="fa-solid fa-user"></i></span> <span class="text-white">Admin</span>

            </div>
            <hr class="h-color">
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <a href="/pagesmanager/dashboard" class=" nav-link text-white text-decoration-none rounded " aria-current="page">
                        <svg class="bi pe-none me-2" width="16" height="16">
                            <use xlink:href="#home" /><i class="fa-solid fa-home"></i>
                        </svg>
                        Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link align-items-center rounded  text-white dropdown-toggle" data-bs-toggle="collapse" data-bs-target="#home-collapse"> <svg class="bi pe-none me-2" width="16" height="16">
                            <use xlink:href="#table" /><i class="fa-solid fa-database"></i>
                        </svg>
                        Input Data
                    </a>
                    <div class="collapse" id="home-collapse">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 medium active">
                            <li><a href="/alternatifcontroller/alternatif" class="nav-link text-white text-decoration-none rounded"><svg class="bi pe-none me-5" width="16" height="16">
                                        <use xlink:href="#table" />
                                    </svg>Guru</a></li>
                            <li><a href="/kriteriacontroller/kriteria" class="nav-link text-white text-decoration-none rounded"><svg class="bi pe-none me-5" width="16" height="16">
                                        <use xlink:href="#table" />
                                    </svg>Data Kriteria</a></li>
                            <li><a href="/kriteriacontroller/nilaiperb" class="nav-link text-white text-decoration-none rounded"><svg class="bi pe-none me-5" width="16" height="16">
                                        <use xlink:href="#table" />
                                    </svg>Nilai Kriteria</a></li>
                            <li><a href="/kriteriacontroller/irk" class="nav-link text-white text-decoration-none rounded"><svg class="bi pe-none me-5" width="16" height="16">
                                        <use xlink:href="#table" />
                                    </svg>Data Indek</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link align-items-center rounded  text-white dropdown-toggle" data-bs-toggle="collapse" data-bs-target="#hasil-collapse"> <svg class="bi pe-none me-2" width="16" height="16">
                            <use xlink:href="#table" /><i class="fa-solid fa-database"></i>
                        </svg>
                        Hasil Input Data
                    </a>
                    <div class="collapse" id="hasil-collapse">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 medium">
                            <li><a href="/kriteriacontroller/hasilmatriks" class="nav-link text-white text-decoration-none rounded"><svg class="bi pe-none me-5" width="16" height="16">
                                        <use xlink:href="#table" />
                                    </svg>Hasil Perbandingan</a></li>
                            <li><a href="/alternatifcontroller/perbandinganalternatif" class="nav-link text-white text-decoration-none rounded"><svg class="bi pe-none me-5" width="16" height="16">
                                        <use xlink:href="#table" />
                                    </svg>Perbandingan alternatif</a></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="/alternatifcontroller/rank" class="nav-link text-white">
                        <svg class="bi pe-none me-2" width="16" height="16">
                            <use xlink:href="#table" /><i class="fa-solid fa-ranking-star"></i>
                        </svg>
                        Ranking
                    </a>
                </li>
            </ul>
            <hr>
        </div>
        <div class="content">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Administrator</a>
                    <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="navbar-collapse collapse" id="navbarsExample03">
                        <ul class="navbar-nav me-auto mb-2 mb-sm-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="/">Home</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="item mt-3 ms-3">
                <?= $this->renderSection('item'); ?>
            </div>
        </div>
    </div>

    <footer class="footer mt-auto py-3">
        <div class="container text-center">
            <span class="text-muted">AHP Renking Guru</span>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>