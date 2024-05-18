<?= $this->extend('template/layout') ?>

<?= $this->section('content') ?>

</div>

<!-- about section start -->
<div class="services_section layout_padding">
    <div class="container">
        <h1 class="services_taital">Detail Merchandise</h1>
        <p class="services_text">Berikut adalah kegiatan yang bisa anda lakukan ketika anda bergabung bersama kami di
            UKM Renjana Buana:</p>
        <div class="services_section_3">
            <div class="row">
                <div class="col-md-5 col-12 col_img">
                    <div class="kotak">
                        <img src="<?= base_url('assets/images/') . $merchandise['img']  ?>" alt="">
                    </div>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-6 c ol-12 col_detail">
                    <div class="card">
                        <h3>Detail Product</h3>
                        <div class="body_detail">
                            <p>Product : <?= $merchandise['name'] ?></p>
                            <p>Description : <?= $merchandise['desc'] ?></p>
                            <p>Price : <?= rupiah($merchandise['price']) ?></p>
                        </div>
                        <div class="container-fluid">
                            <div class="row row_button">
                                <div class="col-md-6 col-6">
                                    <a href="<?= base_url('renjana-buana-merchandise') ?>"
                                        class="btn btn-sm btn-danger btn_detail">Kembali</a>
                                </div>
                                <div class="col-md-6 col-6">
                                    <button class="btn btn-sm btn-primary btn_detail">Beli</button>
                                </div>
                            </div>
                            <div class="row mt-2 mb-2">
                                <div class="col-md-12 col-12">
                                    <button class="btn btn-sm btn-info btn_detail" onclick="showAlert()">Ukuran
                                        Panduan</button>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>