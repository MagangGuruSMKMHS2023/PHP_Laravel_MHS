<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <td>Id Kelas</td>
            <td>Nama Kelas</td>
            <td>Wali Kelas</td>
            <td>Ketua Kelas</td>
            <td>Kursi</td>
            <td>Meja</td>
        </tr>
        <?php foreach($kelas as $row) : ?>
        <tr>
            <td><?= $row['id_kelas'] ?></td>
            <td><?= $row['namakelas'] ?></td>
            <td><?= $row['walikelas'] ?></td>
            <td><?= $row['ketuakelas'] ?></td>
            <td><?= $row['kursi'] ?></td>
            <td><?= $row['meja'] ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>