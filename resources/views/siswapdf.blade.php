<!DOCTYPE html>
<html>
<head>
    <title>Data  Siswa</title>
</head>
<body>
    <h1>Data Siswa</h1>   

            <table border="1" cellpadding="2">
                <tr>
                    <td width="5%">No</td>
                    <td>Nama Siswa</td>
                    <td>Alamat</td>
                    <td>Jenis Kelamin</td>
                    <td>Kelas</td>
                </tr>
                <?php
                $no = 1;
                foreach($siswa as $gr) : ?>
                <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $gr['namasiswa']; ?></td>
                    <td><?php echo $gr['alamat']; ?></td>
                    <td><?php echo $gr['jeniskelamin']; ?></td>
                    <td><?php echo $gr['namakelas']; ?></td>
                </tr>
                    
                <?php
                $no++;
                endforeach; ?>
            </table>
</body>
</html>