<!-- Top Navbar kecil untuk text link -->
<?php if($page == "home") { ?>
	<nav class="navbar navbar-expand-lg m-0 p-0 bg-info">
<?php }else{ ?>
<nav class="navbar navbar-expand-lg m-0 p-0 bg-info fixed-top" style="z-index: 1038;box-shadow:none;">
<?php } ?>
		<div class="container-fluid">
			<div class="collapse navbar-collapse">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a href="#" class="nav-link">
							be a Warkit
						</a>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link">
							Ikuti kami di FTI
						</a>
					</li>
					<!-- Link Untuk akses halaman saja,,,hapus jika perlu -->
					<li class="nav-item">
						<a href="mitra" class="nav-link">
							Mitra
						</a>
					</li>
					<li class="nav-item">
						<a href="warkit" class="nav-link">
							Warkit
						</a>
					</li>
					<li class="nav-item">
						<a href="leader" class="nav-link">
							Leader
						</a>
					</li>
				</ul>
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a href="#" class="nav-link">
							Download Aplikasi
						</a>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link">
							Bantuan
						</a>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link">
							Tentang Warkit
						</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>