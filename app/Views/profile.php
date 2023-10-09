<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>

<body class="p-3 mb-2 bg-info text-dark">
<!-- <img src="restu.jpg" style="width:500px;height:400px; border-radius: 50%;"  -->

    <center>
    </center>

    <center>
      <div class="container">
      <img src ="
    <?php
        echo base_url('./img/restu.jpg') ;
    ?>">
      <div class="item" >
            <?= $nama?>
      </div>
      <div class="item">
            <?= $kelas?>
      </div>
      <div class="item">
                <?= $npm?>
      </div>

    </div>
    
</center>

</body>
<?= $this->endSection('content') ?>