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
                <tr>
                    <td scope="row" class="text-center">1</td>
                    <td class="text-center">
                        <img class="img_anggota" src="<?= base_url('assets/images/user.jfif') ?>" alt="">
                    </td>
                    <td>Bayu Novandrie</td>
                    <td>Pamulang Barat</td>
                </tr>

            </tbody>
        </table>
    </div>
</div>
<?= $this->endSection() ?>