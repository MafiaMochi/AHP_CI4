<?= $this->extend('layout/template2'); ?>

<?= $this->section('item'); ?>
<div class="container">
    <div class="row align-items-start">
        <div class="col-3">
            <div class="card">
                <div class="card-header">
                    Data Guru
                </div>
                <div class="card-body">
                    <h1 class="card-title"><i class="fa-solid fa-users fa-lg mx-3">
                        </i><?= $count; ?></h1>
                    <a href="/gurucontroller/pegawai" class="btn btn-primary mx-3">Detail</a>
                </div>
            </div>
        </div>
        <div class="col-3">

            <div class="card">
                <div class="card-header">
                    Matriks
                </div>
                <div class="card-body">
                    <h1 class="card-title"><i class="fa-solid fa-table fa-lg"> </i></h1>
                    <a href="/alternatifcontroller/perbandinganalternatif" class="btn btn-primary">Detail</a>
                </div>
            </div>
        </div>
    </div>
    <div class="table-responsive-sm mt-3" style="width: 100%;">
        <table class="table table-bordered border-dark bg-white">
            <tr class="text-center">
                <td style="width: 5%;">Rank</td>
                <td style="width: 60%;">Nama Guru</td>
                <td style="width: 15%;">Jabatan</td>
                <td style="width: 10%;">Jenis Tugas</td>
            </tr>
            <?php $i = 1; ?>
            <?php foreach ($data_guru as $rk) : ?>
                <tr class="text-center">
                    <td>Rank <?= $i++; ?></td>
                    <td><?= $rk['nama_gr']; ?></td>
                    <td><?= $rk['jabatan_gr']; ?></td>
                    <td><?= $rk['tugas_gr']; ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</div>

<?= $this->endSection(); ?>