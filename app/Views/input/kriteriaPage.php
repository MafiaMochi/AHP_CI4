<?= $this->extend('layout/template2'); ?>

<?= $this->section('item'); ?>
<div>
    <h4>Data Kriteria</h4>
</div>
<div class="my-3">
    <form action="/kriteriacontroller/savekrit" method="post">
        <div class="input-group flex-nowrap mb-3" style="width: 15%;">
            <span class="input-group-text" id="basic-addon2">id Kriteria</span>
            <input type="text" name="id_kriteria" id="id_kriteria" class="form-control form-control-sm">
        </div>
        <div class="input-group flex-nowrap mb-3" style="width: 50%;">
            <span class="input-group-text" id="basic-addon1">Nama Kriteria</span>
            <input type="text" name="nama_kriteria" id="nama_kriteria" class="form-control">
        </div>
        <button class="btn bg-black btn-outline-secondary text-white" type="submit" id="button-addon2">Simpan</button>
    </form>
</div>


<div style="width: 75%;">
    <table class="table table-bordered border-dark bg-white">
        <tr class="text-center">
            <td>id</td>
            <td>Nama kriteria</td>
            <td>action</td>
        </tr>
        <?php foreach ($kriteria as $krit) : ?>
            <tr class="text-center">
                <td><?= $krit['id_krit']; ?></td>
                <td><?= $krit['nama']; ?></td>
                <td><button><i class="fa-solid fa-trash" style="color: #ff0000;"></i>Hapus</button></td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>

<div class="d-flex">
    <div class="mx-auto"></div>
    <a class="btn btn-primary" href="/kriteriacontroller/nilaiperb" role="button">Next</a>
</div>
<?= $this->endSection(); ?>