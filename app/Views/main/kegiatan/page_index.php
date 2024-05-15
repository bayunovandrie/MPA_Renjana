<?= $this->extend('template/layout') ?>

<?= $this->section('content') ?>

</div>

<!-- about section start -->
<div class="services_section layout_padding">
    <div class="container">
        <h1 class="services_taital">Kegiatan</h1>
        <p class="services_text">Berikut adalah kegiatan yang bisa anda lakukan ketika anda bergabung bersama kami di
            UKM Renjana Buana:</p>
        <div class="services_section_2">
            <div class="row">
                <div class="col-md-4">
                    <div><img src="<?= base_url('assets/images/img-1.png') ?>" class="services_img"></div>
                    <div class="btn_main"><a href="#">Rafting</a></div>
                </div>
                <div class="col-md-4">
                    <div><img src="<?= base_url('assets/images/img-2.png') ?>" class="services_img"></div>
                    <div class="btn_main active"><a href="#">Hiking</a></div>
                </div>
                <div class="col-md-4">
                    <div><img src="<?= base_url('assets/images/img-3.png') ?>" class="services_img"></div>
                    <div class="btn_main"><a href="#">Camping</a></div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>