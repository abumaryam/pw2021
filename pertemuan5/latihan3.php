<?php
    $mahasiswa = [
        ["Dian Prawira", "H11011911234", "Sistem Informasi", "dianprawira@student.untan.ac.id"],
        ["Siapalah", "H1101211235", "Sistem Informasi", "siapalah@student.untan.ac.id"],
        ["Entahlah", "H1101221236", "Sistem Informasi", "entahlah@student.untan.ac.id"]
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach ($mahasiswa as $mhs ) : ?>
    <ul>
        

        <li>Nama : <?= $mhs[0]; ?></li>
        <li>NIM : <?= $mhs[1]; ?></li>
        <li>Prodi : <?= $mhs[2]; ?></li>
        <li>Email : <?= $mhs[3]; ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>