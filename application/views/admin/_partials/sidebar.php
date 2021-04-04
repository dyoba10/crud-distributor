<ul class="sidebar navbar-nav">
      <li class="nav-item active" <?php echo $this->uri->segment(2) == '' ? 'active': '' ?>> 
        <a class="nav-link" href="<?php echo base_url('admin/') ?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <li class="nav-item dropdown" <?php echo $this->uri->segment(2) == 'apotek' ? 'active': '' ?>>
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>Data Distributor</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <h6 class="dropdown-header">Daftar Menu :</h6>
          <a class="dropdown-item" href="<?php echo base_url('admin/barang/')?>">List Data Barang</a>
          <a class="dropdown-item" href="<?php echo base_url('admin/barang/add')?>">Tambah Data Barang</a>
          <a class="dropdown-item" href="<?php echo base_url('admin/pegawai/')?>">List Data Pegawai</a>
          <a class="dropdown-item" href="<?php echo base_url('admin/pegawai/add')?>">Tambah Data Pegawai</a>
          <a class="dropdown-item" href="<?php echo base_url('admin/distribusi/')?>">List Data Distribusi</a>
          <a class="dropdown-item" href="<?php echo base_url('admin/distribusi/add')?>">Tambah Data Distribusi</a>
          <div class="dropdown-divider"></div>
        </div>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('admin/user/')?>">
          <i class="fas fa-fw fa-user"></i>
          <span>Users</span></a>
      </li> -->
    </ul>