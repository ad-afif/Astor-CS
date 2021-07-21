<div id="auth">

  <div class="row h-100">
    <div class="col-lg-5 col-12">
      <div id="auth-left">
        <div class="auth-logo">
          <a href="index.html"><img src="<?= base_url(); ?>assets/images/logo/astorbig.png" alt="Logo"></a>
        </div>
        <h1 class="auth-title">Masuk</h1>
        <p class="auth-subtitle mb-5">Masuk ke akun yang didaftarkan pada registrasi.</p>

        <?= $this->session->flashdata('message') ?>
        <form method="post" action="<?= base_url('auth'); ?>">
          <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
          <div class="form-group position-relative has-icon-left mb-4">
            <input type="text" class="form-control form-control-xl" id="email" name="email" placeholder="Email Address" value="<?= set_value('email'); ?>">
            <div class="form-control-icon">
              <i class="bi bi-person"></i>
            </div>
          </div>

          <?= form_error('password', '<small class="text-danger">', '</small>'); ?>
          <div class="form-group position-relative has-icon-left mb-4">
            <input type="password" class="form-control form-control-xl" id="password" name="password" placeholder="Password">
            <div class="form-control-icon">
              <i class="bi bi-shield-lock"></i>
            </div>
          </div>

          <button type="submit" class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Masuk</button>
          <hr>
        </form>
        <div class="text-center mt-5 text-lg fs-4">
          <p class="text-gray-600">Tidak mempunyai akun? <a href="<?= base_url(); ?>auth/registration" class="font-bold">Daftar
            </a>.</p>
          <p><a class="font-bold" href="auth-forgot-password.html">Lupa Password?</a></p>
        </div>
      </div>
    </div>
    <div class="col-lg-7 d-none d-lg-block">
      <div id="auth-right">

      </div>
    </div>
  </div>

</div>