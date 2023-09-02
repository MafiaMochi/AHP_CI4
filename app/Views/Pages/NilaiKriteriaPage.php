<?= $this->extend('layout/template2'); ?>

<?= $this->section('item'); ?>
<div>
    <h4>Perbandingan</h4>
</div>

<div style="width: 100%;">
    <form action="/kriteriacontroller/save" method="post">
        <?= csrf_field(); ?>
        <table class="table table-bordered border-dark bg-white" style="width: 75%;">
            <tr class="text-center">
                <td>kriteria Utama</td>
                <td style="width: 25%;">kriteria pembanding</td>
                <td style="width: 25%;">nilai kriteria</td>
            </tr>
            <?php for ($i = 0; $i <  $count * $count; $i++) : ?>
                <tr name="all[<?= $i; ?>]" class="text-center">
                    <td style="width: 25%;">
                        <select name="id_kriteria1[]" class="form-select" aria-label="Default select example">
                            <?php foreach ($kriteria as $krit) : ?>
                                <option value="<?= $krit["id_krit"]; ?>"><?= $krit['nama']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </td>
                    <td style="width: 25%;">
                        <select name="id_kriteria2[]" class="form-select" aria-label="Default select example">
                            <?php foreach ($kriteria as $krit) : ?>
                                <option value="<?= $krit["id_krit"]; ?>"><?= $krit['nama']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </td>
                    <td>
                        <select name="nilai_perb[]" class="form-select" aria-label="Default select example">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="0.5">1/2</option>
                            <option value="3">3</option>
                            <option value="0.33333333333333333333333333333333">1/3</option>
                            <option value="4">4</option>
                            <option value="0.25">1/4</option>
                            <option value="5">5</option>
                            <option value="0.2">1/5</option>
                            <option value="6">6</option>
                            <option value="0.16666666666666666666666666666667">1/6</option>
                            <option value="7">7</option>
                            <option value="0.14285714285714285714285714285714">1/7</option>
                            <option value="8">8</option>
                            <option value="0.125">1/8</option>
                            <option value="9">9</option>
                            <option value="0.11111111111111111111111111111111">1/9</option>
                        </select>
                    </td>
                </tr>
            <?php endfor; ?>
        </table>
        <button class="btn bg-black btn-outline-secondary text-white mx-3 my-1" type="submit">Simpan</button>
        <button class="btn btn-danger text-white" type="submit">Hapus</button>
    </form>
    <div class="container-fluid">

        <table class="table table-bordered border-dark bg-white">
            <tr>
                <td>kriteria utama</td>
                <td>kriteria Pembanding</td>
                <td>nilai perbandingan</td>
            </tr>
            <?php foreach ($hasil as $has) : ?>
                <tr>
                    <td><?= $has['id_kriteria1']; ?></td>
                    <td><?= $has['id_kriteria2']; ?></td>
                    <td><?= $has['nilai_perb']; ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
        <?= $pager->newpage() ?>
    </div>
</div>
<?= $this->endSection(); ?>