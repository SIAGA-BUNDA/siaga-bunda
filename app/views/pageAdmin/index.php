
<body class="h-full bg-[#FCF1E6] font-sans overflow-hidden">
  <!-- Header -->
  <header class="bg-white shadow-md p-4 flex justify-between items-center rounded-xl mx-6 mb-4">
  
    <!-- Profil Admin -->
  <div class="flex items-center gap-3">
    <div class="bg-[#585858] text-white rounded-full py-3 px-3 flex space-x-3 items-center hover:cursor-pointer">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-[var(--text-color)]">
        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 5.25a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" />
        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 20.25v-2.047a7.501 7.501 0 0115 0v2.047" />
      </svg>
    </div>
    <div>
      <p class="text-sm font-medium text-[#4D5A32]">Admin <?=$data['username']?></p>
      <p class="text-xs text-gray-500"><?=$data['role']?></p>
    </div>


      <!-- Tanggal -->
      <div class="flex items-start mx-5 border-2 p-3 rounded-full bg-gray-200">
        <div class="text-[#4D5A32]">
          <p id="current-date" class="text-sm font-medium"></p>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Logo -->
    <img src="img/logo.png" alt="Logo Siaga Bunda" class="w-16 h-18">
</header>



  <!-- Main Content -->
  <div class="flex min-h-screen">
    <div class="flex flex-col gap-4 p-6 w-1/3">
      <!-- Sidebar -->
      <aside class="bg-white rounded-xl shadow-md w-full p-5 flex-shrink-0">
        <h2 class="text-lg font-medium text-[#4D5A32] mb-2">Selamat datang kembali</h2>
        <p class="text-xl font-bold text-[#4D5A32] mb-10">Admin <?= $data['username'] ?></p>
        <div class="bg-gray-100 p-3 rounded-xl">
          <ul class="space-y-3">
            <li onclick="showContent('tambah-artikel'); setActiveMenu(this)"
              class="flex items-center gap-2 text-[#4D5A32] hover:text-green-950 cursor-pointer">
              ➤ Tambahkan artikel
            </li>
            <li onclick="showContent('lihat-artikel'); setActiveMenu(this)"
              class="flex items-center gap-2 text-[#4D5A32] hover:text-green-950 cursor-pointer">
              ➤ Lihat semua artikel
            </li>
            <li onclick="showContent('laporan'); setActiveMenu(this)"
              class="flex items-center gap-2 text-[#4D5A32] hover:text-green-950 cursor-pointer">
              ➤ Laporan
            </li>
            <li onclick="showContent('data-user'); setActiveMenu(this)"
              class="flex items-center gap-2 text-[#4D5A32] hover:text-green-950 cursor-pointer">
              ➤ Data user
            </li>
          </ul>
        </div>
      </aside>

      <!-- Tombol ke landing page -->
      <footer class="w-full gap-4 mt-5 flex-shrink-0">
        <div class="bg-white rounded-xl shadow-md p-10 text-center">
          <a href="<?= BASEURL ?>home" class="text-[#4D5A32] font-medium hover:underline">
            Menuju halaman utama ➤
          </a>
        </div>
      </footer>
    </div>

    <!-- Content Section -->
    <div id="tambah-artikel" class="content-section hidden w-full">
      <main class="flex-1 bg-white rounded-xl shadow-md p-8">
        <div class="bg-[#C1CFA1] rounded-xl border-[#C1CFA1] border-2 py-3">
          <form action="<?=BASEURL?>pageAdmin/tambahArtikel" method="POST" enctype="multipart/form-data">
            <h2 class="text-lg text-center font-medium text-[#4D5A32] mb-4">Tambahkan artikel baru</h2>
            <div class="border-[#C1CFA1]">
              <!-- Judul Artikel -->
              <input 
                type="text" 
                name="judul_artikel" 
                placeholder="  Buat judul artikel..." 
                class="w-full my-0 border-b border-[#C1CFA1] text-sm p-2 outline-none"
                required>

              <!-- Drag and Drop Image Upload -->
              <div 
                id="drop-area" 
                class="relative flex flex-col items-center justify-center w-full h-48 border-[#C1CFA1] border-2 bg-gray-50 my-4">
                <input 
                  type="file" 
                  name="image" 
                  id="file-input" 
                  class="absolute inset-0 opacity-0 cursor-pointer" 
                  accept=".jpg,.jpeg,.png,.gif,.svg" 
                  onchange="previewFile(event)" 
                  required>
                <div id="drop-message" class="text-center">
                  <div class="flex justify-center items-center rounded-full">
                    <i class="fa-solid fa-cloud-arrow-up text-4xl text-gray-600"></i>
                  </div>
                  <p class="mt-3 text-sm text-gray-500">Click to upload or drag and drop</p>
                  <p class="text-xs text-gray-400">SVG, PNG, JPG or GIF (MAX 800x400px)</p>
                </div>
                  <img id="preview" class="hidden absolute inset-0 object-contain w-full h-full z-0" />
              </div>

              <!-- Isi Artikel -->
              <textarea 
                name="isi_artikel" 
                placeholder="  Ketik artikel anda di sini..." 
                rows="10" 
                class="w-full my-0 border-b border-[#C1CFA1] text-sm p-2 outline-none resize-none"
                required>
              </textarea>

              <!-- Submit Button -->
              <div class="flex justify-center items-center">
                <button 
                  type="submit" 
                  class="bg-white text-[#4D5A32] py-2 px-4 rounded-full shadow-lg hover:bg-green-950 hover:text-white">
                  Kirim
                </button>
              </div>
            </div>
          </form>
        </div>
      </main>
    </div>
      <!-- Lihat Semua Artikel -->
      <div id="lihat-artikel" class="content-section hidden w-full">
        <main class="flex-1 bg-white rounded-xl shadow-md p-8">
          <div class="overflow-x-auto mt-6">
            <table class="min-w-full border-collapse border border-gray-300 rounded-lg bg-white">
              <thead class="bg-gray-100">
                <tr>
                  <th class="border border-gray-300 px-4 py-2 text-left text-sm font-medium text-gray-600">ID</th>
                  <th class="border border-gray-300 px-4 py-2 text-left text-sm font-medium text-gray-600">Judul Artikel</th>
                  <th class="border border-gray-300 px-4 py-2 text-left text-sm font-medium text-gray-600">Isi Artikel</th>
                  <th class="border border-gray-300 px-4 py-2 text-left text-sm font-medium text-gray-600">Waktu</th>
                  <th class="border border-gray-300 px-4 py-2 text-left text-sm font-medium text-gray-600">Status</th>
                  <th class="border border-gray-300 px-4 py-2 text-left text-sm font-medium text-gray-600">Action</th>
                </tr>
              </thead>
    <t>
    <?php
