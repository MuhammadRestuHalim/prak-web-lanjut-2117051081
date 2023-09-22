<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="<?php echo base_url('./css/style.css'); ?>">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

    <title>user</title>
</head>
<body class="p-3 mb-2 bg-info text-dark">
    <!-- <img src="restu.jpg" style="width:500px;height:400px; border-radius: 50%;"  -->
    
    <center>
    <div class="container">
    <img src=" <?php
        echo base_url('./img/restu.jpg')  ;
    ?>"
    alt="restu" style=" border-radius: 50%; margin-button: 50px;">
    
    <form action="<?php echo base_url('/user/store') ?>" method="POST">
        <!-- Input untuk nama -->
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="NAMA" name="nama"><br><br>


        <!-- Input untuk npm -->
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="NPM" name="npm"><br><br>

        <!-- Input untuk kelas -->
        <tr>
            <td>Kelas</td>
            <td>:</td>
            <td>
                <select name="kelas" id="kelas">
                    <?php foreach($kelas as $item):?>
                        <option value="<?=$item['id']?>"><?=$item['nama_kelas']?></option>
                    <?php endforeach;?>
                </select>
            </td>
        </tr>


        <!-- Tombol submit -->
        <tr>
             <td><input type="submit" value="Simpan"></td>
            </tr>
    </form>
    </div>
    </center>
</body>
</html>