<a href="/guru/create">Tambah</a>
<table border="1">
    <tr>
        <td>Id Guru</td>
        <td>Nama Guru</td>
        <td>Alamat </td>
        <td>Jenis Kelamin </td>
    </tr>
    <?php foreach($guru as $row) : ?>
    <tr>
        <td><?= $row['id']; ?></td>
        <td><?= $row['namaguru']; ?></td>
        <td><?= $row['alamat']; ?></td>
        <td><?= $row['jeniskelamin']; ?></td>
    </tr>
    <?php endforeach; ?>
</table>
