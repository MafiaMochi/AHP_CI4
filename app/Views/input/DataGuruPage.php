<?= $this->extend('layout/template2'); ?>

<?= $this->section('item'); ?>
<div>
    <h4>Data Guru</h4>
</div>
<div>
    <a href="/alternatifcontroller/alternatif" type="button" class="btn btn-success"><i class="fa-solid fa-user-plus"></i>Tambah</a>
</div>
<div class="table-responsive-sm mt-3" style="width: 100%;">
    <table class="table table-bordered border-dark bg-white">
        <tr class="text-center">
            <td style="width: 5%;">NO</td>
            <td style="width: 45%;">Nama Guru</td>
            <td style="width: 20%;">Jabatan</td>
            <td style="width: 15%;">Jenis Tugas</td>
            <td style="width: 20%;">Action</td>
        </tr>
        <?php $i = 1; ?>
        <?php foreach ($guru as $g) : ?>
            <tr class="text-center">
                <td><?= $i++; ?></td>
                <td><?= $g['nama_gr']; ?></td>
                <td><?= $g['jabatan_gr']; ?></td>
                <td><?= $g['tugas_gr']; ?></td>
                <td style="font-size: small;"><button><i class="fa-solid fa-trash" style="color: #ff0000;"></i>Hapus</button><button><i class="fa-solid fa-file-pen" style="color: #005eff;"></i>Ubah</button></td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>
<?= $this->endSection(); ?>