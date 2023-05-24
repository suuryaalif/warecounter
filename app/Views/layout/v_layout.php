<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="warecounter">
    <meta name="author" content="sardev with bootsrap">

    <title><?= $title; ?></title>

    <!-- Custom fonts for this template-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('/assets') ?>/css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.css">

</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">

        <?= $this->include('layout/sidebar'); ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <?= $this->renderSection('main-userdashboard') ?>

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Sardev Website 2023</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->
        <!-- Bootstrap core JavaScript-->
        <!-- java script untuk element tambahan -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.js"></script>
        <script src="<?= base_url('/assets') ?>/vendor/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
        <script src="<?= base_url('/assets') ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
        <!-- Core plugin JavaScript-->
        <script src="<?= base_url('/assets') ?>/vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="<?= base_url('/assets') ?>/js/sb-admin-2.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('#dataTable').DataTable();
            });
            //sweetalert funcution
            $(function() {
                <?php if (session()->has("success")) { ?>
                    Swal.fire({
                        icon: 'success',
                        title: 'Congrats!',
                        text: '<?= session("success") ?>'
                    })
                <?php } elseif (session()->has("Caution")) { ?>
                    Swal.fire({
                        icon: 'warning',
                        title: 'Oops, Sorry',
                        text: '<?= session("Caution") ?>'
                    })
                <?php } elseif (session()->has("error")) { ?>
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops, Sorry',
                        text: '<?= session("error") ?>'
                    })
                <?php } ?>

            });
        </script>
</body>

</html>