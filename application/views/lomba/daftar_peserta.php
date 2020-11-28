<!-- Begin Page Content -->
<div class="container-fluid min-h-100">

    <?php if (validation_errors()) : ?>
        <div class="alert alert-danger" role="alert">
            <?= validation_errors(); ?>
        </div>
    <?php endif; ?>
    <!-- jalankan flash message jika validasi berhasil -->
    <?= $this->session->flashdata('message'); ?>
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?> - <?= $lomba['nama'] ?> </h1>
    <div>
        <a href="<?= base_url('admin/daftarLomba'); ?>">
            <button type="button" class="btn btn-success mb-3">Kembali</button>
        </a>
    </div>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Tim</th>
                <th scope="col">Judul Proposal</th>
                <th scope="col">Nama Dosen</th>
                <th scope="col">Nama Ketua</th>
                <th scope="col">Nama Anggota 1</th>
                <th scope="col">Nama Anggota 2</th>
            </tr>
        </thead>
        <tbody id="daftar-peserta">
            <?php $i = 0 ?>
            <?php $team = $this->menu->getTeamByLomba($id) ?>
            <?php foreach ($team as $team) : ?>
                <tr>
                    <th scope="col"><?= ++$i ?></th>
                    <td><?= $team['namatim'] ?></td>
                    <td><?= $team['judul'] ?></td>
                    <td><?= $team['dosen'] ?></td>
                    <td><?= $team['nama_ketua'] ?></td>
                    <td><?= $team['nama1'] ?></td>
                    <td><?= $team['nama2'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</div>
<!-- /.container-fluid -->
</div>