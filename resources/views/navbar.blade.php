
        <div class="fixed text-white w-full sm:flex sm:justify-center bg-gray-700 z-10 sm:items-center h-16 bg-dots-darker  bg-gray-700 dark:bg-dots-lighter selection:bg-red-500 selection:text-white ">
         
                <div class="sm:fixed sm:top-0 sm:left-0 p-6 text-center  z-10">
                  
                        <a href="/kelas" class="p-6 font-semibold text-gray-400 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-200"> Kelas </a>
               
                        <a href="/siswa" class="p-6  font-semibold text-gray-400 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-200"> Siswa</a>

                        <a href="/guru" class="p-6  font-semibold text-gray-400 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-200"> Guru </a>
                       
                        <a href="/mapel" class="p-6  font-semibold text-gray-400 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-200"> Mapel </a>
                       
                        <a href="/jadwal" class="p-6  font-semibold text-gray-400 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-200"> Jadwal </a>
                       
                        <a href="/nilai" class="p-6  font-semibold text-gray-400 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-200"> Nilai </a>

                        <a href="/pengembangan" class="p-6  font-semibold text-gray-400 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-200"> Pengembangan </a>
                       
                        <a href="/user" class="p-6  font-semibold text-gray-400 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-200"> User </a>
                       
                        <a href="/logout" class="p-6  font-semibold text-gray-400 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-200"> Logout </a>

                   
               
                </div>
                <div class="sm:fixed  sm:top-0 sm:right-0 p-6 text-center z-10">
                       Welcome,<b> {{Auth::user()->name}} </b>
                </div>
                
    
        
        </div>


