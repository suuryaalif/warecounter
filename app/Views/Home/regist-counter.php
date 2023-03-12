<?= $this->extend('Home/layout-page') ?>
<?= $this->section('main-page') ?>
<div id="section-register-one" class="section px-5 py-5 d-flex">
    <div class="container">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-12 col-xl-11">
                <div class="card text-black shadow-500" style="border-radius: 25px;">
                    <div class="card-body p-md-5">
                        <div class="row justify-content-center">
                            <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Booking Counter</p>
                                <form action="<?= base_url(''); ?>/register/save" method="POST" class="mx-1 mx-md-4">
                                    <?= csrf_field(); ?>
                                    <?php if (!empty(session()->getFlashdata('error'))) : ?>
                                        <div class="alert-warning alert-dismissible fade show" role="alert">
                                            <?php echo session()->getFlashdata('error'); ?>
                                        </div>
                                    <?php endif; ?>
                                    <input type="text" name="counter_code" id="counter_code" value="<?= $counter; ?>" hidden>
                                    <input type="text" name="record_code" id="record_code" value="<?= $record; ?>" hidden>

                                    <div class="d-flex flex-row align-items-center mb-3">
                                        <div class="form-outline flex-fill mb-0">
                                            <label class="form-label" for="form3Example1c">Delivery Number</label>
                                            <input type="text" name="do_no" id="do_no" class="form-control mb-1" required />
                                        </div>
                                    </div>

                                    <div class="d-flex flex-row align-items-center mb-3">
                                        <div class="form-outline flex-fill mb-0">
                                            <label class="form-label" for="form3Example1c">Shipper Company Name</label>
                                            <input type="text" name="shipper" id="shipper" class="form-control mb-1" required />
                                        </div>
                                    </div>

                                    <div class="d-flex flex-row align-items-center mb-3">
                                        <div class="form-outline flex-fill mb-0">
                                            <label class="form-label" for="form3Example1c">Driver Truck Name</label>
                                            <input type="text" id="driver_name" name="driver_name" class="form-control mb-1" required />
                                        </div>
                                    </div>

                                    <div class="d-flex flex-row align-items-center mb-3">
                                        <div class="form-outline flex-fill mb-0">
                                            <label class="form-label" for="form3Example1c">Driver Phone Number</label>
                                            <input type="text" id="driver_phone" name="driver_phone" class="form-control mb-1" required />
                                            <small class="form-label">(please active and have whatsapp)</small>
                                        </div>
                                    </div>

                                    <div class="d-flex flex-row align-items-center mb-3">
                                        <div class="form-outline flex-fill mb-0">
                                            <label class="form-label" for="form3Example1c">Truck Police Number</label>
                                            <input type="text" id="pol_no" name="pol_no" class="form-control mb-1" required />
                                        </div>
                                    </div>

                                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                        <button type="submit" class="btn btn-primary btn-lg">Register</button>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
                                <img src="<?= base_url('') ?>/assets/img/card-cap-regist.png" class="img-fluid bg-secondary" alt="Sample image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>