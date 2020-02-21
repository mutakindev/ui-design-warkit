<!-- sidebar hanya muncul di tampilan mobile saja -->
<div class="sidebar nav-mobile-menu">
	<div class="logo bg-white">
		<a href="<?= base_url()?>" class="simple-text logo-normal">
			Home
		</a>
	</div>
	<div class="sidebar-wrapper bg-white">
		<!-- Search -->
		<form class="navbar-form">
			<span class="bmd-form-group">
				<div class="input-group no-border">
					<input type="text" value="" class="form-control" placeholder="Search...">
					<button type="submit" class="btn btn-white btn-round btn-just-icon">
						<i class="material-icons">search</i>
						<div class="ripple-container"></div>
					</button>
				</div>
			</span>
		</form>
		<!-- End Search -->
		<ul class="nav navbar-nav nav-mobile-menu">
			<li class="nav-item">
				<a href="#" class="nav-link" data-toggle="tooltip" data-placement="bottom" title="Keranjang">
					<i class="material-icons">shopping_cart</i>
					<p>Keranjang</p>
				</a>
			</li>
			<li class="nav-item">
				<a href="<?= base_url('/login')?>" class="nav-link btn btn-primary text-white">Daftar</a>
			</li>
			<li class="nav-item">
				<a href="<?= base_url('/login')?>" class="nav-link btn btn-primary text-white">Masuk</a>
			</li>
		</ul>
	</div>
</div>
<!-- Navbar Untuk User yang guest atau yang belum login -->
<nav class="navbar navbar-expand-lg bg-white">
	<div class="container-fluid">
		<div class="navbar-translate">
			<a class="navbar-brand" href="<?= base_url()?>" alt="logo"><img src="<?= base_url()?>assets/img/angular.png"
					width="40" /></a>
			<button class="navbar-toggler mr-3" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03"
				aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				<span class="navbar-toggler-icon"></span>
				<span class="navbar-toggler-icon"></span>
			</button>
		</div>
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
					<a href="#" class="btn btn-primary btn-fab btn-fab-large btn-round" data-toggle="tooltip"
						data-placement="bottom" title="Keranjang">
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