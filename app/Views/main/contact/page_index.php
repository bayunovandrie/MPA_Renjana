<?= $this->extend('template/layout') ?>

<?= $this->section('content') ?>

</div>

<div class="contact_section layout_padding">
    <div class="container">
        <table id="datatables" class="table table_anggota" style="width:100%">
            <thead>
                <tr>
                    <th scope=" col" width="10">No</th>
                    <th scope="col" width="20">Foto</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Alamat</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                 foreach($anggota as $val) : ?>

                <tr>
                    <td scope="row" class="text-center"><?= $no++; ?></td>
                    <td class="text-center">
                        <img class="img_anggota" src="<?= base_url('assets/images/user.jfif') ?>" alt="">
                    </td>
                    <td><?= $val['user_name'] ?></td>
                    <td><?= $val['user_alamat'] ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<?= $this->endSection() ?>