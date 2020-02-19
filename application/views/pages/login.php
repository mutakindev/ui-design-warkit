<!-- Halaman Login -->
<div class="container p-5">
    <div class="row justify-content-center mt-5">
        <div class="col-md-6">
        <div class="card">
            <div class="card-header card-header-primary">
                <div class="row">
                    <div class="col-sm">
                        <h3 class="card-title font-weight-bold">Login Warkit</h3>
                        <p class="card-category">Silahkan isi semua field</p>
                    </div>
                    <div class="col-sm">
                    <a href="<?= base_url() ?>" class="close" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form>
                    <!-- Contoh field error input, hilangkan class has-danger jika tidak ingin menggunakannya -->
                    <div class="form-group has-danger">
                        <label class="bmd-label-floating">No.HP / E-mail / Kode Akun</label>
                        <input type="text" class="form-control">
                    </div>
                    <!-- Contoh field valid input, hilangkan class has-success jika tidak ingin menggunakannya -->
                    <div class="form-group has-success">
                        <label class="bmd-label-floating">Password</label>
                        <input type="password" class="form-control">
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" value="">
                                    Ingat Saya
                                    <span class="form-check-sign">
                                        <span class="check"></span>
                                    </span>
                                </label>
                            </div>
                        </div>
                        <div class="col text-right">
                            <a href="#" class="">Lupa Kata Sandi</a> | 
                            <a href="#" class="">Butuh Bantuan?</a>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-8 d-flex align-items-end">
                            <p class="font-weight-bold">Belum memiliki Akun <a href="#">Daftar Sekarang</a></p>
                        </div>
                        <div class="col-md-4">
                            <button type="submit" class="btn btn-primary float-right">Masuk</button>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> 