<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadwal Mapel</title>
    @include('css')
</head>
<body>
@include('navbar')


        <button class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded mt-8 mx-48">
                <a href="/jadwal/create">Tambah</a>
        </button>

       
        <div class="flex justify-center mt-4">
            <table class="table-auto border-collapse border border-slate-300 w-9/12">
                <tr class="bg-indigo-400 text-white">
                    <td class="p-4">Id jadwal</td>
                    <td class="p-4">Mata Pelajaran</td>
                    <td class="p-4">Kelas</td>
                    <td class="p-4">Jam Mengajar</td>
                    <td class="p-4">Aksi</td>
                </tr>
                <?php foreach($jadwal as $gr) : ?>
                <tr class="even:bg-slate-300 odd:bg-slate-100">
                    <td class="p-4"><?php echo $gr['id_jadwal']; ?></td>
                    <td class="p-4"><?php echo $gr['mapel']; ?></td>
                    <td class="p-4"><?php echo $gr['kelas']; ?></td>
                    <td class="p-4"><?php echo $gr['jam']; ?></td>


                    <td class="p-4">
                        <a href="/jadwal/<?= $gr['id_jadwal'] ?>/edit" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">Edit</a>
                        <form action="/jadwal/<?= $gr['id_jadwal']?>" method="post">
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
