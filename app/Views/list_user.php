<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>

<div class="container">
  <div class="row">
    <h3 class="mt-5">Data Diri</h3>
    <a href="<?= base_url('/user/create')?>">Tambah Data</a>
    <table class="table table-striped">
      <thead>
        <tr>
          <td>No</td>
          <td>Nama</td>
          <td>NPM</td>
          <td>Kelas</td>
          <td>Aksi</td>
        </tr>
      </thead>
      <tbody>
        <?php
        $no = 1;
        foreach ($users as $user) { ?>
          <tr>
            <td><?= $no++ ?></td>
            <td><?= $user['nama'] ?></td>
            <td><?= $user['npm'] ?></td>
            <td><?= $user['nama_kelas'] ?></td>
            <td>
              <a href="<?=base_url('user/' . $user['id']) ?>">Detail</a>
              <a class="btn btn-warning" href="">Edit</a>
              <a class="btn btn-danger" href="">Hapus</a>

            </td>
          </tr>
        <?php }
        ?>
      </tbody>
    </table>
  </div>
</div>
<?= $this->endSection('content') ?>