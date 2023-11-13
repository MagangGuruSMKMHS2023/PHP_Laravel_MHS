<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
@include('css')
<body>

<section class="bg-gray-50 dark:bg-gray-900">
  <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
    

<div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
    <a href="#">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Pendaftaran Berhasil</h5>
    </a>
    <?php foreach ($siswa as $row) : 
       ?>
        <p>Nama : <strong><?= $row['namasiswa'] ?></strong></p>
        <p>Alamat : <strong><?= $row['alamat'] ?></strong></p>
        <p>Jenis Kelamin : <strong><?= $row['jeniskelamin'] ?></strong></p>
        <p>Kelas : <strong><?= $row['namakelas'] ?></strong></p>


        <?php endforeach; ?>
        <br>
    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Silahkan Download Data Diri anda melalui Tautan Dibawah ini </p>
    <a href="siswa/pdf" target="__blank" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
       Download PDF
    </a>

    <a href="/" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
       Kembali
    </a>
</div>

  </div>
</section>
</body>
</html>
