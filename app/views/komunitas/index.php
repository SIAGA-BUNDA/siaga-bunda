<body class="flex h-full bg-[#FCF1E6] flex-col font-sans items-center justify-center ">
  <?php require_once '../app/views/templates/navbar.php' ?>
  <div class="main w-full bg-white">
    <div class="justify-center flex items-center flex-col">
      <img src="<?= BASEURL ?>img/ikon.png" class="" alt="Komunitas">
      <h1 class="text-[#4D5A32] text-7xl">Komunitas</h1>
      <div class="justify-start flex-1 w-3/4 mt-7 items-start flex gap-4 flex-row text-start">
        <button data-modal-target="crud-modal" data-modal-toggle="crud-modal" class="bg-[#2B3440] items-center h-7 flex-[1] rounded-lg flex flex-row gap-3">
          <img src="<?= BASEURL ?>img/plus.svg" class="w-5 pl-2">
          <p class="text-white">
            Buat Postingan
          </p>
        </button>
        <!-- Main modal -->
        <div id="crud-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
          <div class="relative p-4 w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
              <!-- Modal header -->
              <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                  Buat Postingan Baru
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="crud-modal">
                  <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                  </svg>
                  <span class="sr-only">Close modal</span>
                </button>
              </div>
              <!-- Modal body -->
              <form action="<?= BASEURL ?>komunitas/tambahPostingan" method="POST" class="p-4 md:p-5">
                <div class="grid gap-4 mb-4 grid-cols-2">
                  <div class="col-span-2">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Judul Postingan</label>
                    <input type="text" name="judulPostingan" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Ketik judul postingan" required="">
                  </div>
                  <div class="col-span-2">
                    <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Isi Postingan</label>
                    <textarea id="description" name="isiPostingan" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Tulis isi postingan disini"></textarea>
                  </div>
                </div>
                <button type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                  <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path>
                  </svg>
                  Tambahkan Postingan
                </button>
              </form>
            </div>
          </div>
        </div>

        <div class="flex-[3]">
          <form class="max-w-lg mx-auto">
            <div class="flex">
              <div class="relative w-full">
                <input
                  type="search"
                  id="search-dropdown"
                  class="block h-8 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500"
                  placeholder="Search Mockups, Logos, Design Templates..."
                  required />
                <button type="submit" class="absolute top-0 end-0 p-2.5 text-sm font-medium h-full text-white  rounded-e-lg border  focus:ring-4 focus:outline-none">
                  <svg class="w-4 h-4 text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                  </svg>
                  <span class="sr-only">Search</span>
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <br>
    <div class="flex w-full flex-row">
    </div>
    <?php
    $i = 0;
    foreach ($data['postingan'] as $postingan) {

      $postingan_id = $postingan['POSTINGAN_ID'];
      echo '
        <div class="flex postingann flex-col items-center justify-center w-full">        
        <div class="postingan flex flex-col items-center justify-center p-4">
            <div class="postinganAtas flex flex-row w-full">
                <div class="profil flex-1 ">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="rounded-full bg-[#DDE4C4] w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                    </svg>

                </div>
                <div class="options flex-1 flex items-end justify-end">
                    <button>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                    </button>
                </div>
            </div>
            
            <div class="isiPostingan text-justify mt-4 w-full">
                <h2 class="font-bold underline truncate">' . $postingan['JUDUL_POSTINGAN'] . '</h2>
                <p class="truncate">' . $data['isiPostingan'][$i] . '</p>
            </div>
            
            <div class="likeComment flex flex-row w-full mt-4">
                <div class="flex-1 gap-3 flex flex-row items-start justify-start">
                <button 
                  onclick="addLike(\'' . $postingan_id . '\')" 
                  class="like flex flex-row">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" class="w-6 h-6" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                    </svg>
                    <span id="jumlah-suka-'. $postingan_id .'" class="likeCount">' . $postingan['JUMLAH_SUKA'] . '</span>
                </button>
                    <label  for="my_modal_6" class="komen flex-2 grow-1 flex  justify-start">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" class=" w-6 h-6" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 20.25c4.97 0 9-3.694 9-8.25s-4.03-8.25-9-8.25S3 7.444 3 12c0 2.104.859 4.023 2.273 5.48.432.447.74 1.04.586 1.641a4.483 4.483 0 0 1-.923 1.785A5.969 5.969 0 0 0 6 21c1.282 0 2.47-.402 3.445-1.087.81.22 1.668.337 2.555.337Z" />
                    </svg>
                    <span class="commentCount">' . $data['commentCount'][$i] . '</span>
                </label>
                </div>
                
            </div>

            <!-- POP UP KOMEN -->
            <input type="checkbox" id="my_modal_6" class="modal-toggle hidden" />
            <div class="modal" role="dialog">
            <div class="modal-box bg-white w-full h-screen p-8 rounded-xl shadow-lg relative">
            <form method="POST" action= "' . BASEURL . 'komunitas/tambahKomentar">
                <h3 class="text-lg font-thin">user yang posting</h3>
                <h3 class="text-lg font-thin">caption</h3>
                <p class="py-4 font-bold">Berikan komentar anda</p>
                <textarea name="isi_komentar" class="w-full h-72 p-5 text-sm border border-gray-300 rounded-lg resize-none mb-1" placeholder="Tulis komentar..."></textarea>
                <div class="modal-action">
                <input type="hidden" name="postingan_id" value="' . $postingan_id . '"/>
                <button type="submit" class="btn bg-[#2B3440] flex items-center justify-center rounded-3xl m-0 hover:bg-[#1F2933] hover:border-[#1F2933] hover:text-white">
                  Submit
                </button>
                <label for="my_modal_6" class="btn flex rounded-3xl m-0 hover:bg-[#2B3440] hover:border-[#2B3440] hover:text-[#2B3440]">Close</label>
                </div>
                </form>
            </div>
            </div>
    </div>
</div> <br>
        ';
      $i++;
    }
    ?>
  </div>
</body>
<style>
  .postingan {
    background-color: #D1D1D1;
    width: 75%;
  }

  ;

  .isiPostingan {
    width: 75%;
  }

  .main {
    width: 95%;
  }
</style>
