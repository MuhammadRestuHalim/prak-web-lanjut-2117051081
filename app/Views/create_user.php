<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <style>
        body {
            background-color: #808080;
            color: #fff;
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
        }

        .form-group input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            background-color: #222;
            border: none;
            color: #fff;
        }

        .form-group button[type="submit"] {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
        }

        .form-group button[type="submit"]:hover {
            background-color: #555;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1><?= $title ?></h1>
        <form action="<?= base_url('/user/store') ?>" method="post">
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" id="nama" name="nama" value="<?= old('nama') ?>">
            </div>
            <div class="form-group">
                <label for="kelas">Kelas</label>
                <select id="kelas" name="kelas">
                    <?php foreach ($kelas as $kelasItem) : ?>
                        <option value="<?= $kelasItem['id'] ?>"><?= $kelasItem['nama_kelas'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group">
                <label for="npm">NPM</label>
                <input type="text" id="npm" name="npm" value="<?= old('npm') ?>">
            </div>
            <?php if (session('validation')) : ?>
                <div class="error"><?= session('validation')->listErrors() ?></div>
            <?php endif; ?>
            <div class="form-group">
                <button type="submit">Simpan</button>
            </div>
        </form>
    </div>
</body>
</html>
