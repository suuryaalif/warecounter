<?= $this->extend('Home/layout-page') ?>
<?= $this->section('activated-page') ?>
<section>
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-10 text-center">
                <div class="card py-5 h-200 mb-lg-4">
                    <i class="fa fa-2xl fa-check" aria-hidden="true"></i>
                    <h2 class="my-lg-5">Congratulation Your Account Has Been Activated</h2>
                    <p>
                        now you can use your account to warecounter website appilcation fitur as member, <br>
                        please <a href="<?= base_url('authpage/login'); ?>">login</a> to use your account</p>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>