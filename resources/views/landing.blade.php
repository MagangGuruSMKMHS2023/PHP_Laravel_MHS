<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
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
            <div>
                <div class="max-w-xs h-96 flex flex-col justify-between  dark:bg-gray-800 bg-cyan-300  mb-6 py-5 px-4 ">
                    <div>
                        <h4 tabindex="0" class="focus:outline-none text-gray-800 dark:text-gray-100 font-bold mb-3">Pengembangan Perangkat Lunak dan Gim</h4>
                        <p tabindex="0" class="focus:outline-none text-gray-800 dark:text-gray-100 text-sm">Mewujudkan program komputer yang relevan dengan kebutuhan masyarakat menjadi salah satu goals dari para lulusan program studi Rekayasa Perangkat Lunak. Siswa(i) akan secara aktif mempelajari dan melaksanakan praktek yang dimulai dari algoritma computer hingga bahasa pemograman. Tak hanya pembuatan, dalam lingkungan Rekayasa Perangkat Lunak juga akan berfokus pada pemeliharaan dan manajemen organisasi serta kualitas perangkat lunak melalui pendekatan-pendekatan yang akan diterima dari para tenaga pendidik professional.</p>
                    </div>

                </div>
            </div>

            <div>
                <div class="max-w-xs h-96 flex flex-col justify-between bg-rose-300  dark:bg-gray-800  mb-6 py-5 px-4 ">
                    <div>
                        <h4 tabindex="0" class="focus:outline-none text-gray-800 dark:text-gray-100 font-bold mb-3">Akuntansi Keuangan Lembaga</h4>
                        <p tabindex="0" class="focus:outline-none text-gray-800 dark:text-gray-100 text-sm">Menjadi jantung dari perputaran operasional sebuah perusahaan adalah salah satu visi para penikmat program studi Akuntansi. Laporan keuangan hasil dari para lulusan akuntansi akan menjadi bahan evaluasi dalam pengambilan langkah selanjutnya. Melangkah kedalam proses tersebut, para siswa(i) diharapkan mampu memaksimalkan potensi diri melalui berbagai aspek pelajaran dan praktek serta IFRS (International Financial Reporting System) yang akan diadopsi oleh Multistudi High School.</p>
                    </div>
                </div>
            </div>

            <div>
                <div class="max-w-xs h-96 flex flex-col justify-between bg-emerald-300 dark:bg-gray-800  mb-6 py-5 px-4 ">
                    <div>
                        <h4 tabindex="0" class="focus:outline-none text-gray-800 dark:text-gray-100 font-bold mb-3">Desain Komunikasi Visual</h4>
                        <p tabindex="0" class="focus:outline-none text-gray-800 dark:text-gray-100 text-sm">Serba terdigitalisasi menjadikan para pelaku yang berkecimpung dalam dunia multimedia menjadi pemenangnya. Perubahan besar telah hadir ditengah masyarakat sehingga kebutuhan akan sumber daya manusia dalam bidang ini akan menjadi semakin tinggi. Para siswa(i) dituntun untuk aktif dalam mempelajari segala yang berkenaan dari produksi video, desain grafis, fotografi, bahkan animasi computer. Proses tersebut bertujuan untuk memaksimalkan media untuk penyampaian informasi kepada publik.</p>
                    </div>
                </div>
            </div>

            <div>
                <div class="max-w-xs h-96 flex flex-col justify-between bg-violet-300 dark:bg-gray-800  mb-6 py-5 px-4 ">
                    <div>
                        <h4 tabindex="0" class="focus:outline-none text-gray-800 dark:text-gray-100 font-bold mb-3">Teknik Jaringan Komputer dan Telekomunikasi</h4>
                        <p tabindex="0" class="focus:outline-none text-gray-800 dark:text-gray-100 text-sm">Antusias terhadap seluk beluk perangkat computer serta operating systemnya dapat menjadi langkah awal bagi para siswa(i) memilih program studi Teknik Komputer dan Jaringan.
                                Mendalami ilmu dan praktek dalam dunia teknologi menjadikan nilai yang akan kian mahal pada masa yang akan datang. Keahlian tambahan seperti penguasaan Microsoft Office akan diberikan dalam berlangsungnya proses pembelajaran selama berada di Multistudi High School.
                                Berani menjadi salah satu yang berperan dalam proses transformasi digital di Indonesia?</p>
                    </div>
                </div>
            </div>
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
      
    <script>
        // Top menu
            const MenuHandler = (flag) => {
                if (flag) {
                    document.getElementById("list").classList.add("top-100");
                    document.getElementById("list").classList.remove("hidden");
                    document.getElementById("close").classList.remove("hidden");
                    document.getElementById("open").classList.add("hidden");
                } else {
                    document.getElementById("list").classList.remove("top-100");
                    document.getElementById("list").classList.add("hidden");
                    document.getElementById("close").classList.add("hidden");
                    document.getElementById("open").classList.remove("hidden");
                }
            };
    </script>
</body>
</html>
