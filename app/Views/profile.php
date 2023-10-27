<?= $this->extend('layouts/app') ?>
    
    <?= $this->section('content') ?>
    
    <center>
 <div class="container">
          <img class="rounded-circle" src ="<?= $user['foto']??'<default-foto'?>" style="width:200px;height:200px;" alt="">
          <div class="item" ><?= $user['nama']?></div>
          <div class="item" ><?= $user['npm']?></div>
          <div class="item" ><?= $user['nama_kelas']?></div>
</div>
</center>
    <?= $this->endSection() ?>