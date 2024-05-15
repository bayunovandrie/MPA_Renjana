<?= $this->extend('template/layout') ?>

<?= $this->section('content') ?>

</div>

<!-- about section start -->
<div class="about_section layout_padding">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="about_taital_main">
                    <h1 class="about_taital">About Us</h1>
                    <p class="about_text">Renjana Buana adalah salah satu unit kegiatan mahasiswa Universitas
                        Nadlatul Ulama Indonesia yang berfokus pada kegiatan pencinta lingkungan.</p>
                    <div class="readmore_bt"><a href="about.html">Read More</a></div>
                </div>
            </div>
            <div class="col-md-6 padding_right_0">
                <div><img src="<?= base_url('assets/images/home.jpeg') ?>" class="about_img"></div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>