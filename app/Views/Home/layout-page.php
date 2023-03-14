<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title><?= $title; ?></title>
    <link href="<?= base_url('') ?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@800&family=Poppins:wght@200;400&family=Roboto:wght@300;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<!-- css custom -->
<style>
    body {
        background: rgb(255, 255, 255);
        background: linear-gradient(180deg, rgba(255, 255, 255, 1) 36%, rgba(227, 227, 229, 1) 61%, rgba(226, 226, 228, 1) 69%, rgba(217, 217, 220, 1) 82%, rgba(208, 208, 212, 1) 97%, rgba(69, 69, 85, 1) 98%, rgba(0, 0, 0, 1) 100%);
        background-size: cover;
        background-repeat: no-repeat;
    }

    #navlink {
        transition: 0.5s ease;
    }

    #logo-banner {
        width: 20px;
        height: 20px;
        margin-right: 6px;
        transition: 0.5s ease;
    }

    #logo-banner:hover {
        width: 40px;
        height: 40px;
        transform: rotate(-4deg);
    }

    #navlink:hover {
        font-weight: 600;
        text-decoration: underline;
    }

    #section-one {
        background-image: url('./assets/img/bg-sect1.jpg');
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        box-sizing: border-box;
        box-shadow: 10px 10px 5px;
    }

    #section-two {
        scroll-behavior: smooth;
        height: 100%;
        z-index: -1;
    }

    #section-four {
        display: flex;
        flex-direction: column;
        align-content: flex-end;
        box-sizing: border-box;
        background-color: rgba(0, 0, 0, 0.8);
    }



    #section-five {
        background-image: url('./assets/img/bg-sect5.jpg');
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        font-family: 'Poppins', sans-serif;
        overflow: hidden;
    }

    #panel-counter {
        display: flex;
        flex-direction: row;
        justify-content: center;
        gap: 1em;
    }

    #cardhistory {
        display: flex;
        flex-direction: row;
        border: none;
        border-radius: 300px 0px 0px 0px;
    }

    #cardimg {
        max-width: 220px;
        max-height: 260px;
        padding: 10px 10px;
        margin-top: 6px;
        border: none;
    }

    #nowCounter {
        border: solid rgba(0, 0, 0, 0.025);
        box-shadow: 0 0 0 0 rgba(51, 217, 178, 1);
        animation: pulse-green 2s infinite;
    }

    #nextCounter {
        background-color: #4665FF;
        color: #fff;
        border: solid rgba(0, 0, 0, 0.025);
        box-shadow: 0 0 0 0 rgba(51, 217, 178, 1);
        animation: pulse-yellow 2s infinite;
    }

    @keyframes pulse-green {
        0% {
            transform: scale(0.95);
            box-shadow: 0 0 0 0 rgba(51, 217, 178, 0.7);
        }

        70% {
            transform: scale(1);
            box-shadow: 0 0 0 10px rgba(51, 217, 178, 0);
        }

        100% {
            transform: scale(0.95);
            box-shadow: 0 0 0 0 rgba(51, 217, 178, 0);
        }
    }

    @keyframes pulse-yellow {
        0% {
            transform: scale(0.95);
            box-shadow: 0 0 0 0 rgba(255, 177, 66, 0.7);
        }

        70% {
            transform: scale(1);
            box-shadow: 0 0 0 10px rgba(255, 177, 66, 0);
        }

        100% {
            transform: scale(0.95);
            box-shadow: 0 0 0 0 rgba(255, 177, 66, 0);
        }
    }

    #watch {
        padding: 1em;
        text-align: center;
        font-family: 'Orbitron', sans-serif;
        color: #fff;
        height: 100%;
        width: 100%;
        font-size: 2vw;
        text-shadow: 4px 4px 10px rgba(0, 0, 0, 0.4),
            4px 4px 20px rgba(210, 45, 26, 0.4),
            4px 4px 30px rgba(210, 25, 16, 0.4),
            4px 4px 40px rgba(210, 15, 06, 0.4);
    }

    #tooglebutton {
        display: none;
        position: fixed;
        bottom: 20px;
        right: 30px;
        z-index: 99;
        font-size: 18px;
        border: none;
        outline: none;
        background-color: #4665FF;
        color: white;
        cursor: pointer;
        padding: 15px;
        border-radius: 4px;
    }

    @media (max-width: 768px) {
        #cardhistory {
            flex-direction: column;
        }

        #section-two {
            height: 100%;
        }
    }
