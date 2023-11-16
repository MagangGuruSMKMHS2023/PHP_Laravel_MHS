<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengembangan</title>
    @include('css')
</head>
<body>
@include('navbar')

        <div class="flex pt-12">
        <a href="/pengembangan/create" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded mt-8 mx-48">Tambah</a>

        </div>

    <div class="flex justify-center mt-4">
            <table class="table-auto border-collapse border border-slate-300 w-9/12">
                <tr class="bg-indigo-400 text-white">
                    <td class="p-4">Id Kegiatan</td>
                    <td class="p-4">Nama Kegiatan</td>
                    <td class="p-4">Jumlah Anggota </td>
                    <td class="p-4">Jenis Kegiatan </td>
                    <td class="p-4">Aksi</td>
                </tr>
                <?php foreach($pengembangan as $row) : ?>
                <tr class="even:bg-slate-300 odd:bg-slate-100">
                    <td class="p-4"><?= $row['id_pengembangan']; ?></td>
                    <td class="p-4"><?= $row['namapengembangan']; ?></td>
                    <td class="p-4"><?= $row['jumlah']; ?></td>
                    <td class="p-4"><?= $row['jenis']; ?></td>
                    <td class="p-4">
                        <a href="/pengembangan/<?= $row['id_pengembangan'] ?>/edit" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">Edit</a>
                        <form action="/pengembangan/<?= $row['id_pengembangan']?>" method="post">
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

    
</body>
</html>





