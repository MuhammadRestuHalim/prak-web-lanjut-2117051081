<?= $this->extend('layouts/app') ?>
    
    <?= $this->section('content') ?>
    
    <center>
      <div class="container">
      <div class="w-100 d-grid border gap-2" style="height: 100vh; place-content: center;">
      <div class="w-50 text-center border mx-auto">
      <img src ="<?= $user['foto']??'<default-foto'?>" width="100%" height="100%" alt="">
      <div class="item" ><?= $user['nama']?></div>
      <div class="item" ><?= $user['npm']?></div>
      <div class="item" ><?= $user['nama_kelas']?></div>
</div>
</center>
    <?= $this->endSection() ?>