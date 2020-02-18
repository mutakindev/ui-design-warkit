<nav class="navbar navbar-expand-lg bg-white navbar-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#" alt="logo"><img src="<?= base_url()?>assets/img/angular.png" width="40"/></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <form class="form-inline ml-2">
                <div class="form-group no-border">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-just-icon btn-link btn-round">
                    <i class="material-icons">search</i>
                </button>
            </form>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="#" class="btn btn-primary btn-fab btn-fab-large btn-round">
                        <i class="material-icons">shopping_cart</i>
                    </a>
                </li>
                <li class="nav-item m-2 ml-3">
                    <a href="<?= base_url('/login')?>" class=" btn btn-primary">Daftar</a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('/login')?>" class="btn btn-primary">Masuk</a>
                </li>
            </ul>

        </div>
    </div>
</nav>