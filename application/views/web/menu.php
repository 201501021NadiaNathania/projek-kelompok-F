<?php
class menu {
	function atas() {
		?>
        <div class="app-header__logo">
            <div class="logo-src"></div>
            <div class="header__pane ml-auto">
                <div>
                    <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
        </div>
		<div class="app-header header-shadow">
                    <div class="app-header__mobile-menu">
                        <div>
                        </div>
                    </div>
            <div class="app-header__menu">
                <span>
                    <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper">
                            MENU
                        </span>
                    </button>
                </span>
            </div>
            <div class="app-header__content">
                <div class="app-header-left">
                    <ul class="header-menu nav">
                        <li class="nav-item">
                            <a href="./" class="nav-link">
                                Home
                            </a>
                        </li>
                          <li class="nav-item dropdown">
						    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Menu Proyek</a>
						    <div class="dropdown-menu">
						      <a class="dropdown-item" href="./?p=buat_proyek">Buat Proyek</a>
						      <a class="dropdown-item" href="./?p=lihat_proyek">Lihat Proyek</a>
						    </div>
						  </li>
                        <li class="btn-group nav-item">
                            <a href="./?p=histori_proyek" class="nav-link">
                                Histori Proyek
                            </a>
                        </li>
                        <li class="btn-group nav-item">
                            <a href="./?p=laporan_proyek" class="nav-link">
                                Laporan Proyek
                            </a>
                      </li>
                             <li class="btn-group nav-item">
                            <a href="./?p=tambah_karyawan" class="nav-link">
                                Tambah Karyawan
                            </a>
                                  </li>
                             <li class="btn-group nav-item">
                            <a href="./?p=edit_karyawan" class="nav-link">
                                Edit Karyawan
                            </a>
                            
                        </li>
                    </ul>        
                </div>
                <div class="app-header-right">
                    <div class="header-btn-lg pr-0">
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="btn-group">
                                        <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                            <img width="42" class="rounded-circle" src="<?php echo base_url('assets/images/avatars/1.jpg'); ?>" alt="">
                                        </a>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                            <a href="./?p=profil"><button type="button" tabindex="0" class="dropdown-item">Profil</button></a>
                                            <a href="./?p=logout"><button type="button" tabindex="0" class="dropdown-item">Logout</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>        
                </div>
            </div>
        </div>
		<?php
	}

	function footer() {
		?>
		<div class="app-wrapper-footer">
            <div class="app-footer">
                <div class="app-footer__inner">
                    <div class="app-footer-left">
                        <ul class="nav">
                            <li class="nav-item">
                                <a href="javascript:void(0);" class="nav-link">
                                    Footer Link 1
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="javascript:void(0);" class="nav-link">
                                    Footer Link 2
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="app-footer-right">
                        <ul class="nav">
                            <li class="nav-item">
                                <a href="javascript:void(0);" class="nav-link">
                                    Footer Link 3
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="javascript:void(0);" class="nav-link">
                                    <div class="badge badge-success mr-1 ml-0">
                                        <small>NEW</small>
                                    </div>
                                    Footer Link 4
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
		<?php
	}

    function show() {
        if (isset($_GET['p'])) {
            $p = $_GET['p'];
            if ($p == 'buat_proyek') {
                include 'p/buat_proyek.php';
                buat_proyek();
            }
            elseif ($p == 'lihat_proyek') {
                include 'p/lihat_proyek.php';
                lihat_proyek();
            }
            elseif ($p == 'histori_proyek') {
                include 'p/histori_proyek.php';
                histori_proyek();
            }
            elseif ($p == 'laporan_proyek') {
                include 'p/laporan_proyek.php';
                laporan_proyek();
            }
             elseif ($p == 'tambah_karyawan') {
                include 'p/tambah_karyawan.php';
                tambah_karyawan();
                  }
             elseif ($p == 'edit_karyawan') {
                include 'p/edit_karyawan.php';
                edit_karyawan();
            
            }
          
        }
        else {
            include 'p/home.php';
            home();
        }
    }
}
?>
