<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>MPA Renjana Buana</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="website icon" type="png" href="<?= base_url('assets/images/logorb.png') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/style.css') ?>">
    <!-- Responsive-->
    <link rel="stylesheet" href="<?= base_url('assets/css/responsive.css') ?>">
    <!-- fevicon -->
    <!-- <link rel="icon" href="<?= base_url('assets/images/fevicon.png') ?>" type="image/gif" /> -->
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/jquery.mCustomScrollbar.min.css') ?>">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Righteous&display=swap" rel="stylesheet">
    <!-- owl stylesheets -->
    <link rel="stylesheet" href="<?= base_url('assets/css/owl.carousel.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/owl.theme.default.min.css') ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
        media="screen">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.css" />
</head>

<body>
    <!-- header section start -->
    <div class="header_section">

        <?= $this->include('template/topbar') ?>

        <?= $this->renderSection('content'); ?>

        <?= $this->include('template/footer') ?>
        <!-- copyright section end -->
        <!-- Javascript files-->
        <script src=<?= base_url('assets/js/jquery.min.js') ?>></script>
        <script src=<?= base_url('assets/js/popper.min.js') ?>></script>
        <script src=<?= base_url('assets/js/bootstrap.bundle.min.js') ?>></script>
        <script src=<?= base_url('assets/js/jquery-3.0.0.min.js') ?>></script>
        <script src=<?= base_url('assets/js/plugin.js') ?>></script>
        <!-- sidebar -->
        <script src=<?= base_url('assets/js/jquery.mCustomScrollbar.concat.min.js') ?>></script>
        <script src=<?= base_url('assets/js/custom.js') ?>></script>
        <!-- javascript -->
        <script src=<?= base_url('assets/js/owl.carousel.js') ?>></script>
        <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
        <script>
        function showAlert() {
            // Alert with image
            Swal.fire({
                title: "Panduan Size",
                text: null,
                imageUrl: "<?= base_url('assets/images/paduan_size.png') ?>", // URL gambar yang ingin ditampilkan
                imageWidth: 800, // Lebar gambar dalam px
                imageHeight: 400, // Tinggi gambar dalam px
                imageAlt: "", // Deskripsi gambar (opsional)
                confirmButtonText: "Close",
            });
        }
        </script>
</body>



</html>