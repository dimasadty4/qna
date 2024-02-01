<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
          </ul>
          <div class="search-element">
            <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="250">
            <button class="btn" type="submit"><i class="fas fa-search"></i></button>
            <div class="search-backdrop"></div>
          </div>
        </form>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown"><a href="#" class="nav-link nav-link-lg nav-link-user">
		  
            <div class="d-sm-none d-lg-inline-block">Welcome</div></a>
          </li>
        </ul>
      </nav>
	</body>
      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand bg-secondary">
		  <img src="<?php echo base_url() ?>assets/assets_stisla/assets/img/logo.png" alt="logo">
            <a href="<?= base_url('admin/dashboard') ?>">Q & A</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm bg-secondary">
            <a href="<?= base_url('admin/dashboard') ?>">QnA</a>
          </div>
          <ul class="sidebar-menu">
                 <li><a class="nav-link" href="<?= base_url('admin/dashboard') ?>"><i class="fas fa-fire"></i> <span>Dashboard</span></a></li>
                 <li><a class="nav-link" href="<?= base_url('admin/data_pertanyaan') ?>"><i class="fas fa-question-circle"></i> <span>Data Pertanyaan</span></a></li>
        </aside>
      </div>