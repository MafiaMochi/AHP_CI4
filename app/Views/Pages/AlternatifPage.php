<?= $this->extend('layout/template2'); ?>

<?= $this->section('item'); ?>
<div>
    <h3>Input Data Guru</h3>
</div>

<form class="needs-validation" novalidate action="/gurucontroller/saveguru" method="post">
    <div class="container">
        <div class="input-group <?= ($validation->hasError('id_guru')) ?
                                    'has-validation' : '' ?> mt-1" style=" width: 20%;">
            <span class=" input-group-text" id="basic-addon1" style=" width: 60%;">Id Guru</span>
            <input type="text" name="id_guru" class="form-control" placeholder="id" aria-label="Username" aria-describedby="basic-addon1" required autofocus>
            <div class="invalid-feedback">
                <?= $validation->hasError('id_guru') ?>
            </div>
        </div>
        <div class="input-group mt-1" style=" width: 40%;">
            <span class=" input-group-text" id="basic-addon1" style=" width: 30%;">Nama Guru</span>
            <input type="text" name="nama_gr" class="form-control" placeholder="nama" aria-label="Username" aria-describedby="basic-addon1">
        </div>
        <div class="input-group mt-1" style=" width: 50%;">
            <span class=" input-group-text" id="basic-addon1" style="width: 24%;">Jabatan</span>
            <input type="text" name="jabatan_gr" class="form-control" placeholder="Jabatan" aria-label="Username" aria-describedby="basic-addon1">
        </div>
        <div class="input-group mt-1" style=" width: 45%;">
            <span class=" input-group-text" id="basic-addon1" style="width: 26.5%;">Tugas</span>
            <input type="text" name="tugas_gr" class="form-control" placeholder="Tugas" aria-label="Username" aria-describedby="basic-addon1">
        </div>
    </div>
    <div class="container mt-2">
        <button class="btn bg-black btn-outline-secondary text-white" type="submit" id="button-addon2">Simpan</button>
    </div>
</form>
<div class="table-responsive-sm mt-3" style="width: 100%;">
    <table class="table table-bordered border-dark bg-white">
        <tr class="text-center">
            <td style="width: 5%;">ID</td>
            <td style="width: 45%;">Nama Guru</td>
            <td style="width: 20%;">Jabatan</td>
            <td style="width: 15%;">Jenis Tugas</td>
            <td style="width: 20%;">Action</td>
        </tr>
        <?php foreach ($guru as $g) : ?>
            <tr class="text-center">
                <td><?= $g['id_guru'] ?></td>
                <td><?= $g['nama_gr']; ?></td>
                <td><?= $g['jabatan_gr']; ?></td>
                <td><?= $g['tugas_gr']; ?></td>
                <td style="font-size: small;"><a href="<?= base_url('gurucontroller/hapus/' . urlencode($g['id_guru'])); ?>" class="btn btn-danger" onclick="return confirm('ada yakin untuk mengahapus data?')"><i class="fa-solid fa-trash" style="color: #F4EEEE;"></i> Hapus</a></td>
            </tr>
        <?php endforeach; ?>
    </table>
    <?= $pagegr->newpage(); ?>
</div>
<?= $this->endSection(); ?>