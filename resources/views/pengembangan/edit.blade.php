<!DOCTYPE html>
<html>
<head>
    <title>Edit Pengembangan</title>
</head>
@include('css')
<body>
    @include('navbar')

  <div class="mx-96 mt-8">
<form class="w-full max-w-sm" method="post" action="/pengembangan/{{$pengembangan->id_pengembangan}}" enctype="multipart/form-data">
@method("put")  
@csrf
 <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
        Id Kegiatan
      </label>
    </div>
    <div class="md:w-2/3">
      <input class="bg-gray-200 appearance-none border-2 border-red-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="text"
       name="id_pengembangan" value="{{ $pengembangan->id_pengembangan}}" readonly>
    </div>
  </div>  
  <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
        Nama Kegiatan
      </label>
    </div>
    <div class="md:w-2/3">
      <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="text"
       name="namapengembangan" value="{{ $pengembangan->namapengembangan}}" required>
    </div>
  </div>
  <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
        jumlah
      </label>
    </div>
    <div class="md:w-2/3">
      <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="text"
       name="jumlah" value="{{ $pengembangan->jumlah}}" required>
    </div>
  </div>
  <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
       Jenis Kegiatan
      </label>
    </div>
    <div class="md:w-2/3">
      <select class="bg-gray-200 border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="text"
       name="jenis" required>

        <option value="Organisasi" <?php if($pengembangan->jenis == "Organisasi") echo 'selected = "selected"'; ?>>Organisasi</option>
        <option value="Ekstrakulikuler" <?php if($pengembangan->jenis == "Ekstrakulikuler") echo 'selected = "selected"'; ?>>Ekstrakulikuler</option>
        <option value="Intrakulikuler" <?php if($pengembangan->jenis == "Intrakulikuler") echo 'selected = "selected"'; ?>>Intrakulikuler</option>


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
