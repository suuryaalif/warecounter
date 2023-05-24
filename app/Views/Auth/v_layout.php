<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="back-end website for adminstration use">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <meta name="redeveloping" content="Surya alif">
    <title><?= $title; ?></title>
    <link href="<?= base_url('') ?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@800&family=Poppins:wght@200;400&family=Roboto:wght@300;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
</head>

<body>

    <?= $this->renderSection('main-loginpage') ?>
    <?= $this->renderSection('main-registerpage') ?>
    <?= $this->renderSection('main-activatedpage') ?>

    <!-- Footer -->
    <footer id="footer" class="text-center text-lg-start bg-white text-muted">
        <!-- Section: Links  -->
        <section class="">
            <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <!-- Content -->
                        <h6 class="text-uppercase fw-bold mb-4">SARCORP GROUP</h6>
                        <p>
                            just a development site.
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Warecounter
                        </h6>
                        <p>
                            <a href="<?= base_url(''); ?>/" class="text-reset">Home</a>
                        </p>
                        <p>
                            <a href="<?= base_url(''); ?>/register" class="text-reset">Get Counter</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                        <p><i class="fas fa-home me-3 text-secondary"></i> East Jakarta, Industrial St., IDN</p>
                        <p>
                            <i class="fas fa-envelope me-3 text-secondary"></i>
                            info@example.com
                        </p>
                        <p><i class="fas fa-phone me-3 text-secondary"></i>+62 21 88888</p>
                        <p><i class="fas fa-print me-3 text-secondary"></i>+62 21 88888</p>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.025);">
            © 2023 Copyright:
            <a class="text-reset fw-bold" href="/">sardevweb amature</a>
        </div>
        <!-- Footer -->
    </footer>


    <script src="<?= base_url('') ?>/assets/js/bootstrap.bundle.min.js"></script>

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <!-- java script untuk element tambahan -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#dataTable').DataTable();
        });
        //hideorshowpassword
        function showPassFunction() {
            var input = document.getElementById("password");
            if (input.type === "password") {
                input.type = "text";
            } else {
                input.type = "password";
            }
        }

        function showPassFunction2() {
            var input = document.getElementById("password2");
            if (input.type === "password") {
                input.type = "text";
            } else {
                input.type = "password";
            }
        }
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