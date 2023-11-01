<a href="/siswa/create">Tambah</a>
<table border="1">
    <tr>
        <td>Id Siswa</td>
        <td>Nama Siswa</td>
        <td>Alamat </td>
        <td>Jenis Kelamin </td>
        <td>Kelas</td>
    </tr>
    <?php foreach($siswa as $row) : ?>
    <tr>
        <td><?= $row['id']; ?></td>
        <td><?= $row['namasiswa']; ?></td>
        <td><?= $row['alamat']; ?></td>
        <td><?= $row['jeniskelamin']; ?></td>
        <td><?= $row['kelas']; ?></td>

        
    </tr>
    <?php endforeach; ?>
</table>
