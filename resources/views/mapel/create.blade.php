<!DOCTYPE html>
<html>
<head>
    <title>Tambah Mapel</title>
</head>
@include('css')
<body>
    @include('navbar')

  <div class="mx-96 mt-8">
<form class="w-full max-w-sm" method="post" action="/mapel/store" enctype="multipart/form-data">
    @csrf
    <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
       Mata Pelajaran
      </label>
    </div>
    <div class="md:w-2/3">
      <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="text"
       name="namamapel" required>
    </div>
  </div>
  <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
       Guru Pengajar
      </label>
    </div>
    <div class="md:w-2/3">
    <select class="bg-gray-200 border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="text"
       name="id_guru" required>
       <?php foreach ($guru as $row) : 
       ?>
        <option value="<?= $row['id_guru'] ?>"><b><?= $row['namaguru'] ?></b></option>

        <?php endforeach; ?>
      </select>
    </div>
  </div> 
  
  <div class="md:flex md:items-center">
    <div class="md:w-1/3"></div>
    <div class="md:w-2/3">
      <button class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit">
        Simpan
      </button>
    </div>
  </div>
</form>
</div>

</body>
</html>
