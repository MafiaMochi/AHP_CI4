<?= $this->extend('layout/template2'); ?>

<?= $this->section('item'); ?>

<div class="mt-3">
    <h4>Proses Matriks</h4>
</div>
<div class="table-responsive-sm mt-3" style="width: 75%;">
    <form action="/kriteriacontroller/savejml" method="post">
        <table class="table table-bordered border-dark bg-white">
            <tr>
                <td style="width: 25%;"></td>
                <?php foreach ($kriteria as $krit) : ?>
                    <td style="width: 25%;"><?= $krit['nama']; ?></td>
                <?php endforeach; ?>
            </tr>
            <tr class="d-none">
                <td></td>
                <?php foreach ($hasil as $has) : ?>
                    <td style="width: 25%;"><input name="id_kriteria[]" value="<?= $has['id_kriteria2']; ?>" type="text" class="form-control" placeholder="<?= $has['id_kriteria2']; ?>" aria-label="<?= $has['id_kriteria2']; ?>" aria-describedby="basic-addon1"></input></td>
                <?php endforeach; ?>
            </tr>
            <tr>
                <td>Jumlah</td>
                <?php foreach ($jumlah as $c) : ?>
                    <td style="width: 25%;"><input name="jml[]" readonly value="<?= $c->total_nilai_perb ?>" type="text" class="form-control" placeholder="<?= $c->total_nilai_perb ?>" aria-label="<?= $c->total_nilai_perb ?>" aria-describedby="basic-addon1"></input></td>
                <?php endforeach; ?>
            </tr>
        </table>
        <button type="submit" class="btn btn-primary">Masukan</button>
    </form>

</div>
<div class="mt-3">
    <h4>Nilai Eigen</h4>
</div>

<div class="container my-3">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <form action="/kriteriacontroller/saveeigen" method="post">
                        <table class="table table-bordered border-dark bg-white">
                            <tr>
                                <td style="width: 5%;">kriteria utama</td>
                                <td style="width: 5%;">kriteria Pembanding</td>
                                <td style="width: 20%;">nilai Eigen</td>
                            </tr>
                            <?php foreach ($eigen as $eg) : ?>
                                <tr>
                                    <td><input name="id_kriteria1[]" readonly value="<?= $eg->id_kriteria1; ?>" type="text" class="form-control" placeholder="<?= $eg->id_kriteria1; ?>" aria-label="<?= $eg->id_kriteria1; ?>" aria-describedby="basic-addon1"></input></td>
                                    <td><input name="id_kriteria2[]" readonly value="<?= $eg->id_kriteria2; ?>" type="text" class="form-control" placeholder="<?= $eg->id_kriteria2; ?>" aria-label="<?= $eg->id_kriteria2; ?>" aria-describedby="basic-addon1"></input></td>
                                    <td><input name="jmleigen[]" readonly value="<?= $eg->nilai_perb; ?>" type="text" class="form-control" placeholder="<?= $eg->nilai_perb; ?>" aria-label="<?= $eg->nilai_perb; ?>" aria-describedby="basic-addon1"></input></td>
                                </tr>
                            <?php endforeach; ?>
                        </table>
                        <button type="submit" class="btn btn-primary">Masukan</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <div>
                        <h3>jumlah Eigen</h3>
                    </div>
                    <table class="table table-bordered border-dark bg-white">
                        <tr>
                            <td style="width: 25%;"></td>
                            <?php foreach ($kriteria as $krit) : ?>
                                <td style="width: 25%;"><?= $krit['nama']; ?></td>
                            <?php endforeach; ?>
                        </tr>
                        <tr class="d-none">
                            <td></td>
                            <?php foreach ($hasil as $has) : ?>
                                <td style="width: 25%;"><input name="id_kriteria[]" value="<?= $has['id_kriteria2']; ?>" type="text" class="form-control" placeholder="<?= $has['id_kriteria2']; ?>" aria-label="<?= $has['id_kriteria2']; ?>" aria-describedby="basic-addon1"></input></td>
                            <?php endforeach; ?>
                        </tr>
                        <tr>
                            <td>Jumlah eigen</td>
                            <?php foreach ($jumlaheigen as $teigen) : ?>
                                <td style="width: 25%;"><input name="jml[]" value="<?= $teigen->total_eigen ?>" type="text" class="form-control" readonly placeholder="<?= $teigen->total_eigen ?>" aria-label="<?= $teigen->total_eigen ?>" aria-describedby="basic-addon1"></input></td>
                            <?php endforeach; ?>
                        </tr>
                    </table>
                </div>
                <div class="card-body">
                    <div>
                        <h3>Rata-Rata</h3>
                    </div>
                    <form action="/kriteriacontroller/saverata" method="post">
                        <table class="table table-bordered border-dark bg-white">
                            <tr>
                                <td style="width: 25%;"></td>
                                <?php foreach ($kriteria as $krit) : ?>
                                    <td style="width: 25%;"><?= $krit['nama']; ?></td>
                                <?php endforeach; ?>
                            </tr>
                            <tr class="d-none">
                                <td></td>
                                <?php foreach ($hasil as $has) : ?>
                                    <td style="width: 25%;"><input name="id_kriteria[]" value="<?= $has['id_kriteria2']; ?>" type="text" readonly class="form-control" placeholder="<?= $has['id_kriteria2']; ?>" aria-label="<?= $has['id_kriteria2']; ?>" aria-describedby="basic-addon1"></input></td>
                                <?php endforeach; ?>
                            </tr>
                            <tr>
                                <td>Rata-rata</td>
                                <?php foreach ($rata as $r) : ?>
                                    <td style="width: 25%;"><input name="jml[]" value="<?= $r->rata_eigen ?>" type="text" readonly class="form-control" placeholder="<?= $r->rata_eigen ?>" aria-label="<?= $r->rata_eigen ?>" aria-describedby="basic-addon1"></input></td>
                                <?php endforeach; ?>
                            </tr>
                        </table>
                        <button type="submit" class="btn btn-primary">Masukan</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
<?= $this->endSection(); ?>