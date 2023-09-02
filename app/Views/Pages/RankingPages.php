<?= $this->extend('layout/template2'); ?>

<?= $this->section('item'); ?>

<div>
    <h3>Hasil Ranking</h3>
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

<?= $this->endSection(); ?>