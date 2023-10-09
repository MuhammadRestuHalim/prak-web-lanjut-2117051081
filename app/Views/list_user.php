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

        .user-list {
            list-style: none;
            padding: 0;
        }

        .user-list li {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1><?= $title ?></h1>
        <ul class="user-list">
            <?php foreach ($users as $user) : ?>
                <li><?= $user['nama'] ?> - <?= $user['npm'] ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
</body>
</html>
