<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url('./css/style.css'); ?>">
    <title>Document</title>
</head>
<body>
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
</html>