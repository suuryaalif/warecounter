<?= $this->extend('Auth/v_layout') ?>
<?= $this->section('main-loginpage') ?>

<section class="w-100" style="
    background: rgb(213,212,230);
    background: radial-gradient(circle, rgba(213,212,230,1) 26%, rgba(61,204,233,1) 85%);
    ">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-10">
                <div class="card" style="border-radius: 1rem;">
                    <div class="row g-0">
                        <div class="col-md-6 col-lg-5 d-none d-md-block">
                            <img src="<?= base_url(''); ?>/assets/img/login_side.jpg" alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                        </div>
                        <div class="col-md-6 col-lg-7 d-flex align-items-center">
                            <div class="card-body p-4 p-lg-5 text-black">

                                <form method="POST" action="<?= base_url('') ?>authpage/authpage/login">
                                    <?= csrf_field(); ?>
                                    <div class="d-flex align-items-center mb-3 pb-1">
                                        <img src="<?= base_url(''); ?>/assets/img/logo.png" alt="logo" style="width: 42px;">
                                        <span class=" h1 fw-bold mb-0">arecounter</span>
                                    </div>

                                    <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>

                                    <div class="form-outline mb-4">
                                        <input name="email" type="email" id="email" class="form-control form-control-lg" />
                                        <label class="form-label" for="form2Example17">Email address</label>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="password" name="password" id="password" class="form-control form-control-lg" />
                                        <label class="form-label" for="form2Example27">Password</label>
                                    </div>

                                    <div class="pt-1 mb-4">
                                        <button class="btn btn-dark btn-lg btn-block" type="submit">Login</button>
                                    </div>
                                    <!-- 
                                    <a class="small text-muted" href="#!">Forgot password?</a> -->
                                    <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a href="authpage/registration" style="color: #393f81;">Register here</a></p>
                                    <a href="#!" class="small text-muted">Terms of use.</a>
                                    <a href="#!" class="small text-muted">Privacy policy</a>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>