$i = 0;
// Loop untuk menampilkan setiap artikel
foreach ($data['artikel'] as $artikel) {
    $artikel_id = $artikel['ARTIKEL_ID'];
?>
    <tr>
        <td><?= $artikel['ARTIKEL_ID'] ?></td>
        <td><?= $artikel['JUDUL_ARTIKEL'] ?></td>
        <td><?= $data['isi'][$i] ?></td>
        <td><?= $artikel['WAKTU'] ?></td>
        <td><?= $artikel['STATUS'] ?></td>
        <td>
            <!-- Use a unique ID for each modal -->
            <button data-modal-target="popup-modal-<?= $artikel_id ?>" 
                    data-modal-toggle="popup-modal-<?= $artikel_id ?>" 
                    class="block text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800" 
                    type="button">
                    Delete
                  </button>

                  <!-- Unique modal for each article -->
                  <div id="popup-modal-<?= $artikel_id ?>" tabindex="-1"
                    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                    <div class="relative p-4 w-full max-w-md max-h-full">
                      <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                        <button type="button"
                          class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                          data-modal-hide="popup-modal-<?= $artikel_id ?>">
                          <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                          </svg>
                          <span class="sr-only">Close modal</span>
                        </button>
                        <div class="p-4 md:p-5 text-center">
                          <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                          </svg>
                          <h3 class="mb-2 text-lg font-normal text-gray-500 dark:text-gray-400">Are you sure you want to
                            delete this article?</h3>
                          <p class="mb-5 text-md font-normal text-gray-500 dark:text-gray-400">Artikel yang dihapus tidak
                            dapat dikembalikan!</p>

                          <form method="POST" action="<?= BASEURL ?>pageAdmin/hapusArtikel">
                            <input type="hidden" name="ARTIKEL_ID" value="<?= $artikel_id ?>">
                            <button type="submit"
                              class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                              Yes, I'm sure
                            </button>
                            <button data-modal-hide="popup-modal-<?= $artikel_id ?>" type="button"
                              class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                              No, cancel
                            </button>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </td>
              </tr>
              <?php
              $i++;
            }
            ?>
            </tbody>
        </table>

    </main>
  </div>

  <!-- Laporan user -->
  <div id="laporan" class="content-section hidden w-full">
    <main class="flex-1 bg-white rounded-xl shadow-md p-8">
      <div class="overflow-x-auto mb-10 max-h-[375px]">
        <table class="min-w-full border-collapse border border-gray-300 rounded-lg bg-white">
          <thead class="bg-gray-100">
            <tr>
              <th class="border border-gray-300 px-4 py-2 text-left text-sm font-medium text-gray-600">ID Laporan</th>
              <th class="border border-gray-300 px-4 py-2 text-left text-sm font-medium text-gray-600">Isi laporan</th>
              <th class="border border-gray-300 px-4 py-2 text-left text-sm font-medium text-gray-600">Isi Postingan
              </th>
              <th class="border border-gray-300 px-4 py-2 text-left text-sm font-medium text-gray-600">Waktu</th>
              <th class="border border-gray-300 px-4 py-2 text-left text-sm font-medium text-gray-600">Action</th>
              <th class="border border-gray-300 px-4 py-2 text-left text-sm font-medium text-gray-600">Status</th>
            </tr>
          </thead>

          <tbody>
            <!-- dummy data -->
            <?php
            $i = 0;
            foreach ($data['laporanPostingan'] as $laporan) {
              $postingan_id = $laporan['POSTINGAN_ID'];
              echo '<tr>';
              echo '<td class="border border-gray-300 px-4 py-2 text-sm text-gray-800">' . $laporan['LAPORAN_ID'];
              echo '</td>';
              echo '<td class="border border-gray-300 px-4 py-2 text-sm text-gray-800">' . $laporan['ISI_LAPORAN'];
              echo '</td>';
              echo '<td class="border border-gray-300 px-4 py-2 text-sm text-gray-800">' . $data['isiPostingan'][$i];
              echo '</td>';
              echo '<td class="border border-gray-300 px-4 py-2 text-sm text-gray-800">' . $laporan['WAKTU'];
              echo '</td><td class="border border-gray-300 px-5 py-2 text-sm text-gray-800 flex items-center justify-center">'; ?>
              <button data-modal-target="popup-modal-<?= $postingan_id ?>"
                data-modal-toggle="popup-modal-<?= $postingan_id ?>"
                class="block mr-3 text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-3 py-1.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800"
                type="button">
                Delete
              </button>
              <form method="post" action="<?= BASEURL ?>pageAdmin/ignoreLaporanPostingan">
                <input type="hidden" name="postingan_id" value="<?= $postingan_id ?>">
                <button type="submit"
                  class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-1.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800"
                  type="button">
                  Ignore
                </button>
              </form>

              <!-- Unique modal for each article -->
              <div id="popup-modal-<?= $postingan_id ?>" tabindex="-1"
                class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative p-4 w-full max-w-md max-h-full">
                  <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <button type="button"
                      class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                      data-modal-hide="popup-modal-<?= $postingan_id ?>">
                      <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                      </svg>
                      <span class="sr-only">Close modal</span>
                    </button>
                    <div class="p-4 md:p-5 text-center">
                      <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                      </svg>
                      <h3 class="mb-2 text-lg font-normal text-gray-500 dark:text-gray-400">Are you sure you want to
                        delete this komentar?</h3>

                      <form method="POST" action="<?= BASEURL ?>pageAdmin/hapusLaporanPostingan">
                        <input type="hidden" name="postingan_id" value="<?= $postingan_id ?>">
                        <button type="submit"
                          class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                          Yes, I'm sure
                        </button>
                        <button data-modal-hide="popup-modal-<?= $postingan_id ?>" type="button"
                          class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                          No, cancel
                        </button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              <?php

              echo '<td class="border border-gray-300 px-4 py-2 text-sm text-gray-800">' . $laporan['STATUS_LAPORAN'];
              echo '</td>';
              echo '</tr>';
              $i++;
            }
            ?>
          </tbody>
        </table>
      </div>
      <div class="overflow-x-auto max-h-[375px]">
        <table class="min-w-full border-collapse border border-gray-300 rounded-lg bg-white">
          <thead class="bg-gray-100">
            <tr>
              <th class="border border-gray-300 px-4 py-2 text-left text-sm font-medium text-gray-600">ID Laporan</th>
              <th class="border border-gray-300 px-4 py-2 text-left text-sm font-medium text-gray-600">Isi laporan</th>
              <th class="border border-gray-300 px-4 py-2 text-left text-sm font-medium text-gray-600">Isi Komentar</th>
              <th class="border border-gray-300 px-4 py-2 text-left text-sm font-medium text-gray-600">Waktu</th>
              <th class="border border-gray-300 px-4 py-2 text-left text-sm font-medium text-gray-600">Action</th>
              <th class="border border-gray-300 px-4 py-2 text-left text-sm font-medium text-gray-600">Status</th>
            </tr>
          </thead>

          <tbody>
            <!-- dummy data -->
            <?php
            $i = 0;
            foreach ($data['laporanKomentar'] as $laporan) {
              $komentar_id = $laporan['KOMENTAR_ID'];
              echo '<tr>';
              echo '<td class="border border-gray-300 px-4 py-2 text-sm text-gray-800">' . $laporan['LAPORAN_ID'];
              echo '</td>';
              echo '<td class="border border-gray-300 px-4 py-2 text-sm text-gray-800">' . $laporan['ISI_LAPORAN'];
              echo '</td>';
              echo '<td class="border border-gray-300 px-4 py-2 text-sm text-gray-800">' . $data['isiKomentar'][$i];
              echo '</td>';
              echo '<td class="border border-gray-300 px-4 py-2 text-sm text-gray-800">' . $laporan['WAKTU'];
              echo '</td><td class="border border-gray-300 px-5 py-2 text-sm text-gray-800 flex items-center justify-center">'; ?>
              <button data-modal-target="popup-modal-<?= $komentar_id ?>"
                data-modal-toggle="popup-modal-<?= $komentar_id ?>"
                class="block mr-3 text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-3 py-1.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800"
                type="button">
                Delete
              </button>
              <form method="post" action="<?= BASEURL ?>pageAdmin/ignoreLaporanKomentar">
                <input type="hidden" name="komentar_id" value="<?= $komentar_id ?>">
                <button type="submit"
                  class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-1.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800"
                  type="button">
                  Ignore
                </button>
              </form>

              <!-- Unique modal for each article -->
              <div id="popup-modal-<?= $komentar_id ?>" tabindex="-1"
                class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative p-4 w-full max-w-md max-h-full">
                  <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <button type="button"
                      class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                      data-modal-hide="popup-modal-<?= $komentar_id ?>">
                      <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                      </svg>
                      <span class="sr-only">Close modal</span>
                    </button>
                    <div class="p-4 md:p-5 text-center">
                      <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                      </svg>
                      <h3 class="mb-2 text-lg font-normal text-gray-500 dark:text-gray-400">Are you sure you want to
                        delete this komentar?</h3>

                      <form method="POST" action="<?= BASEURL ?>pageAdmin/hapusLaporanKomentar">
                        <input type="hidden" name="komentar_id" value="<?= $komentar_id ?>">
                        <button type="submit"
                          class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                          Yes, I'm sure
                        </button>
                        <button data-modal-hide="popup-modal-<?= $komentar_id ?>" type="button"
                          class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                          No, cancel
                        </button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              <?php

              echo '<td class="border border-gray-300 px-4 py-2 text-sm text-gray-800">' . $laporan['STATUS_LAPORAN'];
              echo '</td>';
              echo '</tr>';
              $i++;
            }
            ?>
          </tbody>
        </table>
      </div>
    </main>
  </div>

  <!-- Tabel data User -->
  <div id="data-user" class="content-section hidden w-full">
    <main class="flex-1 bg-white rounded-xl shadow-md p-8">
      <div class="overflow-x-auto mt-6">
        <table class="min-w-full border-collapse border border-gray-300 rounded-lg bg-white">
          <thead class="bg-gray-100">
            <tr>
              <th class="border border-gray-300 px-4 py-2 text-left text-sm font-medium text-gray-600">Nama</th>
              <th class="border border-gray-300 px-4 py-2 text-left text-sm font-medium text-gray-600">Email</th>
              <th class="border border-gray-300 px-4 py-2 text-left text-sm font-medium text-gray-600">Tanggal Lahir
              </th>
              <th class="border border-gray-300 px-4 py-2 text-left text-sm font-medium text-gray-600">No. Telepon</th>
              <th class="border border-gray-300 px-4 py-2 text-left text-sm font-medium text-gray-600">LMP</th>
              <th class="border border-gray-300 px-4 py-2 text-left text-sm font-medium text-gray-600">Tinggi Badan</th>
            </tr>
          </thead>

          <tbody>
            <?php
            foreach ($data['user'] as $user) {
              echo '<tr>';
              echo '<td class="border border-gray-300 px-4 py-2 text-sm text-gray-600">';
              echo $user['NAMA'] . '</td>';
              echo '<td class="border border-gray-300 px-4 py-2 text-sm text-gray-600">';
              echo $user['EMAIL'] . '</td>';
              echo '<td class="border border-gray-300 px-4 py-2 text-sm text-gray-600">';
              echo $user['TANGGAL_LAHIR'] . '</td>';
              echo '<td class="border border-gray-300 px-4 py-2 text-sm text-gray-600">';
              echo $user['LMP'] . '</td>';
              echo '<td class="border border-gray-300 px-4 py-2 text-sm text-gray-600">';
              echo $user['NO_TELEPON'] . '</td>';
              echo '<td class="border border-gray-300 px-4 py-2 text-sm text-gray-600">';
              echo $user['TINGGI_BADAN'] . '</td>';
              echo '</tr>';

            }


            ?>
          </tbody>
        </table>
      </div>
    </main>
  </div>
  </div>
  </div>

  <script>
    // tanggal real-time
    function updateDate() {
      const options = { day: 'numeric', month: 'short', year: 'numeric' };
      const now = new Date();
      const formattedDate = now.toLocaleDateString('id-ID', options);
      document.getElementById('current-date').textContent = formattedDate;
    }
    updateDate();
    
    //preview img
    function previewFile(event) {
    const file = event.target.files[0];
    const preview = document.getElementById('preview');

    // Show the image preview if file is selected
    if (file) {
      const reader = new FileReader();

      reader.onload = function() {
        preview.src = reader.result;
        preview.classList.remove('hidden'); // Show the image preview
      }

      reader.readAsDataURL(file);
        } else {
          preview.classList.add('hidden'); // Hide the image preview if no file selected
        }
      }
  </script>
</body>