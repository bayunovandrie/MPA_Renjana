<?= $this->extend('template/layout') ?>

<?= $this->section('content') ?>

</div>

<!-- about section start -->
<div class="services_section layout_padding">
    <div class="container">
        <h1 class="services_taital">Konfirmasi Pembelian Mechandise</h1>
        <p class="services_text mb-4">Untuk Mengkonfirmasi Pembelian anda:</p>
        <div class="services_section_3">
            <div class="row">
                <div class="col-md-6 col-12">
                    <p class="services_text">Nama Pembelian: <strong><?= $trans['nama_pembeli'] ?></strong></p>
                </div>
                <div class="col-md-6 col-12">
                    <p class="services_text">Nama Penerima: <strong><?= $trans['nama_penerima'] ?></strong></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-12">
                    <p class="services_text">Alamat Pembelian: <strong><?= $trans['alamat_pembeli'] ?></strong></p>
                </div>
                <div class="col-md-6 col-12">
                    <p class="services_text">Alamat Penerima: <strong><?= $trans['alamat_penerima'] ?></strong></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-12">

                </div>
                <div class="col-md-6 col-12">
                    <p class="services_text">No Hp Penerima: <strong><?= $trans['nohp_penerima'] ?></strong></p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3 col-3">
                    <h3>Detail Product: </h3>
                </div>
                <div class="col-md-9 col-9">
                    <img src="<?= image_url() . $trans['img'] ?>" alt="">
                </div>

            </div>
            <div class="row">
                <div class="col-md-12">
                    <h3>Silahkan Menghubungi Admin Untuk Konfirmasi Pesanan anda !!!</h3>
                </div>
                <div class="col-md-12">
                    <a href="#" onclick="redirectToWhatsApp()" target="_blank" class="btn btn-sm btn-primary">Hubungi
                        Admin</a>
                </div>

            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>