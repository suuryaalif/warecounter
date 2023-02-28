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

    #panel-counter {
        display: flex;
        flex-direction: row;
        justify-content: center;
        gap: 1em;
    }

    #section-five {
        background-image: url('./assets/img/bg-sect5.jpg');
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        font-family: 'Poppins', sans-serif;
        overflow: hidden;
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

    @media (max-width: 768px) {
        #cardhistory {
            flex-direction: column;
        }

        #section-two {
            height: 100%;
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
</style>

<body>
    <button onclick="topFunction()" id="tooglebutton" title="Go to top"><i class="fa-solid fa-angles-up"></i></button>
    <!-- headear landing page -->
    <header class="p-3 text-white" style="background-color: #4665FF;">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <img id="logo-banner" src="/assets/img/logo.png" class="img-fluid">

                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a id="navlink" href="#" class="nav-link px-2 text-white">Home</a></li>
                    <li><a id="navlink" href="#section-two" class="nav-link px-2 text-white">About</a></li>
                    <li><a id="navlink" href="#section-three" class="nav-link px-2 text-white">Service</a></li>
                    <li><a id="navlink" href="#footer" class="nav-link px-2 text-white">Contact</a></li>
                </ul>
                <div class="text-end">
                    <button type="button" class="btn btn-outline-light me-2">Login</button>
                    <button type="button" class="btn btn-warning">Sign-up</button>
                </div>
            </div>
        </div>
    </header>
    <!-- section-one -->
    <div id="section-one" class="section pt-5">
        <div class="container col-xxl-8 px-4 py-5">
            <div class="row flex-lg-row-reverse align-items-center g-5 py-5 rounded" style="background-color: rgb(255,255,255,0.9);">
                <div class="col-10 col-sm-8 col-lg-6">
                    <img id="img-hero" src="/assets/img/hero-pict1.jpg" class="d-block mx-lg-auto img-fluid rounded" width="700" height="500" loading="lazy">
                </div>
                <div class="col-lg-6">
                    <h2 class="display-5 fw-bold lh-1 mb-3">
                        <i style="text-decoration: underline;">WareCounter</i><br>Make more easier
                    </h2>
                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Egestas pretium aenean pharetra magna ac. Etiam tempor orci eu lobortis elementum nibh tellus. Leo integer malesuada nunc vel risus. Phasellus faucibus scelerisque eleifend donec pretium vulputate sapien.</p>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                        <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Daftar Antrian</button>
                        <button type="button" class="btn btn-outline-secondary btn-lg px-4">Lihat Antrian</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- section two -->
    <div id="section-two" class="section px-5 py-5">
        <div class="row mx-5">
            <div id="cardhistory" class="card" style="width: 100%;">
                <img id="cardimg" src="/assets/img/card-img.png" class="card-img-top">
                <div class="card-body">
                    <h1>Just tell you about us</h1>
                    <p class="card-text ">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Risus feugiat in ante metus dictum at. Ligula ullamcorper malesuada proin libero nunc. Nam libero justo laoreet sit amet cursus. Convallis convallis tellus id interdum velit laoreet id donec. Duis tristique sollicitudin nibh sit amet commodo nulla. Sit amet tellus cras adipiscing enim eu turpis egestas. Sed arcu non odio euismod lacinia. Consectetur adipiscing elit pellentesque habitant morbi tristique senectus. Bibendum ut tristique et egestas quis ipsum suspendisse.<br><br>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Risus feugiat in ante metus dictum at. Ligula ullamcorper malesuada proin libero nunc. Nam libero justo laoreet sit amet cursus. Convallis convallis tellus id interdum velit laoreet id donec. Duis tristique sollicitudin nibh sit amet commodo nulla. Sit amet tellus cras adipiscing enim eu turpis egestas. Sed arcu non odio euismod lacinia. Consectetur adipiscing elit pellentesque habitant morbi tristique senectus. Bibendum ut tristique et egestas quis ipsum suspendisse.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- section three -->
    <div id="section-three" class="section px-5 py-5">
        <h1 class="text-center mb-3">Our Service!</h1>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card h-100">
                    <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/041.webp" class="card-img-top" alt="Hollywood Sign on The Hill" />
                    <div class="card-body">
                        <h5 class="card-title">Food Storage</h5>
                        <p class="card-text">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Pretium lectus quam id leo in vitae turpis massa sed. Sed egestas egestas fringilla phasellus faucibus scelerisque eleifend donec. Nec nam aliquam sem et tortor consequat. Risus commodo viverra maecenas accumsan lacus vel facilisis. Sit amet purus gravida quis. Turpis egestas sed tempus urna et pharetra pharetra massa.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/042.webp" class="card-img-top" alt="Palm Springs Road" />
                    <div class="card-body">
                        <h5 class="card-title">Dangerous Storage</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Pretium lectus quam id leo in vitae turpis massa sed. Sed egestas egestas fringilla phasellus faucibus scelerisque eleifend donec. Nec nam aliquam sem et tortor consequat. Risus commodo viverra maecenas accumsan lacus vel facilisis. Sit amet purus gravida quis. Turpis egestas sed tempus urna et pharetra pharetra massa.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/043.webp" class="card-img-top" alt="Los Angeles Skyscrapers" />
                    <div class="card-body">
                        <h5 class="card-title">Cold Storage</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Pretium lectus quam id leo in vitae turpis massa sed. Sed egestas egestas fringilla phasellus faucibus scelerisque eleifend donec. Nec nam aliquam sem et tortor consequat. Risus commodo viverra maecenas accumsan lacus vel facilisis. Sit amet purus gravida quis. Turpis egestas sed tempus urna et pharetra pharetra massa.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="section-four" class="section px-5 py-5">
        <h1 class="text-white text-center">Counter Information</h1>
        <div class="time-display text-center py-3 mx-3">
            <h4 class="text-white" style="font-family: 'Orbitron', sans-serif;">Time For Now : <i id="watch"></i></h4>
        </div>
        <div id="panel-counter" class="row row-cols-1 row-cols-md-3 g-5">
            <div class="col text-center">
                <div id="nowCounter" class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Now Counter</h5>
                        <h1><?= $nowCode; ?></h1>
                        <p class="card-text">
                            Time : <?= (date("d-m-Y H:i:s", strtotime($nowTime))) ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col text-center">
                <div id="nextCounter" class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Next Counter</h5>
                        <h1><?= $nextCode; ?></h1>
                        <p class="card-text">
                            Time : <?= (date("d-m-Y H:i:s", strtotime($nextTime))) ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="section-five" class="section px-5 py-5">
        <div class="wrapper">
            <div class="card bg-white">
                <h1 class="text-center pt-3">Loading List</h1>
                <div class="card-body table-responsive">
                    <table class="table table-bordered">
                        <thead class="thead-inverse bg-info">
                            <tr>
                                <th>No.</th>
                                <th>Counter No.</th>
                                <th>Delivery No.</th>
                                <th>Shipper</th>
                                <th>Driver</th>
                                <th>Truck No.</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($counterlist as $ct) :
                            ?>
                                <?php if ($ct['status'] === 'sedang bongkar') : ?>
                                    <tr class="bg-success fw-bold text-white">
                                    <?php endif ?>
                                    <td scope="row"><?= $no++; ?></td>
                                    <td><?= $ct['counter_code'] ?></td>
                                    <td><?= $ct['do_no'] ?></td>
                                    <td><?= $ct['shipper'] ?></td>
                                    <td><?= $ct['driver_name'] ?></td>
                                    <td><?= $ct['pol_no'] ?></td>
                                    <td><?= $ct['status'] ?></td>
                                    </tr>
                                <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
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
                        <p><i class="fas fa-home me-3 text-secondary"></i> New York, NY 10012, US</p>
                        <p>
                            <i class="fas fa-envelope me-3 text-secondary"></i>
                            info@example.com
                        </p>
                        <p><i class="fas fa-phone me-3 text-secondary"></i> + 01 234 567 88</p>
                        <p><i class="fas fa-print me-3 text-secondary"></i> + 01 234 567 89</p>
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
        <!-- Copyright -->
    </footer>
    <!-- Footer -->
    </footer>
    <script src="<?= base_url('') ?>/assets/js/bootstrap.bundle.min.js"></script>
    <script>
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

        // When the user clicks on the button, scroll to the top of the document
    </script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript">
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
    </script>
</body>

</html>