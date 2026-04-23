<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>
<body>
    <h2>Daftar Mahasiswa</h2>
    <ul>
        <?php foreach($data as $mhs):?>
            <li><?= $mhs; ?></li>
            <?php endforeach; ?>
    </ul>
</body>
</html>