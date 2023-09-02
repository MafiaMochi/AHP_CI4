<?= $this->extend('layout/template2'); ?>

<?= $this->section('item'); ?>
<div>
    <h4>Skala Perbandingan</h4>
</div>

<div class="input-group mb-3 mt-3" style="width: 75%;">
    <span class="input-group-text" id="basic-addon1">Nama Kriteria</span>
    <input type="text" class="form-control" placeholder="Kriteria" aria-label="Username" aria-describedby="basic-addon1"><button class="btn bg-black btn-outline-secondary text-white" type="button" id="button-addon2">Simpan</button>
</div>

<div style="width: 75%;">
    <table class="table table-bordered border-dark bg-white">
        <tr class="text-center">
            <td>no</td>
            <td>Nama kriteria</td>
        </tr>
        <?php $i = 1; ?>
        <?php foreach ($prefrence as $pref) : ?>
            <tr class="text-center">
                <td><?= $i++; ?></td>
                <td>wow</td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>
<div style="width: 100%;">
    <table class="table table-bordered border-dark bg-white">
        <tr class="text-center">
            <td>kriteria Utama</td>
            <td style="width: 25%;">nilai kriteria</td>
            <td style="width: 35%;">kriteria pembanding</td>
        </tr>
        <tr class="text-center">
            <td><select class="form-select" aria-label="Default select example">
                    <option selected>kriteria</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select></td>
            <td style="width: 25%;"><select class="form-select" aria-label="Default select example">
                    <option selected>Nilai kriteria</option>
                    <<option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="1">4</option>
                        <option value="2">5</option>
                        <option value="3">6</option>
                        <option value="1">7</option>
                        <option value="2">8</option>
                        <option value="3">9</option>
                </select></td>
            <td><select class="form-select" aria-label="Default select example">
                    <option selected>kriteria</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select></td>
        </tr>
    </table>
    <button class="btn bg-black btn-outline-secondary text-white" type="button" id="button-addon2">Simpan</button>
</div>
<div class="d-flex">
    <div class="ms-auto"></div>
    <button class="btn bg-primary btn-outline-primary text-white" type="button" id="button-addon2">Lanjut</button>
</div>
<?= $this->endSection(); ?>