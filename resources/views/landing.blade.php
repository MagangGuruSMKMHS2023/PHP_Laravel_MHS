<!DOCTYPE html>
<html>
<head>
    <title>MHS</title>
</head>
@include('css')
<body>

    <!-- navigasi -->
    <nav class="flex flex-wrap fixed z-50 w-full items-center justify-between p-4 bg-gray-700">
        <div class="w-auto lg:order-2 lg:w-1/5 lg:text-center">
            <a class="text-xl font-semibold text-gray-300 font-heading" href="#">
                Multistudi High School
            </a>
        </div>
        <div class="block lg:hidden">
            <button class="flex items-center px-3 py-2 text-indigo-500 border border-indigo-500 rounded navbar-burger">
                <svg class="w-3 h-3 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <title>
                        Menu
                    </title>
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z">
                    </path>
                </svg>
            </button>
        </div>
        <div class="hidden w-full navbar-menu lg:order-1 lg:block lg:w-2/5">
            <a class="block mt-4 mr-10 text-white lg:inline-block lg:mt-0 hover:text-indigo-600" href="#hero">
                Beranda
            </a>
            <a class="block mt-4 mr-10 text-white lg:inline-block lg:mt-0 hover:text-indigo-600" href="#visi">
                Visi
            </a>
        </div>
        <div class="hidden w-full navbar-menu lg:order-3 lg:block lg:w-2/5 lg:text-right">
            <a class="block mt-4 mr-10 text-white lg:inline-block lg:mt-0 hover:text-indigo-600" href="#misi">
                Misi
            </a>
            <a class="block mt-4 mr-10 text-white lg:inline-block lg:mt-0 hover:text-indigo-600" href="#daftar">
                Daftar
            </a>
        </div>
    </nav>
    <!-- hero -->
    <div class="relative z-20 flex items-center overflow-hidden bg-white dark:bg-gray-800" id="hero">
        <div class="container relative flex px-6 py-16 mx-auto">
            <div class="relative z-20 flex flex-col sm:w-2/3 lg:w-2/5">
                <span class="w-20 h-2 mb-12 bg-gray-800 dark:bg-white">
                </span>
                <h1 class="flex flex-col text-6xl font-black leading-none text-gray-800 uppercase font-bebas-neue sm:text-6xl dark:text-white">
                    Global Mind
                    <span class="text-5xl sm:text-7xl">
                        HiTech Personality
                    </span>
                </h1><br>
                <p class="text-sm text-gray-700 sm:text-base dark:text-white">
                Berdiri sejak tahun 2007 dengan mengusung pendidikan vokasi, SMK Multistudi High School terus menciptakan perkembangan bagi dunia pendidikan. Tiap tahunnya berhasil meluluskan siswa(i) menjadi alumni yang dapat memaksimalkan hasil belajar sesuai dengan kebutuhan dunia kerja.
                Melalui inovasi, SMK MHS menerapkan dan meramu sistem pendidikan vokasi yang paling sesuai dengan kebutuhan dunia kerja saat ini yang menuntut siswa untuk proaktif dan menjadi pionir untuk perkembangan dirinya.
                </p>
                
                <div class="flex mt-8">
                    <a href="/loginform" class="px-4 py-2 mr-4 text-white uppercase bg-pink-500 border-2 border-transparent rounded-lg text-md hover:bg-pink-400">
                        Login
                    </a>
                    <a href="/regis" class="px-4 py-2 text-pink-500 uppercase bg-transparent border-2 border-pink-500 rounded-lg dark:text-white hover:bg-pink-500 hover:text-white text-md">
                        Registrasi Siswa
                    </a>
                </div>
            </div>
            <div class="relative hidden sm:block sm:w-1/3 lg:w-3/5">
                <img src="{{ asset('img/mhs.png') }}" class="max-w-xs m-auto md:max-w-sm"/>
            </div>
        </div>
    </div>
    <!-- divider -->
    <div class="w-full h-8">
    <svg viewBox="0 0 1440 100" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path
            d="M0 43.9999C106.667 43.9999 213.333 7.99994 320 7.99994C426.667 7.99994 533.333 43.9999 640 43.9999C746.667 43.9999 853.333 7.99994 960 7.99994C1066.67 7.99994 1173.33 43.9999 1280 43.9999C1386.67 43.9999 1440 19.0266 1440 9.01329V100H0V43.9999Z"
            class="fill-current text-gray-700"></path>
    </svg>
    </div>

    <!-- visi -->
    <section class="bg-gray-700" id="visi">
        <div class="container-fluid p-4 mx-auto bg-gray-700 max-w-7xl sm:p-6 lg:p-8 dark:bg-gray-800 mt-16">
            <div class="flex flex-wrap -mx-8">
                <div class="w-full px-8 lg:w-1/2">
                    <div class="pb-12 mb-12 border-b lg:mb-0 lg:pb-0 lg:border-b-0">
                        <h2 class="mb-4 text-3xl font-bold lg:text-4xl font-heading text-white">
                            Visi SMKS MHS
                        </h2>
                        <p class="mb-8 leading-loose text-gray-300 dark:text-gray-300">
                        “Menjadi sekolah yang unggul di era digitalisasi, berkepribadian sesuai Profil Pelajar Pancasila dan berwawasan global.
                        (Hi Tech, Personality, Global Mind)” Visi ini dirancang pada tahun 2021, sesuai dengan pembahasan di Rencana Kegiatan Jangka Menengah, maka visi tersebut diharapkan akan dapat dicapai secara menyeluruh pada tahun 2026.
                        </p>

                        <img src="{{asset('img/sd.jpg')}}" alt="">
                    </div>
                </div>
                <div class="w-full px-8 lg:w-1/2">
                    <ul class="space-y-12">
                        <li class="flex -mx-4">
                            <div class="px-4">
                                <span class="flex items-center justify-center w-16 h-16 mx-auto text-2xl font-bold text-blue-600 rounded-full font-heading bg-blue-50">
                                    1
                                </span>
                            </div>
                            <div class="px-4">
                                <h3 class="my-4 text-xl font-semibold text-white">
                                    Vokasi
                                </h3>
                                <p class="leading-loose text-gray-300 dark:text-gray-300">
                                Mengembangkan pendidikan vokasi yang mampu bersaing didunia kerja dan memiliki kompetensi kewirausahaan yang unggul sesuai dengan Standar Kompetensi Lulusan yang ditetapkan SMKS Multistudi High School.
                                </p>
                            </div>
                        </li>
                        <li class="flex -mx-4">
                            <div class="px-4">
                                <span class="flex items-center justify-center w-16 h-16 mx-auto text-2xl font-bold text-blue-600 rounded-full font-heading bg-blue-50">
                                    2
                                </span>
                            </div>
                            <div class="px-4">
                                <h3 class="my-4 text-xl font-semibold text-white">
                                    Link & Match
                                </h3>
                                <p class="leading-loose text-gray-300 dark:text-gray-300">
                                Meningkatkan dan menguatkan kerjasama bersama IDUKA melalui kegiatan kemitraan sebagai perwujudan link and match secara berkelanjutan.
                                </p>
                            </div>
                        </li>
                        <li class="flex -mx-4">
                            <div class="px-4">
                                <span class="flex items-center justify-center w-16 h-16 mx-auto text-2xl font-bold text-blue-600 rounded-full font-heading bg-blue-50">
                                    3
                                </span>
                            </div>
                            <div class="px-4">
                                <h3 class="my-4 text-xl font-semibold text-white">
                                    Green School
                                </h3>
                                <p class="leading-loose text-gray-300 dark:text-gray-300">
                                Terciptanya lingkungan sekolah yang tertib, bersih, nyaman dan ramah sesuai dengan konsep sekolah green school.
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Misi -->
    
    <div class="container p-6 px-6 mx-auto bg-white dark:bg-gray-800" id="misi">
        <div class="mb-16 text-center">
                <h2 class="text-base font-semibold tracking-wide text-indigo-600 uppercase">
                    MISI
                </h2>
            <p class="mt-2 text-3xl font-extrabold leading-8 tracking-tight text-gray-900 dark:text-white sm:text-4xl">
                Multistudi High School
            </p>
        </div>
        <div class="flex flex-wrap my-12 dark:text-white">
            <div class="w-full p-8 border-b md:w-1/2 md:border-r lg:w-1/3">
                <div class="flex items-center mb-6">
                    <span class="flex items-center justify-center w-16 h-16 mx-auto text-2xl font-bold text-blue-600 rounded-full font-heading bg-blue-50">
                                    1
                    </span>
                </div>
                <p class="leading-loose text-gray-500 dark:text-gray-200 text-md">
                    Melaksanakan sistem pengajaran yang berbasis digital untuk membentuk tenaga-tenaga unggul yang profesional berstandar nasional dan internasional sesuai kebutuhan IDUKA.
                 </p>
            </div>
            <div class="w-full p-8 border-b md:w-1/2 lg:w-1/3 lg:border-r">
                <div class="flex items-center mb-6">
                    <span class="flex items-center justify-center w-16 h-16 mx-auto text-2xl font-bold text-blue-600 rounded-full font-heading bg-blue-50">
                                    2
                    </span>
                </div>
                <p class="leading-loose text-gray-500 dark:text-gray-200 text-md">
                     Mengembangkan nilai dan norma serta budi pekerti di era globalisasi dan digitalisasi dengan berpegang teguh pada budaya bangsa melalui pelaksanaan proyek penguatan profil pelajar Pancasila dan budaya kerja (P5BK).
                </p>
            </div>
            <div class="w-full p-8 border-b md:w-1/2 md:border-r lg:w-1/3 lg:border-r-0">
                <div class="flex items-center mb-6">
                    <span class="flex items-center justify-center w-16 h-16 mx-auto text-2xl font-bold text-blue-600 rounded-full font-heading bg-blue-50">
                                    3
                    </span>
                </div>
                <p class="leading-loose text-gray-500 dark:text-gray-200 text-md">
                     Mengembangkan pola pikir peserta didik, pendidik dan tenaga kependidikan yang mampu beradaptasi sesuai dengan perkembangan zaman.
                </p>
            </div>
            <div class="w-full p-8 border-b md:w-1/2 lg:w-1/3 lg:border-r ">
                <div class="flex items-center mb-6">
                    <span class="flex items-center justify-center w-16 h-16 mx-auto text-2xl font-bold text-blue-600 rounded-full font-heading bg-blue-50">
                                    4
                    </span>
                </div>
                <p class="leading-loose text-gray-500 dark:text-gray-200 text-md">
                    Menjalankan Pembelajaran berbasis Project Based Learning.
                </p>
            </div>
            <div class="w-full p-8 border-b md:w-1/2 md:border-r  lg:w-1/3 ">
                <div class="flex items-center mb-6">
                    <span class="flex items-center justify-center w-16 h-16 mx-auto text-2xl font-bold text-blue-600 rounded-full font-heading bg-blue-50">
                                    5
                    </span>
                </div>
                <p class="leading-loose text-gray-500 dark:text-gray-200 text-md">
                    Mendirikan Lembaga Sertifikasi Profesi P1 untuk melaksanakan sertifikasi Program Keahlian secara mandiri.
                </p>
            </div>
            <div class="w-full p-8 border-b md:w-1/2 lg:w-1/3">
                <div class="flex items-center mb-6">
                    <span class="flex items-center justify-center w-16 h-16 mx-auto text-2xl font-bold text-blue-600 rounded-full font-heading bg-blue-50">
                                    6
                    </span>
                </div>
                <p class="leading-loose text-gray-500 dark:text-gray-200 text-md">
                     Mendirikan kelas industri dan program Teaching Factory bersama IDUKA.
                </p>
            </div>
            <div class="w-full p-8 border-b md:w-1/2 lg:w-1/3 md:border-r lg:border-b-0">
                <div class="flex items-center mb-6">
                    <span class="flex items-center justify-center w-16 h-16 mx-auto text-2xl font-bold text-blue-600 rounded-full font-heading bg-blue-50">
                                    7
                    </span>
                </div>
                <p class="leading-loose text-gray-500 dark:text-gray-200 text-md">
                     Mewujudkan sarana dan prasarana pendukung yang sesuai kebutuhan pembelajaran.
                </p>
            </div>
            <div class="w-full p-8 border-b md:w-1/2 lg:border-r  lg:w-1/3 lg:border-b-0">
                <div class="flex items-center mb-6">
                    <span class="flex items-center justify-center w-16 h-16 mx-auto text-2xl font-bold text-blue-600 rounded-full font-heading bg-blue-50">
                                    8
                    </span>
                </div>
                <p class="leading-loose text-gray-500 dark:text-gray-200 text-md">
                    Menciptakan program kegiatan kewirausahaan (entrepreneur) siswa unggul (entrepreneur) yang mampu berkontribusi dalam peningkatan daya saing ekonomi kreatif nasional.
                </p>
            </div>
            <div class="w-full p-8 border-b md:w-1/2 lg:w-1/3 md:border-b-0">
                <div class="flex items-center mb-6">
                    <span class="flex items-center justify-center w-16 h-16 mx-auto text-2xl font-bold text-blue-600 rounded-full font-heading bg-blue-50">
                                    9
                    </span>
                </div>
                <p class="leading-loose text-gray-500 dark:text-gray-200 text-md">
                  Meningkatkan kemampuan SDM pendidik dan tenaga kependidikan melalui program magang guru, pelatihan/diklat, sertifikasi profesi dan kompetensi.                
                </p>
            </div>
            
        </div>
    </div>

    <!-- Daftar -->
    <div class="bg-gray-700  pb-12" id="daftar">
        <div class="pt-8 mb-6 text-center">
                <h2 class="text-white font-semibold tracking-wide text-indigo-600 uppercase">
                    Manfaat Pendaftaran di 
                </h2>
            <p class="mt-2 text-3xl font-extrabold leading-8 tracking-tight text-gray-300 dark:text-white sm:text-4xl">
                Multistudi High School
            </p>
        </div>
        <div class="flex-wrap items-center justify-center gap-8 text-center sm:flex">
            <div class="w-full px-4 py-4 mt-6 bg-white rounded-lg shadow-lg sm:w-1/2 md:w-1/2 lg:w-1/4 dark:bg-gray-800">
                <div class="flex-shrink-0">
                    <div class="flex items-center justify-center w-12 h-12 mx-auto text-white bg-indigo-500 rounded-md">
                        <svg width="20" height="20" fill="currentColor" class="w-6 h-6" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                            <path d="M491 1536l91-91-235-235-91 91v107h128v128h107zm523-928q0-22-22-22-10 0-17 7l-542 542q-7 7-7 17 0 22 22 22 10 0 17-7l542-542q7-7 7-17zm-54-192l416 416-832 832h-416v-416zm683 96q0 53-37 90l-166 166-416-416 166-165q36-38 90-38 53 0 91 38l235 234q37 39 37 91z">
                            </path>
                        </svg>
                    </div>
                </div>
                <h3 class="py-4 text-2xl font-semibold text-gray-700 sm:text-xl dark:text-white">
                    Register    
                </h3>
                <p class="py-4 text-gray-500 text-md dark:text-gray-300">
                    Pendaftaran lebih awal dan raih manfaat cicilan hingga Juli tahun ajaran baru.
                </p>
            </div>
            <div class="w-full px-4 py-4 mt-6 bg-white rounded-lg shadow-lg sm:w-1/2 md:w-1/2 lg:w-1/4 sm:mt-16 md:mt-20 lg:mt-24 dark:bg-gray-800">
                <div class="flex-shrink-0">
                    <div class="flex items-center justify-center w-12 h-12 mx-auto text-white bg-indigo-500 rounded-md">
                        <svg width="20" height="20" fill="currentColor" class="w-6 h-6" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                            <path d="M491 1536l91-91-235-235-91 91v107h128v128h107zm523-928q0-22-22-22-10 0-17 7l-542 542q-7 7-7 17 0 22 22 22 10 0 17-7l542-542q7-7 7-17zm-54-192l416 416-832 832h-416v-416zm683 96q0 53-37 90l-166 166-416-416 166-165q36-38 90-38 53 0 91 38l235 234q37 39 37 91z">
                            </path>
                        </svg>
                    </div>
                </div>
                <h3 class="py-4 text-2xl font-semibold text-gray-700 sm:text-xl dark:text-white">
                    Warranty
                </h3>
                <p class="py-4 text-gray-500 text-md dark:text-gray-300">
                    Tanpa kenaikan SPP & Gratis uang bangku, daftar ulang, dan uang pembangunan setiap tahun.
                </p>
            </div>
            <div class="w-full px-4 py-4 mt-6 bg-white rounded-lg shadow-lg sm:w-1/2 md:w-1/2 lg:w-1/4 dark:bg-gray-800">
                <div class="flex-shrink-0">
                    <div class="flex items-center justify-center w-12 h-12 mx-auto text-white bg-indigo-500 rounded-md">
                        <svg width="20" height="20" fill="currentColor" class="w-6 h-6" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                            <path d="M491 1536l91-91-235-235-91 91v107h128v128h107zm523-928q0-22-22-22-10 0-17 7l-542 542q-7 7-7 17 0 22 22 22 10 0 17-7l542-542q7-7 7-17zm-54-192l416 416-832 832h-416v-416zm683 96q0 53-37 90l-166 166-416-416 166-165q36-38 90-38 53 0 91 38l235 234q37 39 37 91z">
                            </path>
                        </svg>
                    </div>
                </div>
                <h3 class="py-4 text-2xl font-semibold text-gray-700 sm:text-xl dark:text-white">
                   Flexible
                </h3>
                <p class="py-4 text-gray-500 text-md dark:text-gray-300">
                    Mengamankan quota pendaftaran hanya dengan minimal pembayaran biaya daftar dan biaya gelombang.
                </p>
            </div>
        </div>
    </div>   
    
    <!-- Footer -->
    
