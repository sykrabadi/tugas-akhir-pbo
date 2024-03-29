<div class="container mt-5">
    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg">
                    <div class="px-5 py-3">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 my-3"><b>Buat akun baru</b></h1>
                        </div>
                        <!-- data yang masuk akan dikirim ke controller
                            auth, method registration -->
                        <form class="user" method="post" action="<?= base_url('auth/registration'); ?>">
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="name" name="name" placeholder="Full Name" value="<?= set_value('name'); ?>">
                                <!-- menampilkan pesan error untuk name -->
                                <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <!-- set_values() untuk menyimpan data sebelumnya -->
                                <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Email Address" value="<?= set_value('email'); ?>">
                                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Password">
                                    <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="col-sm-6">
                                    <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Repeat Password">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success btn-user btn-block">
                                REGISTER
                            </button>
                        </form>
                        <hr>
                        <div class="text-center">
                            <a class="small" href="<?= base_url(); ?>auth">Sudah punya akun? Login!</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify=content-center p-3">
                <div class="col-6 d-flex justify-content-center">
                    <img src="<?= base_url('assets/img/pimnas.png') ?>" class="img-fluid p-4" style="width: 170px;">
                </div>
                <div class="col-6 d-flex justify-content-center">
                    <img src="<?= base_url('assets/img/um.png') ?>" class="img-fluid p-4 " style="width: 170px;">
                </div>
            </div>
        </div>
    </div>

</div>