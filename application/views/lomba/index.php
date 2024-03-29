                <!-- Begin Page Content -->
                <div class="container-fluid">

                  <?php if (validation_errors()) : ?>
                    <div class="alert alert-danger" role="alert">
                      <?= validation_errors(); ?>
                    </div>
                  <?php endif; ?>
                  <!-- jalankan flash message jika validasi berhasil -->
                  <?= $this->session->flashdata('message'); ?>
                  <!-- Page Heading -->
                  <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama Event</th>
                        <th scope="col">Penyelenggara</th>
                        <th scope="col">Tingkat</th>
                        <th scope="col">Aksi</th>
                      </tr>
                    </thead>
                    <?php $i = 1; ?>
                    <?php foreach ($lomba as $l) : ?>
                      <tbody>
                        <tr>
                          <th scope="row"><?= $i++; ?></th>
                          <td><?= $l['nama'] ?></td>
                          <td><?= $l['penyelenggara'] ?></td>
                          <td><?= $l['tingkat'] ?></td>
                          <td>
                            <?php if ($this->menu->cekTerdaftar($this->session->userdata('id'), $l['id'])) : ?>
                              <a class="badge badge-success" disabled ?>Anda Sudah Terdaftar</a>
                              <a href="<?= base_url('user/daftarPeserta/') ?><?= $l['id'] ?>" class="daftar-lomba passID2 badge badge-info">Daftar Peserta</a>
                            <?php else : ?>
                              <a href="" class="daftar-lomba passID badge badge-primary" data-toggle="modal" data-target="#daftar" data-id='<?= $l['id'] ?>'>Daftar</a>
                            <?php endif; ?>

                          </td>
                        </tr>
                      </tbody>
                    <?php endforeach; ?>
                  </table>

                </div>
                <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->
                <!-- Modal -->
                <div class="modal fade" id="daftar" tabindex="-1" aria-labelledby="newSubMenuModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="newSubMenuModalLabel">Daftar Lomba</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body" id="daftarrr">
                        <form action="<?= base_url('user/daftarLomba'); ?>" method="post">
                          <input type="hidden" id="id_user" name="id_user" value="<?= $this->session->userdata('id') ?>">
                          <input type="text" class="form-control my-2" id="id_lomba" placeholder="id_lomba" name="id_lomba" readonly>
                          <div class="justify-content-center">
                            <i class="fas fa-users"></i>
                            <label>Nama Tim</label>
                          </div>
                          <div class="form-group">
                            <input type="text" class="form-control" id="title" name="namatim" placeholder="Nama Tim">
                          </div>

                          <div class="justify-content-center">
                            <i class="fas fa-scroll"></i>
                            <label>Judul Proposal</label>
                          </div>
                          <div class="form-group">
                            <input type="text" class="form-control" id="title" name="judul" placeholder="Judul Proposal">
                          </div>

                          <div class="justify-content-center">
                            <i class="fas fa-user-tie"></i>
                            <label>Dosen Pebimbing</label>
                          </div>
                          <div class="form-group">
                            <input type="text" class="form-control" id="title" name="dosen" placeholder="Dosen Pembimbing">
                          </div>
                          <div class="form-group">
                            <input type="text" class="form-control" id="url" name="nip" placeholder="NIP/NIDN">
                          </div>

                          <div class="justify-content-center">
                            <i class="fas fa-user-alt"></i>
                            <label>Nama Ketua</label>
                          </div>
                          <div class="form-group">
                            <input type="text" class="form-control" id="icon" name="nama0" placeholder="Nama">
                          </div>
                          <div class="form-group">
                            <input type="text" class="form-control" id="icon" name="nim0" placeholder="NIM">
                          </div>
                          <div class="form-group">
                            <input type="text" class="form-control" id="icon" name="jurusan0" placeholder="Jurusan">
                          </div>

                          <div class="justify-content-center">
                            <i class="fas fa-user-alt"></i>
                            <label>Data Anggota 1</label>
                          </div>
                          <div class="form-group">
                            <input type="text" class="form-control" id="icon" name="nama1" placeholder="Nama">
                          </div>
                          <div class="form-group">
                            <input type="text" class="form-control" id="icon" name="nim1" placeholder="NIM">
                          </div>
                          <div class="form-group">
                            <input type="text" class="form-control" id="icon" name="jurusan1" placeholder="Jurusan">
                          </div>
                          <div class="justify-content-center">
                            <i class="fas fa-user-alt"></i>
                            <label>Data Anggota 2</label>
                          </div>
                          <div class="form-group">
                            <input type="text" class="form-control" id="icon" name="nama2" placeholder="Nama">
                          </div>
                          <div class="form-group">
                            <input type="text" class="form-control" id="icon" name="nim2" placeholder="NIM">
                          </div>
                          <div class="form-group">
                            <input type="text" class="form-control" id="icon" name="jurusan2" placeholder="Jurusan">
                          </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Add</button>
                      </div>
                      </form>
                    </div>
                  </div>
                </div>