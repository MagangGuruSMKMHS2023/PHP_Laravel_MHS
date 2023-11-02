<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelas</title>
    @include('css')
</head>
<body>
@include('navbar')


        <button class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded mt-8 mx-48">
                <a href="/kelas/create">Tambah</a>
        </button>

        <div class="flex justify-center mt-4">
            <table class="table-auto border-collapse border border-slate-300 w-9/12">
                <tr class="bg-indigo-400 text-white">
                    <td class="p-4">Id Kelas</td>
                    <td class="p-4">Nama Kelas</td>
                    <td class="p-4">Wali Kelas</td>
                    <td class="p-4">Ketua Kelas</td>
                    <td class="p-4">Kursi</td>
                    <td class="p-4">Meja</td>
                    <td class="p-4">Gambar</td>
                </tr>
                <?php foreach($kelas as $gr) : ?>
                <tr class="even:bg-slate-300 odd:bg-slate-100">
                    <td class="p-4"><?php echo $gr['id_kelas']; ?></td>
                    <td class="p-4"><?php echo $gr['namakelas']; ?></td>
                    <td class="p-4"><?php echo $gr['walikelas']; ?></td>
                    <td class="p-4"><?php echo $gr['ketuakelas']; ?></td>
                    <td class="p-4"><?php echo $gr['kursi']; ?></td>
                    <td class="p-4"><?php echo $gr['meja']; ?></td>
                    <td class="p-4">
                        <a href="{{ asset('upload_gambar/' . $gr->gambar_kelas) }}" target="_blank">
                            <img src="{{ asset('upload_gambar/' . $gr->gambar_kelas) }}" alt="{{ $gr->namakelas }}" width="100" height="100">
                        </a>
                    </td>
                </tr>
                
                <?php endforeach; ?>
            </table>
        </div>
