<?= $this->extend('Auth/v_layout') ?>
<?= $this->section('main-registerpage') ?>
<style>
    .gradient-custom-3 {
        /* fallback for old browsers */
        background: #84fab0;

        /* Chrome 10-25, Safari 5.1-6 */
        background: -webkit-linear-gradient(to right, rgba(132, 250, 176, 0.5), rgba(143, 211, 244, 0.5));

        /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        background: linear-gradient(to right, rgba(132, 250, 176, 0.5), rgba(143, 211, 244, 0.5))
    }

    .gradient-custom-4 {
        /* fallback for old browsers */
        background: #84fab0;

        /* Chrome 10-25, Safari 5.1-6 */
        background: -webkit-linear-gradient(to right, rgba(132, 250, 176, 1), rgba(143, 211, 244, 1));

        /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        background: linear-gradient(to right, rgba(132, 250, 176, 1), rgba(143, 211, 244, 1))
    }

    #aeye,
    #aeye:hover {
        color: #333
    }
</style>
<section class="bg-image" style="
    background: rgb(213,212,230);
    background: radial-gradient(circle, rgba(213,212,230,1) 26%, rgba(61,204,233,1) 85%);
    ">
    <div class="mask d-flex align-items-center h-100 gradient-custom-3">
        <div class="container h-100 my-3 py-1">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                    <div class="card" style="border-radius: 15px;">
                        <div class="card-body p-5 mb-2">
                            <div class="text-center">
                                <img src="<?= base_url('') ?>/assets/img/logo.png" alt="logo" width="80px" style="margin-bottom: 10px;">
                            </div>
                            <h4 class="text-center mb-5">Create Member Account</h4>

                            <form method="POST" action="<?= base_url('') ?>authpage/authpage/submit">
                                <?= csrf_field(); ?>
                                <?php if (!empty(session()->getFlashdata('error'))) : ?>
                                    <div class="alert-warning alert-dismissible fade show" role="alert">
                                        <?php echo session()->getFlashdata('error'); ?>
                                    </div>
                                <?php endif; ?>
                                <div class="form-outline mb-4">
                                    <label for="form3Example1c" class="form-label">Username</label>
                                    <input type="text" id="username" name="username" class="form-control form-control-lg" required />
                                </div>
                                <div class="form-outline mb-4">
                                    <label for="form3Example1c" class="form-label">Email</label>
                                    <input type="email" id="email" name="email" class="form-control form-control-lg" required />
                                </div>
                                <div class="form-outline mb-4">
                                    <label for="form3Example1c" class="form-label">Company Name</label>
                                    <input type="text" id="company_name" name="company_name" required class="form-control form-control-lg" />
                                </div>
                                <div class="form-outline mb-4">
                                    <label for="form3Example1c" class="form-label">Full Name</label>
                                    <input type="text" required id="full_name" name="full_name" class="form-control form-control-lg" />
                                </div>
                                <div class="form-outline mb-4">
                                    <label for="form3Example1c" class="form-label">Phone Number</label>
                                    <input required type="text" id="phone_no" name="phone_no" class="form-control form-control-lg" />
                                </div>
                                <div class="form-outline mb-4">
                                    <label>Password</label>
                                    <input required type="password" id="password" name="password" class="form-control form-control-lg">
                                    <input type="checkbox" onclick="showPassFunction()" class="form-check-input me-2">Show Password
                                </div>
                                <div class="form-outline mb-4">
                                    <label for="form3Example1c" class="form-label">Repeat Password</label>
                                    <input type="password" id="password2" name="password2" class="form-control form-control-lg" />
                                    <input type="checkbox" onclick="showPassFunction2()" class="form-check-input me-2">Show Password
                                </div>

                                <div class="form-check d-flex justify-content-center mb-5">
                                    <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3cg" required />
                                    <label class="form-check-label" for="form2Example3g">
                                        I agree all statements in <a href="#!" class="text-body"><u>Terms of service</u></a>
                                    </label>
                                </div>

                                <div class="d-flex justify-content-center">
                                    <button type="submit" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Register</button>
                                </div>

                                <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="<?= base_url(''); ?>authpage/login" class="fw-bold text-body"><u>Login here</u></a></p>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>