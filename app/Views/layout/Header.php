<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rangking Kelas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="css/sidebar.css">
</head>

<body>
    <main class="d-flex flex-nowrap">
        <h1 class="visually-hidden">SEKOLAH HAHA</h1>

        <div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark" style="width: 280px;">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                <svg class="bi pe-none me-2" width="40" height="32">
                    <use xlink:href="#bootstrap" />
                </svg>
                <span class="fs-4">Admin</span>
            </a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <a href="/" class=" nav-link active" aria-current="page">
                        <svg class="bi pe-none me-2" width="16" height="16">
                            <use xlink:href="#home" />
                        </svg>
                        Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link align-items-center rounded  text-white dropdown-toggle" data-bs-toggle="collapse" data-bs-target="#home-collapse"> <svg class="bi pe-none me-2" width="16" height="16">
                            <use xlink:href="#table" />
                        </svg>
                        Input Data
                    </a>
                    <div class="collapse" id="home-collapse">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 medium">
                            <li><a href="#" class="nav-link text-white text-decoration-none rounded"><svg class="bi pe-none me-5" width="16" height="16">
                                        <use xlink:href="#table" />
                                    </svg>Nilai Preferensi</a></li>
                            <li><a href="#" class="nav-link text-white text-decoration-none rounded"><svg class="bi pe-none me-5" width="16" height="16">
                                        <use xlink:href="#table" />
                                    </svg>Data Kriteria</a></li>
                            <li><a href="#" class="nav-link text-white text-decoration-none rounded"><svg class="bi pe-none me-5" width="16" height="16">
                                        <use xlink:href="#table" />
                                    </svg>Data Alternatif</a></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="/pagesmanager/rank" class="nav-link text-white">
                        <svg class="bi pe-none me-2" width="16" height="16">
                            <use xlink:href="#table" />
                        </svg>
                        Ranking
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link text-white">
                        <svg class="bi pe-none me-2" width="16" height="16">
                            <use xlink:href="#grid" />
                        </svg>
                        None
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link text-white">
                        <svg class="bi pe-none me-2" width="16" height="16">
                            <use xlink:href="#people-circle" />
                        </svg>
                        None
                    </a>
                </li>
            </ul>
            <hr>

    </main>