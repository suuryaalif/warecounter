<?= $this->extend('layout/v_layout') ?>
<?= $this->section('main-userdashboard') ?>
<!-- Main Content -->
<div id="content">

    <?= $this->include('layout/topbar'); ?>

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="container my-1 mx-1 p-2">
            <h2 class="text-center">Counter Information</h2>
            <div id="panel-counter" class="row row-cols-1 row-cols-md-3 g-5 justify-content-center">
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
                    <div class="card px-3 py-3 bg-secondary text-white">
                        <h5>insert QR code with scanner</h5>
                        <form action="<?= base_url('') ?>dashboard/qrproc" method="POST">
                            <?= csrf_field() ?>
                            <input class="form-control my-2" type="text" required name="barcode" id="barcode">
                            <button class="btn btn-primary my-2" type="submit">Barcode Process</button>
                        </form>
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

        <div class="container my-2">
            <div class="table-responsive">
                <div class="card-body table-responsive">
                    <table class="table table-bordered" id="dataTable">
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
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?= $this->endSection() ?>