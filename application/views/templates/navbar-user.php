<!-- Navbar untuk user yang sudah login ke aplikasi -->
<nav class="navbar navbar-expand-lg bg-white mb-0 fixed-top" style="top:40px;">
    <div class="container-fluid">
        <div class="navbar-translate">
            <a class="navbar-brand align-middle" href="<?= base_url()?>"><img src="<?= base_url() ?>assets/img/angular.png" alt="logo" style="width:40px;"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <!-- Search -->
            <form class="form-inline ml-2">
                <div class="form-group no-border">
                  <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-just-icon btn-link btn-round">
                  <i class="material-icons">search</i>
                </button>
            </form>
            <!-- End Search -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item m-1">
                    <a href="#" class="btn btn-primary btn-fab btn-fab-large btn-round" title="Obrolan">
                        <i class="material-icons">chat</i>
                    </a>
                </li>
                <li class="nav-item m-1">
                <a href="#" class="btn btn-primary btn-fab btn-fab-large btn-round" title="Keranjang">
                <i class="material-icons">shopping_cart</i>
                </a>
                </li>
                <li class="nav-item m-1">
                <a href="#" class="btn btn-primary btn-fab btn-fab-large btn-round" title="Transaksi">
                <i class="material-icons">attach_money</i>
                </a>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link" href="#pablo" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" title="Account">
                    <img src="<?= base_url()?>assets/img/new_logo.png" alt="profil" class="img-fluid border border-dark rounded-circle" width="50">
                    <span class="text-dark font-weight-bold">John Doe</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                  <a class="dropdown-item d-block" href="#">Poin Saya <span class="text-warning font-weight-bold pull-right"> 5000</span></a>
                  <a class="dropdown-item d-block" href="#">Kupon Saya <span class="text-warning font-weight-bold pull-right"> 3000</span></a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Pengaturan Akun</a>
                  <a class="dropdown-item" href="#">Keluar</a>
                </div>
              </li>

            </ul>

        </div>
    </div>
</nav>