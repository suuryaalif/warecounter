<?= $this->extend('Home/layout-page') ?>
<?= $this->section('main-page') ?>

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
                    <a href="<?= base_url(''); ?>/register" type="button" class="btn btn-primary btn-lg px-4 me-md-2">Daftar Antrian</a>
                    <a href="#section-four" type="button" class="btn btn-outline-secondary btn-lg px-4">Lihat Antrian</a>
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
<?= $this->endSection() ?>