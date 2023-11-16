<!DOCTYPE html>
<html>
<head>
    <title>Edit Siswa</title>
</head>
@include('css')
<body>
    @include('navbar')

  <div class="mx-96 mt-8">
<form class="w-full max-w-sm" method="post" action="/siswa/{{$siswa->id_siswa}}" enctype="multipart/form-data">
    @method("put")
    @csrf
  <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
        Nama Siswa
      </label>
    </div>
    <div class="md:w-2/3">
      <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="text"
       name="namasiswa" value="{{$siswa->namasiswa}}" required>
    </div>
  </div>
  <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
        alamat
      </label>
    </div>
    <div class="md:w-2/3">
      <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="text"
       name="alamat" value="{{$siswa->alamat}}" required>
    </div>
  </div>

  <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
       Jenis Kelamin
      </label>
    </div>
    <div class="md:w-2/3">
      <select class="bg-gray-200 border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="text"
       name="jeniskelamin" required>
        <option value="Laki Laki" <?php if($siswa->jeniskelamin == "Laki Laki") echo 'selected = "selected"';?> >Laki Laki</option>
        <option value="Perempuan" <?php if($siswa->jeniskelamin == "Perempuan") echo 'selected = "selected"';?>>Perempuan</option>

      </select>
    </div>
  </div>

  <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
       Kelas
      </label>
    </div>
    <div class="md:w-2/3">
      <select class="bg-gray-200 border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="text"
       name="id_kelas" required>
       <?php foreach ($kelas as $row) : 
       ?>
        <option value="<?= $row['id_kelas'] ?>" <?php if($siswa->id_kelas ==  $row['id_kelas'] ) echo 'selected = "selected"';?>><?= $row['namakelas'] ?></option>

        <?php endforeach; ?>
      </select>
    </div>
  </div>
  <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
        Gambar 
      </label>
    </div>
    <div class="md:w-2/3">
        @if($siswa->gambar_siswa)
        <img src="{{ asset('upload_gambar/'. $siswa->gambar_siswa)}}" alt="" width="100%" height="100%">
        @else
        <p>Tidak da Gambar Saat ini.</p>
        @endif
    </div>
  </div>
  <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
        Gambar Siswa
      </label>
    </div>
    <div class="md:w-2/3">
      <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="file"
       name="gambar_siswa" >
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
