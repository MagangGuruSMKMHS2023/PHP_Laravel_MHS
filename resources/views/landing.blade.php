<!DOCTYPE html>
<html>
<head>
    <title>MHS</title>
</head>
@include('css')
<body>


    <section>
            <div class="w-full relative pb-10 px-6 xl:px-0">
                <div class="pt-32 lg:flex items-center relative z-10 container mx-auto">
                    <div class="w-full lg:w-1/2 h-96 lg:pr-10 xl:pr-0">
                        <img tabindex="0" role="img" aria-label="people smiling" class="mx-auto h-96 w-96" src="{{ asset('img/mhs.png') }}"  alt="people smiling"/>
                    </div>
                    <div  role="contentinfo"  class="w-full lg:w-1/2 h-full">
                        <p tabindex="0" class="text-indigo-700 uppercase text-2xl mb-4">Welcome To</p>
                        <h1 tabindex="0" class="text-indigo-700 text-4xl lg:text-6xl font-black mb-8">Multistudi HighSchool</h1>
                        <p tabindex="0" class="text-gray-800 dark:text-white font-regular mb-8">SMK Multistudi High School adalah sebuah institusi pendidikan vokasi yang didirikan pada tahun 2007 dengan fokus inovasi, prestasi dan akhlak mulia.Melalui inovasi, SMK MHS menerapkan dan meramu sistem pendidikan vokasi yang paling sesuai dengan kebutuhan dunia kerja saat ini yang menuntut siswa untuk proaktif dan menjadi pionir untuk perkembangan dirinya.</p>
                       
                            <div class="sm:flex items-center py-2 ml-64">
                                <div class="flex items-center">
                                <a href="/loginform" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">Login</a>

                                </div>      
                            </div>
                
                           
                        </div> 
                    </div>
                </div>
            </div>
    </section>
        
        
    <div class="flex w-full items-center flex justify-evenly items-center py-12 px-6">

        <?php foreach($jurusan as $row) : ?>
            <div>
                <!-- <div class="max-w-xs h-96 flex flex-col justify-between  dark:bg-gray-800 bg-violet-300  mb-6 py-5 px-4 "> -->
                <?php
                    if($row['namajurusan'] == 'Pengembangan Perangkat Lunak dan Gim'){
                ?>
                <div class="max-w-xs h-96 flex flex-col justify-between  dark:bg-gray-800 bg-cyan-300  mb-6 py-5 px-4 ">

                <?php
                    }elseif ($row['namajurusan'] == 'Akuntansi Keuangan Lembaga') {
                ?>
                <div class="max-w-xs h-96 flex flex-col justify-between  dark:bg-gray-800 bg-rose-300  mb-6 py-5 px-4 ">

                <?php
                    }elseif ($row['namajurusan'] == 'Desain Komunikasi Visual') {
                ?>
                <div class="max-w-xs h-96 flex flex-col justify-between  dark:bg-gray-800 bg-emerald-300  mb-6 py-5 px-4 ">

                <?php
                    }elseif ($row['namajurusan'] == 'Teknik Jaringan Komputer dan Telekomunikasi') {
                ?>
                <div class="max-w-xs h-96 flex flex-col justify-between  dark:bg-gray-800 bg-violet-300  mb-6 py-5 px-4 ">

                <?php
                    }else{
                ?>
                <div class="max-w-xs h-96 flex flex-col justify-between  dark:bg-gray-800 bg-violet-300  mb-6 py-5 px-4 ">
                <?php
                    }
                ?>
                    <div>
                        <h4 tabindex="0" class="focus:outline-none text-gray-800 dark:text-gray-100 font-bold mb-3"><?= $row['namajurusan'] ?></h4>
                        <p tabindex="0" class="focus:outline-none text-gray-800 dark:text-gray-100 text-sm"><?= $row['deskripsi'] ?></p>
                    </div>

                </div>
            </div>
        <?php endforeach ?>
    </div>
    
    





        <style>
            /* Top menu */
            .top-100 {
                animation: slideDown 0.5s ease-in-out;
            }
            @keyframes slideDown {
                0% {
                    top: -50%;
                }
                100% {
                    top: 0;
                }
            }
            * {
                outline: none !important;
                -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
                -webkit-tap-highlight-color: transparent;
            }
        </style>
    
</body>
</html>
