<?= $this->extend('layout/template2'); ?>

<?= $this->section('item'); ?>

<div class="mt-3">
    <h4>perbandingan alternatif</h4>
</div>

<div class="container my-3">
    <div class="row ">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <form action="/alternatifcontroller/saveAlt" method="post">
                        <?= csrf_field(); ?>
                        <table class="table table-bordered border-dark bg-white">
                            <tr>
                                <td>
                                    <select name="id_krit" class="form-select" aria-label="Default select example">
                                        <?php foreach ($kriteria as $krit) : ?>
                                            <option value="<?= $krit['id_krit'] ?>"><?= $krit['nama'] ?></option>
                                        <?php endforeach; ?>
                                </td>
                            </tr>
                        </table>
                        <table class="table table-bordered border-dark bg-white">
                            <tr class="text-center">
                                <td style="width: 10%;">alternatif Utama</td>
                                <td style="width: 5%;">alternatif pembanding</td>
                                <td style="width: 25%;">nilai alternatif</td>
                            </tr>
                            <?php for ($j = 0; $j <  count($alternatif) * count($alternatif); $j++) : ?>
                                <tr name="all[<?= $j; ?>]" class="text-center">
                                    <td>
                                        <select name="id_alt1[]" class="form-select" aria-label="Default select example">
                                            <?php foreach ($alternatif as $alt) : ?>
                                                <option value="<?= $alt["id_guru"]; ?>"><?= $alt['id_guru']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </td>
                                    <td>
                                        <select name="id_alt2[]" class="form-select" aria-label="Default select example">
                                            <?php foreach ($alternatif as $alt) : ?>
                                                <option value="<?= $alt["id_guru"]; ?>"><?= $alt['id_guru']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </td>
                                    <td> <select name="nilai_perb_alt[]" class="form-select" aria-label="Default select example">
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
                                        </select></td>
                                </tr>
                            <?php endfor; ?>
                        </table>
                        <button type="submit" class="btn btn-primary">Masukan</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <form action="/alternatifcontroller/saveRata" method="post">
                <?= csrf_field(); ?>
                <div class="card">
                    <div class="card-body">
                        <table class="table table-bordered border-dark bg-white">
                            <tr>
                                <td style="width: 15%;">id_kriteria</td>
                                <td>id_alt</td>
                                <td>Average Value</td>
                            </tr>
                            <?php foreach ($sum as $id_alt2 => $averages) { ?>
                                <tr>
                                    <td colspan="3" style="background-color: gray;"><?php echo $id_alt2; ?></td>
                                </tr>
                                <?php foreach ($averages as $average) { ?>
                                    <tr>
                                        <td><input type="text" readonly name="id_kriteria[]" value="<?php echo $average->id_kriteria; ?>"></td>
                                        <td><input type="text" readonly name="id_alt[]" value="<?php echo $average->id_alt2; ?>"></td>
                                        <td><input type="text" readonly name="rata_alt[]" value="<?php echo $average->average; ?>"></td>
                                    </tr>
                                <?php } ?>
                            <?php } ?>
                        </table>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Masukan</button>
                <a href="<?= site_url('alternatifcontroller/deleteAll') ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete all data?')">Hapus</a>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>