</style>

<body>
    <button onclick="topFunction()" id="tooglebutton" title="Go to top"><i class="fa-solid fa-angles-up"></i></button>
    <!-- headear landing page -->
    <header class="p-3 text-white" style="background-color: #4665FF;">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <img id="logo-banner" src="/assets/img/logo.png" class="img-fluid">

                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a id="navlink" href="/" class="nav-link px-2 text-white">Home</a></li>
                    <li><a id="navlink" href="#section-two" class="nav-link px-2 text-white">About</a></li>
                    <li><a id="navlink" href="#section-three" class="nav-link px-2 text-white">Service</a></li>
                    <li><a id="navlink" href="#footer" class="nav-link px-2 text-white">Contact</a></li>
                </ul>
                <div class="text-end">
                    <a href="<?= base_url(''); ?>authpage/login" class="btn btn-outline-light me-2">Login</a>
                    <a href="<?= base_url(''); ?>authpage/authpage/registration" class="btn btn-warning">Sign-up</a>
                </div>
            </div>
        </div>
    </header>

    <!-- section to main page -->
    <?= $this->renderSection('main-page') ?>
    <?= $this->renderSection('activated-page') ?>
    <!-- endsection -->

    <!-- Footer -->
    <footer id="footer" class="text-center text-lg-start bg-white text-muted">
        <!-- Section: Social media -->
        <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
            <!-- Left -->
            <div class="me-5 d-none d-lg-block">
                <span>Get connected with us on social networks:</span>
            </div>
            <!-- Left -->

            <!-- Right -->
            <div>
                <a href="" class="me-4 link-secondary">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="" class="me-4 link-secondary">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="" class="me-4 link-secondary">
                    <i class="fab fa-google"></i>
                </a>
                <a href="" class="me-4 link-secondary">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="" class="me-4 link-secondary">
                    <i class="fab fa-linkedin"></i>
                </a>
                <a href="" class="me-4 link-secondary">
                    <i class="fab fa-github"></i>
                </a>
            </div>
            <!-- Right -->
        </section>
        <!-- Section: Social media -->

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
                            Here you can use rows and columns to organize your footer content. Lorem ipsum
                            dolor sit amet, consectetur adipisicing elit.
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Service
                        </h6>
                        <p>
                            <a href="#!" class="text-reset">Food Storage</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Dangerous Storage</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Cold Storage</a>
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
    <!-- java script untuk element tambahan -->
    <script type="text/javascript">
        let mybutton = document.getElementById("tooglebutton");
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                mybutton.style.display = "block";
            } else {
                mybutton.style.display = "none";
            }
        }

        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }

        // When the user clicks on the button, scroll to the top of the document
        $(document).ready(function() {
            function clock() {
                var now = new Date();
                var secs = ('0' + now.getSeconds()).slice(-2);
                var mins = ('0' + now.getMinutes()).slice(-2);
                var hr = now.getHours();
                var Time = hr + ":" + mins + ":" + secs;
                document.getElementById("watch").innerHTML = Time;
                requestAnimationFrame(clock);
            }

            requestAnimationFrame(clock);
        });

        //sweetalert funcution
        $(function() {

            <?php if (session()->has("success")) { ?>
                Swal.fire({
                    icon: 'success',
                    title: 'Congrats!',
                    text: '<?= session("success") ?>'
                })
            <?php } elseif (session()->has("warning")) { ?>
                Swal.fire({
                    icon: 'warning',
                    title: 'Warning',
                    text: '<?= session("warning") ?>'
                })
            <?php } ?>
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.js"></script>
</body>

</html>