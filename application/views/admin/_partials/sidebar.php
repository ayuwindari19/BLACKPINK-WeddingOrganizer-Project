<ul class="sidebar navbar-nav">
        <li class="nav-item <?php echo $this->uri->segment(2) == '' ? 'active': '' ?>">
          <a class="nav-link" href="<?php echo site_url('admin') ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
          </a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url('admin/paket') ?>">
            <i class="fas fa-fw fa-table"></i>
            <span>DATA PAKET</span></a>
        </li>
      
        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url('admin/pemesanan') ?>">
            <i class="fas fa-fw fa-table"></i>
            <span>DATA PEMESANAN</span></a>
        </li>
      </ul>