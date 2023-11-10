<!DOCTYPE html>
<html>
<head>
    <title>Data Nilai Siswa</title>
</head>
<body>
    <h1>Data Nilai Siswa</h1>
    
        <?php foreach($kelas as $row):  ?> 
            <table>
                <tr>
                    <td colspan="3"></td>
                    <td>Kelas: <strong><?= $row['namakelas']?></strong></td>
                </tr>
            </table>
        <?php endforeach;?>

            <table border="1" cellpadding="2">
                <tr>
                    <td width="5%">No</td>
                    <td>Nama Siswa</td>
                    <td>Tugas</td>
                    <td>Kuis</td>
                    <td>Uts</td>
                    <td>Uas</td>
                    <td>Total Nilai</td>
                    <td>Keterangan</td>
                </tr>
                <?php
                $no = 1;
                foreach($nilai as $gr) : ?>
                <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $gr['namasiswa']; ?></td>
                    <td><?php echo $gr['tugas']; ?></td>
                    <td><?php echo $gr['kuis']; ?></td>
                    <td><?php echo $gr['uts']; ?></td>
                    <td><?php echo $gr['uas']; ?></td>
                    <td><?php echo $gr['total_nilai']; ?></td>
                    <td><?php echo $gr['keterangan']; ?></td>

                </tr>
                    
                <?php
                $no++;
                endforeach; ?>
            </table>
</body>
</html>