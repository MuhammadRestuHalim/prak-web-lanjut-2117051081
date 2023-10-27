<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>

<div class="container-fluid">
  <div class="row">
    <h3 >Data Diri</h3>
    <a class="btn btn-info" style="width:10vw;margin-left:10px;" href="<?= base_url('/user/create')?>">Tambah Data</a>
    <div class="table-responsive">
    <table class="table">
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
        foreach ($user as $u) { ?>
          <tr>
            <td><?= $no++ ?></td>
            <td><?= $u['nama'] ?></td>
            <td><?= $u['npm'] ?></td>
            <td><?= $u['nama_kelas'] ?></td>
            <td class="d-flex flex-row ">
              <a class="btn btn-success mx-1" href="<?=base_url('user/' . $u['id']) ?>">Detail</a>
              <a class="btn btn-success mx-1" href="<?= base_url('user/' . $u['id'] . '/edit') ?>">Edit</a>
            
                        <form action="<?= base_url('user/delete/' . $u['id']) ?>" method="POST">
                            <input  type="hidden" name="_method" value="DELETE">
                            <?= csrf_field() ?>
                            <button class="btn btn-danger mx-1" type="submit">Delete</button>
                        </form>
                   
            </td>
          </tr>
        <?php }
        ?>
      </tbody>
    </table>
        </div>
  </div>
</div>
<?= $this->endSection('content') ?>