<footer class="px-3 py-8 text-gray-500 transition-colors duration-200 bg-white dark:bg-gray-800 text-2 dark:text-gray-200">
    <div class="flex flex-col">
        <div class="h-px mx-auto rounded-full md:hidden mt-7 w-11">
        </div>
        <div class="flex flex-col mt-4 md:mt-0 md:flex-row">
            <nav class="flex flex-col items-center justify-center flex-1 border-gray-100 md:items-end md:border-r md:pr-5">
                <a aria-current="page" href="#" class="hover:text-gray-700 dark:hover:text-white">
                    Magang Guru Bersama : 
                </a>
                <a aria-current="page" href="#" class="hover:text-gray-700 dark:hover:text-white">
                   
                </a>
                <a aria-current="page" href="#" class="hover:text-gray-700 dark:hover:text-white">
                    Pundi Mas Berjaya
                </a>
            </nav>
            <div class="h-px mx-auto mt-4 rounded-full md:hidden w-11">
            </div>
            <div class="flex items-center justify-center flex-1 mt-4 border-gray-100 md:mt-0 md:border-r">
                <a class="hover:text-primary-gray-20" href="https://github.com/Charlie85270/tail-kit">
                    <span class="sr-only">
                        View on GitHub
                    </span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="text-xl transition-colors duration-200 hover:text-gray-800 dark:hover:text-white" viewBox="0 0 1792 1792">
                        <path d="M896 128q209 0 385.5 103t279.5 279.5 103 385.5q0 251-146.5 451.5t-378.5 277.5q-27 5-40-7t-13-30q0-3 .5-76.5t.5-134.5q0-97-52-142 57-6 102.5-18t94-39 81-66.5 53-105 20.5-150.5q0-119-79-206 37-91-8-204-28-9-81 11t-92 44l-38 24q-93-26-192-26t-192 26q-16-11-42.5-27t-83.5-38.5-85-13.5q-45 113-8 204-79 87-79 206 0 85 20.5 150t52.5 105 80.5 67 94 39 102.5 18q-39 36-49 103-21 10-45 15t-57 5-65.5-21.5-55.5-62.5q-19-32-48.5-52t-49.5-24l-20-3q-21 0-29 4.5t-5 11.5 9 14 13 12l7 5q22 10 43.5 38t31.5 51l10 23q13 38 44 61.5t67 30 69.5 7 55.5-3.5l23-4q0 38 .5 88.5t.5 54.5q0 18-13 30t-40 7q-232-77-378.5-277.5t-146.5-451.5q0-209 103-385.5t279.5-279.5 385.5-103zm-477 1103q3-7-7-12-10-3-13 2-3 7 7 12 9 6 13-2zm31 34q7-5-2-16-10-9-16-3-7 5 2 16 10 10 16 3zm30 45q9-7 0-19-8-13-17-6-9 5 0 18t17 7zm42 42q8-8-4-19-12-12-20-3-9 8 4 19 12 12 20 3zm57 25q3-11-13-16-15-4-19 7t13 15q15 6 19-6zm63 5q0-13-17-11-16 0-16 11 0 13 17 11 16 0 16-11zm58-10q-2-11-18-9-16 3-14 15t18 8 14-14z">
                        </path>
                    </svg>
                </a>
                <a class="ml-4 hover:text-primary-gray-20" href="#">
                    <span class="sr-only">
                        Settings
                    </span>
                    <svg width="30" height="30" fill="currentColor" class="text-xl transition-colors duration-200 hover:text-gray-800 dark:hover:text-white" viewBox="0 0 2048 1792" xmlns="http://www.w3.org/2000/svg">
                        <path d="M960 896q0-106-75-181t-181-75-181 75-75 181 75 181 181 75 181-75 75-181zm768 512q0-52-38-90t-90-38-90 38-38 90q0 53 37.5 90.5t90.5 37.5 90.5-37.5 37.5-90.5zm0-1024q0-52-38-90t-90-38-90 38-38 90q0 53 37.5 90.5t90.5 37.5 90.5-37.5 37.5-90.5zm-384 421v185q0 10-7 19.5t-16 10.5l-155 24q-11 35-32 76 34 48 90 115 7 11 7 20 0 12-7 19-23 30-82.5 89.5t-78.5 59.5q-11 0-21-7l-115-90q-37 19-77 31-11 108-23 155-7 24-30 24h-186q-11 0-20-7.5t-10-17.5l-23-153q-34-10-75-31l-118 89q-7 7-20 7-11 0-21-8-144-133-144-160 0-9 7-19 10-14 41-53t47-61q-23-44-35-82l-152-24q-10-1-17-9.5t-7-19.5v-185q0-10 7-19.5t16-10.5l155-24q11-35 32-76-34-48-90-115-7-11-7-20 0-12 7-20 22-30 82-89t79-59q11 0 21 7l115 90q34-18 77-32 11-108 23-154 7-24 30-24h186q11 0 20 7.5t10 17.5l23 153q34 10 75 31l118-89q8-7 20-7 11 0 21 8 144 133 144 160 0 8-7 19-12 16-42 54t-45 60q23 48 34 82l152 23q10 2 17 10.5t7 19.5zm640 533v140q0 16-149 31-12 27-30 52 51 113 51 138 0 4-4 7-122 71-124 71-8 0-46-47t-52-68q-20 2-30 2t-30-2q-14 21-52 68t-46 47q-2 0-124-71-4-3-4-7 0-25 51-138-18-25-30-52-149-15-149-31v-140q0-16 149-31 13-29 30-52-51-113-51-138 0-4 4-7 4-2 35-20t59-34 30-16q8 0 46 46.5t52 67.5q20-2 30-2t30 2q51-71 92-112l6-2q4 0 124 70 4 3 4 7 0 25-51 138 17 23 30 52 149 15 149 31zm0-1024v140q0 16-149 31-12 27-30 52 51 113 51 138 0 4-4 7-122 71-124 71-8 0-46-47t-52-68q-20 2-30 2t-30-2q-14 21-52 68t-46 47q-2 0-124-71-4-3-4-7 0-25 51-138-18-25-30-52-149-15-149-31v-140q0-16 149-31 13-29 30-52-51-113-51-138 0-4 4-7 4-2 35-20t59-34 30-16q8 0 46 46.5t52 67.5q20-2 30-2t30 2q51-71 92-112l6-2q4 0 124 70 4 3 4 7 0 25-51 138 17 23 30 52 149 15 149 31z">
                        </path>
                    </svg>
                </a>
            </div>
            <div class="h-px mx-auto mt-4 rounded-full md:hidden w-11 ">
            </div>
            <div class="flex flex-col items-center justify-center flex-1 mt-7 md:mt-0 md:items-start md:pl-5">
                <span class="">
                    © 2023
                </span>
                <span class="mt-7 md:mt-1">
                    Created by
                    <a class="underline hover:text-primary-gray-20" href="https://github.com/HenMuswara">
                        HendraMuswara
                    </a>
                </span>
            </div>
        </div>
    </div>
</footer>



    
</body>
</html>
