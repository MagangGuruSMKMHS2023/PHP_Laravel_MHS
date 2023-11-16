<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Siswa</title>
    @include('css')
</head>
<body>
@include('navbar')
    <section class="pt-12">
            <div class="flex">
                    <a href="/siswa/create" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded mt-8 mx-48">Tambah</a>
                    </div>
                <form action="/carisiswa" method="get" class="mt-8">   
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none mx-48 ">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                            </svg>
                        </div>
                        <input type="search" name="cari" id="default-search" class=" mx-48 w-9/12 p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Cari Nama Siswa,Nama Kelas..." >
                        <button type="submit" class="text-white absolute right-52 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
                    </div>
                </form>

                <div class="flex justify-center mt-4">
                    <table class="table-auto border-collapse border border-slate-300 w-9/12">
                        <tr class="bg-indigo-400 text-white">
                            <td class="p-4">Id Siswa</td>
                            <td class="p-4">Nama Siswa</td>
                            <td class="p-4">Alamat </td>
                            <td class="p-4">Jenis Kelamin </td>
                            <td class="p-4">Kelas</td>
                            <td class="p-4">Foto</td>
                            <td class="p-4">Aksi</td>
                        </tr>
                        <?php foreach($siswa as $row) : ?>
                        <tr class="even:bg-slate-300 odd:bg-slate-100">
                            <td class="p-4"><?= $row['id_siswa']; ?></td>
                            <td class="p-4"><?= $row['namasiswa']; ?></td>
                            <td class="p-4"><?= $row['alamat']; ?></td>
                            <td class="p-4"><?= $row['jeniskelamin']; ?></td>
                            <td class="p-4"><?= $row['namakelas']; ?></td>
                            <td class="p-4">
                                <a href="{{ asset('upload_gambar/' . $row->gambar_siswa) }}" target="_blank">
                                    <img src="{{ asset('upload_gambar/' . $row->gambar_siswa) }}" alt="{{ $row->namakelas }}" width="100" height="100">
                                </a>
                            </td>
                            <td class="p-4">
                                <a href="/siswa/<?= $row['id_siswa'] ?>/edit" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">Edit</a>
                                <form action="/siswa/<?= $row['id_siswa']?>" method="post">
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
                        </section>       

</body>
</html>
                




