<?= $this->extend('template/layout') ?>

<?= $this->section('content') ?>

</div>

<!-- about section start -->
<div class="services_section layout_padding">
    <div class="container">
        <h1 class="services_taital">Detail Merchandise</h1>
        <p class="services_text">Berikut adalah kegiatan yang bisa anda lakukan ketika anda bergabung bersama kami di
            UKM Renjana Buana:</p>
        <div class="services_section_2">
            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-5" style="width: 18rem;">
                        <img src="<?= base_url('assets/images/') . $merchandise['img']  ?>" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center"><?= $merchandise['name'] ?></h5>
                            <p class="card-text"><?= $merchandise['desc'] ?></p>
                            <p class="card-text"><?= rupiah($merchandise['price']) ?></p>
                            <div class="text-center">
                                <a href="<?= base_url('purchase-now/') . $merchandise['id'] ?>"
                                    class="btn btn-primary">Purchase Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>