<div class="sidebar">
    <div class="logo bg-white">
        <a href="<?= base_url()?>" class="simple-text logo-normal">
            Dashboard
        </a>
    </div>
    <div class="sidebar-wrapper bg-white mt-md-2">
        <?php if($page == "mitra"){ ?>
        <!-- Search -->
        <form class="navbar-form">
            <span class="bmd-form-group"><div class="input-group no-border">
              <input type="text" value="" class="form-control" placeholder="Search...">
              <button type="submit" class="btn btn-white btn-round btn-just-icon">
                <i class="material-icons">search</i>
                <div class="ripple-container"></div>
              </button>
            </div></span>
          </form>
        <!-- End Search -->
        <?php } ?>
        <ul class="nav navbar-nav nav-mobile-menu">
            <li class="nav-item m-1">
                <a href="#" class="nav-link" data-toggle="tooltip"
                    data-placement="bottom" title="Obrolan">
                    <i class="material-icons">chat</i>
                    <p>Obrolan</p>
                </a>
            </li>
            <!-- Menampilkan keranjang hanya pada halaman mitra saja -->
            <?php if($page == "mitra"){ ?>
            <li class="nav-item m-1">
                <a href="#" class="nav-link" data-toggle="tooltip"
                    data-placement="bottom" title="Keranjang">
                    <i class="material-icons">shopping_cart</i>
                    <p>Keranjang</p>
                </a>
            </li>
            <?php } ?>
            <!-- end mitra -->

            <li class="nav-item m-1">
                <a href="#" class="nav-link" data-toggle="tooltip"
                    data-placement="bottom" title="Transaksi">
                    <i class="material-icons">attach_money</i>
                    <p>Transaksi</p>
                </a>
            </li>
        </ul>
        <div class="dropdown-divider m-3"></div>
        <div class="card-md sm-text-white">
            <div class="card-header text-center mt-md-5 border-bottom">
                <img src="<?= base_url()?>assets/img/new_logo.png" alt="profil"
                    class="img-fluid border border-dark rounded-circle" width="50">
                <span class="text-dark font-weight-bold">Nama User</span>
            </div>
            <div class="card-body">
                <!-- Menyesuaikan sidebar content sesuai halaman -->
                <p>Poin
                    <?php if($page == "mitra") {?> Saya <?php } ?>
                    <?php if($page == "warkit") {?> warkit <?php } ?>
                    <?php if($page == "leader") {?> Leader <?php } ?>
                    <span class="text-warning font-weight-bold pull-right"> 5000</span></p>

                <?php if($page == "mitra") {?>
                <p>kupon Saya <span class="text-warning font-weight-bold pull-right"> 3000</span></p>
                <?php } ?>
                <?php if($page == "warkit") {?>
                <p>Deposit <span class="text-warning font-weight-bold pull-right"> 3000</span></p>
                <?php } ?>
                <?php if($page == "leader") {?>
                <p>Deposit <span class="text-warning font-weight-bold pull-right"> 3000</span></p>
                <p>Status <span class="text-warning font-weight-bold pull-right"> GOLD</span></p>
                <?php } ?>
                <!-- End Of Dinamic Content Sidebar -->
                <div class="dropdown-divider mb-4"></div>
                <a class="btn btn-primary btn-block mb-4" href="#">Pengaturan Akun</a>
                <a class="btn btn-warning btn-block" href="#">Keluar</a>
            </div>
        </div>
        <div class="divider"></div>
        <?php if($page == "mitra") {?>
        <!-- Mitra Link Content -->
        <div class="card-md">
            <div class="card-body">
                <ul class="navbar-nav">
                    <li class="nav-item border-top border-bottom dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                            aria-haspopup="true" aria-expanded="false"><i class="material-icons">attach_money</i>
                            <p class="d-inline">Transaksi</p>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" x-placement="top-end" style="position: absolute; top: -112px; left: 5px; will-change: top, left;">
                            <a class="dropdown-item" href="#"><i class="material-icons">hourglass_empty</i>
                                Menunggu</a>
                            <a class="dropdown-item" href="#"><i class="material-icons">access_time</i> Diproses</a>
                            <a class="dropdown-item" href="#"><i class="material-icons">block</i>Dibatalkan</a>
                            <a class="dropdown-item" href="#"><i class="material-icons">done</i>Selesai</a>
                        </div>
                    </li>
                    <li class="nav-item border-top border-bottom ">
                        <a class="nav-link" href="#">
                            <i class="material-icons">shopping_cart</i>
                            <p class="d-inline">Keranjang</p>
                        </a>
                    </li>
                    <li class="nav-item border-top border-bottom ">
                        <a class="nav-link" href="#">
                            <i class="material-icons">chat</i>
                            <p class="d-inline">Obrolan</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- End Mitra Link Content -->
        <?php } ?>
        <?php if($page == "warkit") {?>
        <!-- Warkit Link Content -->
        <div class="card-md">
            <div class="card-body">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link btn btn-block btn-info" href="#">
                            <p class="d-inline">Dashboard</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-block btn-info" href="#">
                            <p class="d-inline">Data Barang</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-block btn-info" href="#">
                            <p class="d-inline">Transaksi</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-block btn-info" href="#">
                            <p class="d-inline">Deposit</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-block btn-info" href="#">
                            <p class="d-inline">Lihat Warkit</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- End Warkit Link Content -->
        <?php } ?>
        <?php if($page == "leader") {?>
        <!-- Leader Link Content -->
        <div class="card-md">
            <div class="card-body">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link btn btn-block btn-info" href="#">
                            <p class="d-inline">Daftar Downline</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- End Leader Link Content -->
        <?php } ?>

    </div>
</div>