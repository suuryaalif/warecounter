<?= $this->extend('Home/layout-page') ?>
<?= $this->section('main-page') ?>

<div class="section py-5 px-5">
    <div class="container">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-12 col-xl-11">
                <div class="card text-black shadow-500" style="border-radius: 25px;">
                    <div class="card-body p-md-5">
                        <div class="row justify-content-center">
                            <?php if (!empty(session()->getFlashdata('caution'))) : ?>
                                <div class="alert alert-info alert-dismissible fade show px-2 py-2" role="alert">
                                    <strong>Remember!</strong> <?php echo session()->getFlashdata('caution'); ?>.
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            <?php endif; ?>
                            <?php foreach ($bookingCounter as $b) : ?>
                                <h1>Booking Counter <i class="far fa-check-circle"></i></h1>
                                <h3>success!</h3>
                                <hr class="divider">
                                <div class="table responsive">
                                    <table class="table table-bordered">
                                        <tr>
                                            <th>Counter Number</th>
                                            <td><?= $b['counter_code']; ?></td>
                                        </tr>
                                        <tr>
                                            <th>Counter Record</th>
                                            <td><?= $b['record_code']; ?></td>
                                        </tr>
                                        <tr>
                                            <th>Delivery Number</th>
                                            <td><?= $b['do_no']; ?></td>
                                        </tr>
                                        <tr>
                                            <th>Shipper Name</th>
                                            <td><?= $b['shipper']; ?></td>
                                        </tr>
                                        <tr>
                                            <th>Driver Name</th>
                                            <td><?= $b['driver_name']; ?></td>
                                        </tr>
                                        <tr>
                                            <th>Police No</th>
                                            <td><?= $b['pol_no']; ?></td>
                                        </tr>
                                    </table>
                                </div>
                                <hr class="divider">
                                <div>
                                    <h4>Created At : <?= date("d-m-Y H:i:s", strtotime($b['created_at'])); ?> </h4>
                                    <h4>Admin : Hayake</h4>
                                </div>
                                <div class="button d-flex justify-content-center gap-4 px-3 py-4">
                                    <a class="btn btn-primary" href="<?= base_url('/'); ?>"> <i class="fa fa-home fa-lg" aria-hidden="true"></i> Back Home</a>
                                    <a class="btn btn-secondary" href="<?= base_url('/'); ?>viewpdf/<?= $b['counter_code']; ?>" target="_blank()"><i class="fa fa-file-pdf fa-lg" aria-hidden="true"></i> Print Pdf</a>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<?= $this->endSection() ?>