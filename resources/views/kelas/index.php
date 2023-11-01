<a href="/kelas/create">Tambah</a>
<table border="1">
    <tr>
        <td>Id Kelas</td>
        <td>Nama Kelas</td>
        <td>Wali Kelas</td>
        <td>Ketua Kelas</td>
        <td>Kursi</td>
        <td>Meja</td>
    </tr>
    <?php foreach($kelas as $gr) : ?>
    <tr>
        <td><?php echo $gr['id_kelas']; ?></td>
        <td><?php echo $gr['namakelas']; ?></td>
        <td><?php echo $gr['walikelas']; ?></td>
        <td><?php echo $gr['ketuakelas']; ?></td>
        <td><?php echo $gr['kursi']; ?></td>
        <td><?php echo $gr['meja']; ?></td>
    </tr>
    <?php endforeach; ?>
</table>
