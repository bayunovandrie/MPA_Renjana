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
                        <img src="<?= image_url() . $merchandise['img']  ?>" alt="">
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
                                    <button class="btn btn-sm btn-primary btn_detail"
                                        data-my="<?= $merchandise['id'] ?>" data-toggle="modal"
                                        data-target="#modal_form_beli">Beli</button>
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

<div class="modal fade" id="modal_form_beli" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Form Pembelian Merchandise</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('order') ?>" method="post">
                <?= csrf_field() ?>
                <div class="modal-body">

                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Nama Pembeli</label>
                                        <input type="text" class="form-control" name="nama_pembeli"
                                            placeholder="Nama Pembeli" required>
                                        <input type="hidden" id="myDataInput" name="product_id">
                                        <input type="hidden" name="price" value="<?= $merchandise['price'] ?>">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Alamat Pembeli</label>
                                        <textarea required class="form-control" name="alamat_pembeli" id="" cols="10"
                                            rows="5"></textarea>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-6 col-12">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Nama Penerima</label>
                                        <input required type="text" class="form-control" name="nama_penerima"
                                            placeholder="Nama Pembeli">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Alamat Penerima</label>
                                        <textarea required class="form-control" name="alamat_penerima" id="" cols="10"
                                            rows="5"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>No Hp Penerima</label>
                                        <input required type="number" class="form-control" name="no_hp_penerima"
                                            placeholder="No Hp Penerima">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection() ?>