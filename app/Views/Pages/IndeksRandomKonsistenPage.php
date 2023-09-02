<?= $this->extend('layout/template2'); ?>

<?= $this->section('item'); ?>

<div>
    <h3>Indek Random Konsisten page</h3>
</div>

<div style="width: 25%;">
    <table class="table table-bordered border-dark bg-white">
        <tr class="text-center">
            <td style="width: 5%;">no</td>
            <td style="width: 25%;">Nilai Indeks </td>
        </tr>
        <?php $i = 1; ?>
        <?php foreach ($indeks as $irk) : ?>
            <tr class="text-center">
                <td><?= $i++; ?></td>
                <td><?= $irk['nilai_irk']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
    <?= $pager->newpage() ?>
</div>
<?= $this->endSection(); ?>