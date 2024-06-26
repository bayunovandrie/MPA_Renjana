<?= $this->extend('template/layout') ?>

<?= $this->section('content') ?>

</div>

<!-- about section start -->
<div class="services_section layout_padding">
    <div class="container">
        <h1 class="services_taital">Merchandise</h1>
        <p class="services_text">Berikut adalah kegiatan yang bisa anda lakukan ketika anda bergabung bersama kami di
            UKM Renjana Buana:</p>
        <div class="services_section_2">
            <div class="row">
                <?php  foreach ($product as $value) : ?>
                <div class="col-md-4">
                    <div class="card mb-5" style="width: 18rem;">
                        <img src="<?= base_url('assets/images/') . $value['img']  ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center"><?= $value['name'] ?></h5>
                            <p class="card-text"><?= $value['desc'] ?></p>
                            <p class="card-text"><?= rupiah($value['price']) ?></p>
                            <div class="text-center">
                                <a href="<?= base_url('purchase-now/') . $value['id'] ?>" class="btn btn-primary">See
                                    Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach ?>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>