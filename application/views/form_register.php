<body class="hero-wrap" style="background-image: url('<?php echo base_url('assets/assets_stisla/assets/img/lambo1.jpg')?>');" data-stellar-background-ratio="0.5">
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
            <div class="login-brand">
              <img src="<?php echo base_url('assets/assets_stisla/') ?>/assets/img/mobil.png" alt="logo" width="100">
            </div>

            <div style="background: transparent;" class="card card-primary">
				<div class="card-header"><h4>Register</h4></div>

            <div class="card-body">
            <form method="POST" action="<?php echo base_url('register') ?>">
                <div class="row">
                    <div class="form-group col-6">
                      <label for="nama" class="text-white">Nama</label>
                      <input style="background: transparent;" id="nama" type="text" class="form-control text-white" name="nama" autofocus>
					  <?= form_error('nama', '<div class="text-small text-danger">','</div>'); ?>
                    </div>
                    <div class="form-group col-6">
                      <label class="text-white">Password</label>
                      <input style="background: transparent;" type="password" name="password" class="form-control text-white">
					  <?= form_error('password', '<div class="text-small text-danger">','</div>'); ?>
                    </div>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                      Register
                    </button>
                </div>
            </form>
			</div>
            </div>
            <div class="simple-footer">
              Copyright &copy; Stisla 2018
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>