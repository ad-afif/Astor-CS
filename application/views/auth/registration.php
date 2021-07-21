<div id="auth">

    <div class="row h-100">
        <div class="col-lg-5 col-12">
            <div id="auth-left">
                <div class="auth-logo">
                    <a href="index.html"><img src="<?= base_url(); ?>assets/images/logo/astorbig.png" alt="Logo"></a>
                </div>
                <h1 class="auth-title">Daftar</h1>
                <p class="auth-subtitle mb-5">Masukkan data diri anda untuk mendaftar.</p>

                <form action="<?= base_url('auth/registration'); ?>" method="post">

                    <?= form_error('nama', '<small class="text-danger">', '</small>'); ?>
                    <div class="form-group position-relative has-icon-left mb-4">
                        <input type="text" class="form-control form-control-xl" id="nama" name="nama" placeholder="Nama Lengkap" value="<?= set_value('name'); ?>">
                        <div class="form-control-icon">
                            <i class="bi bi-person"></i>
                        </div>
                    </div>


                    <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
                    <div class="form-group position-relative has-icon-left mb-4">
                        <input type="text" class="form-control form-control-xl" id="email" name="email" placeholder="Email" value="<?= set_value('email'); ?>">
                        <div class="form-control-icon">
                            <i class="bi bi-envelope"></i>
                        </div>
                    </div>

                    <?= form_error('noTelp', '<small class="text-danger">', '</small>'); ?>
                    <div class="form-group position-relative has-icon-left mb-4">
                        <input type="text" class="form-control form-control-xl" id="noTelp" name="noTelp" placeholder="Nomor Telepon" value="<?= set_value('noTelp'); ?>">
                        <div class="form-control-icon">
                            <i class="bi bi-telephone"></i>
                        </div>
                    </div>

                    <?= form_error('alamat', '<small class="text-danger">', '</small>'); ?>
                    <div class="form-group position-relative has-icon-left mb-4">
                        <input type="text" class="form-control form-control-xl" id="alamat" name="alamat" placeholder="Alamat" value="<?= set_value('alamat'); ?>">
                        <div class="form-control-icon">
                            <i class="bi bi-book"></i>
                        </div>
                    </div>

                    <?= form_error('password1', '<small class="text-danger">', '</small>'); ?>
                    <div class="form-group position-relative has-icon-left mb-4">
                        <input type="password" class="form-control form-control-xl" id="password1" name="password1" placeholder="Password">
                        <div class="form-control-icon">
                            <i class="bi bi-shield-lock"></i>
                        </div>
                    </div>

                    <div class="form-group position-relative has-icon-left mb-4">
                        <input type="password" class="form-control form-control-xl" id="password2" name="password2" placeholder="Konfirmasi Password">
                        <div class="form-control-icon">
                            <i class="bi bi-shield-lock"></i>
                        </div>
                    </div>
                    <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Daftarkan</button>
                    <hr>
                </form>
                <div class="text-center mt-5 text-lg fs-4">
                    <p class='text-gray-600'>Sudah memiliki akun? <a href="<?= base_url(); ?>auth" class="font-bold">Masuk
                        </a></p>
                </div>
            </div>
        </div>
        <div class="col-lg-7 d-none d-lg-block">
            <div id="auth-right">

            </div>
        </div>
    </div>

</div>