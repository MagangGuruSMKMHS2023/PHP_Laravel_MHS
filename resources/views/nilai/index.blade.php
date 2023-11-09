<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nilai</title>
    @include('css')
</head>
<body>
@include('navbar')


        <button class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded mt-8 mx-48">
                <a href="/nilai/create">Tambah</a>
        </button>

       
        <div class="flex justify-center mt-4">
            <table class="table-auto border-collapse border border-slate-300 w-9/12">
                <tr class="bg-indigo-400 text-white">
                    <td class="p-4">Id nilai</td>
                    <td class="p-4">Nama Siswa</td>
                    <td class="p-4">Kelas</td>
                    <td class="p-4">Tugas</td>
                    <td class="p-4">Kuis</td>
                    <td class="p-4">Uts</td>
                    <td class="p-4">Uas</td>
                    <td class="p-4">Total Nilai</td>
                    <td class="p-4">Keterangan</td>
                    <td class="p-4">Aksi</td>
                </tr>
                <?php foreach($nilai as $gr) : ?>
                <tr class="even:bg-slate-300 odd:bg-slate-100">
                    <td class="p-4"><?php echo $gr['id_nilai']; ?></td>
                    <td class="p-4"><?php echo $gr['namasiswa']; ?></td>
                    <td class="p-4"><?php echo $gr['namakelas']; ?></td>
                    <td class="p-4"><?php echo $gr['tugas']; ?></td>
                    <td class="p-4"><?php echo $gr['kuis']; ?></td>
                    <td class="p-4"><?php echo $gr['uts']; ?></td>
                    <td class="p-4"><?php echo $gr['uas']; ?></td>
                    <td class="p-4"><?php echo $gr['total_nilai']; ?></td>
                    <td class="p-4"><?php echo $gr['keterangan']; ?></td>


                    <td class="p-4">
                        <a href="/nilai/<?= $gr['id_nilai'] ?>/edit" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">Edit</a>
                        <form action="/nilai/<?= $gr['id_nilai']?>" method="post">
                           @csrf 
                           @method("delete")
                            <button class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded mt-3" type="submit">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
                
                <?php endforeach; ?>
            </table>
        </div>
