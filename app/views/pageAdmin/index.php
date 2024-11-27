

<body class="h-full bg-[#C1CFA1] font-sans overflow-hidden">
  <!-- Header -->
  <header class="bg-white shadow-md p-4 flex justify-between items-center rounded-xl mx-6 my-4">
  
    <!-- Profil Admin -->
  <div class="flex items-center gap-3">
    <div class="w-10 h-10 bg-[#DDE4C4] flex justify-center items-center rounded-full">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-[var(--text-color)]">
        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 5.25a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" />
        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 20.25v-2.047a7.501 7.501 0 0115 0v2.047" />
      </svg>
    </div>
    <div>
      <p class="text-sm font-medium text-[#4D5A32]">Admin-kun</p>
      <p class="text-xs text-gray-500">Scrum Master</p>
    </div>

    <!-- Tanggal -->
    <div class="flex items-start mx-5 border-2 p-3 rounded-full bg-gray-200">
        <div class="text-[#4D5A32]">
            <p id="current-date" class="text-sm font-medium"></p>
        </div>
    </div>
  </div>
  
  <!-- Logo -->
    <img src="img/logo.png" alt="Logo Siaga Bunda" class="w-14 h-14">
</header>


  <!-- Main Content -->
  <div class="flex min-h-screen">
    <div class="flex flex-col gap-4 p-6 w-1/3">
      <!-- Sidebar -->
      <aside class="bg-white rounded-xl shadow-md w-full p-5 flex-shrink-0">
        <h2 class="text-lg font-medium text-[#4D5A32] mb-2">Selamat datang kembali</h2>
        <p class="text-xl font-bold text-[#4D5A32] mb-10">Admin-kun</p>
        <div class="bg-gray-100 p-3 rounded-xl">
          <ul class="space-y-3">
            <li onclick="showContent('tambah-artikel'); setActiveMenu(this)" class="flex items-center gap-2 text-[#4D5A32] hover:text-green-950 cursor-pointer">
              ➤ Tambahkan artikel
            </li>
            <li onclick="showContent('lihat-artikel'); setActiveMenu(this)" class="flex items-center gap-2 text-[#4D5A32] hover:text-green-950 cursor-pointer">
              ➤ Lihat semua artikel
            </li>
            <li onclick="showContent('laporan'); setActiveMenu(this)" class="flex items-center gap-2 text-[#4D5A32] hover:text-green-950 cursor-pointer">
              ➤ Laporan
            </li>
            <li onclick="showContent('data-user'); setActiveMenu(this)" class="flex items-center gap-2 text-[#4D5A32] hover:text-green-950 cursor-pointer">
              ➤ Data user
            </li>
          </ul>
        </div>
      </aside>

      <!-- Tombol ke landing page -->
      <footer class="w-full gap-4 mt-5 flex-shrink-0">
        <div class="bg-white rounded-xl shadow-md p-10 text-center">
          <a href="#" class="text-[#4D5A32] font-medium hover:underline">
            Menuju halaman utama ➤
          </a>
        </div>
      </footer>
    </div>

    <!-- Content Section -->
    <div class="flex gap-4 p-6 w-full">
      <!-- Tambah artikel -->
      <div id="tambah-artikel" class="content-section hidden w-full">
        <main class="flex-1 bg-white rounded-xl shadow-md p-8">
          <div class="bg-[#C1CFA1] rounded-xl border-[#C1CFA1] border-2 py-3 h-full">
            <h2 class="text-lg text-center font-medium text-[#4D5A32] mb-4">Tambahkan artikel baru</h2>
            <div class="border-[#C1CFA1]">
              <input type="text" placeholder="  Buat judul artikel..." class="w-full my-0 border-b border-color text-sm p-2  outline-none">
              <textarea placeholder="  Ketik artikel anda di sini..." rows="10" class="w-full my-0 border-b border-color text-sm p-2 outline-none resize-none"></textarea>
              <div class="flex justify-center items-center ">
                <button class="bg-[#4D5A32] text-white py-2 px-4 rounded-full shadow-lg hover:bg-green-950">
                  Kirim
                </button>
              </div>
            </div>
          </div>
        </main>
      </div>

      <!-- Lihat Semua Artikel -->
      <div id="lihat-artikel" class="content-section hidden w-full">
        <main class="flex-1 bg-white rounded-xl shadow-md p-8">
          <h2 class="text-lg text-[#4D5A32] font-medium mb-4">Semua Artikel</h2>
          <ul class="list-disc pl-5">
            <li>Artikel 1</li>
            <li>Artikel 2</li>
            <li>Artikel 3</li>
          </ul>
        </main>
      </div>

      <!-- Laporan user -->
      <div id="laporan" class="content-section hidden w-full">
        <main class="flex-1 bg-white rounded-xl shadow-md p-8">
          <div class="overflow-x-auto max-h-[375px]">
            <table class="min-w-full border-collapse border border-gray-300 rounded-lg bg-white">
              <thead class="bg-gray-100">
                <tr>
                  <th class="border border-gray-300 px-4 py-2 text-left text-sm font-medium text-gray-600">ID Laporan</th>
                  <th class="border border-gray-300 px-4 py-2 text-left text-sm font-medium text-gray-600">Isi laporan</th>
                  <th class="border border-gray-300 px-4 py-2 text-left text-sm font-medium text-gray-600">Waktu</th>
                  <th class="border border-gray-300 px-4 py-2 text-left text-sm font-medium text-gray-600">Action</th>
                  <th class="border border-gray-300 px-4 py-2 text-left text-sm font-medium text-gray-600">Status</th>
                </tr>
              </thead>

              <tbody>
                <!-- dummy data -->
                <tr>
                  <td class="border border-gray-300 px-4 py-2 text-sm text-gray-800">001</td>
                  <td class="border border-gray-300 px-4 py-2 text-sm text-gray-800">komennya rasis banget cik</td>
                  <td class="border border-gray-300 px-4 py-2 text-sm text-gray-800">2024-11-25 | 09:45</td>
                  <td class="border border-gray-300 px-4 py-2 text-sm text-gray-800">
                    <button class="text-blue-600 hover:underline">Delete</button> | 
                    <button class="text-blue-600 hover:underline">Ignore</button>
                  </td>
                  <td class="border border-gray-300 px-4 py-2 text-sm text-gray-800">Pending</td>
                </tr>
                <tr>
                  <td class="border border-gray-300 px-4 py-2 text-sm text-gray-800">002</td>
                  <td class="border border-gray-300 px-4 py-2 text-sm text-gray-800">postingannya 4no banget loh min</td>
                  <td class="border border-gray-300 px-4 py-2 text-sm text-gray-800">2024-11-24 14:30</td>
                  <td class="border border-gray-300 px-4 py-2 text-sm text-gray-800">
                    <button class="text-blue-600 hover:underline">Delete</button> | 
                    <button class="text-blue-600 hover:underline">Ignore</button>
                  </td>
                  <td class="border border-gray-300 px-4 py-2 text-sm text-gray-800">On-going</td>
                </tr>
                <tr>
                  <td class="border border-gray-300 px-4 py-2 text-sm text-gray-800">003</td>
                  <td class="border border-gray-300 px-4 py-2 text-sm text-gray-800">komennya minta dikewer-kewer</td>
                  <td class="border border-gray-300 px-4 py-2 text-sm text-gray-800">2024-11-23 10:15</td>
                  <td class="border border-gray-300 px-4 py-2 text-sm text-gray-800">
                    <button class="text-blue-600 hover:underline">Delete</button> | 
                    <button class="text-blue-600 hover:underline">Ignore</button>
                  </td>
                  <td class="border border-gray-300 px-4 py-2 text-sm text-gray-800">Processed</td>
                </tr>
                <tr>
                  <td class="border border-gray-300 px-4 py-2 text-sm text-gray-800">004</td>
                  <td class="border border-gray-300 px-4 py-2 text-sm text-gray-800">nigger undayo</td>
                  <td class="border border-gray-300 px-4 py-2 text-sm text-gray-800">2024-11-22 08:20</td>
                  <td class="border border-gray-300 px-4 py-2 text-sm text-gray-800">
                    <button class="text-blue-600 hover:underline">Delete</button> | 
                    <button class="text-blue-600 hover:underline">Ignore</button>
                  </td>
                  <td class="border border-gray-300 px-4 py-2 text-sm text-gray-800">Pending</td>
                </tr>
                <tr>
                  <td class="border border-gray-300 px-4 py-2 text-sm text-gray-800">005</td>
                  <td class="border border-gray-300 px-4 py-2 text-sm text-gray-800">xeyla rasis</td>
                  <td class="border border-gray-300 px-4 py-2 text-sm text-gray-800">2024-11-21 19:50</td>
                  <td class="border border-gray-300 px-4 py-2 text-sm text-gray-800">
                    <button class="text-blue-600 hover:underline">Delete</button> | 
                    <button class="text-blue-600 hover:underline">Ignore</button>
                  </td>
                  <td class="border border-gray-300 px-4 py-2 text-sm text-gray-800">Processed</td>
                </tr>
                <tr>
                  <td class="border border-gray-300 px-4 py-2 text-sm text-gray-800">006</td>
                  <td class="border border-gray-300 px-4 py-2 text-sm text-gray-800">komennya agak laen loh wak</td>
                  <td class="border border-gray-300 px-4 py-2 text-sm text-gray-800">2024-11-20 15:10</td>
                  <td class="border border-gray-300 px-4 py-2 text-sm text-gray-800">
                    <button class="text-blue-600 hover:underline">Delete</button> | 
                    <button class="text-blue-600 hover:underline">Ignore</button>
                  </td>
                  <td class="border border-gray-300 px-4 py-2 text-sm text-gray-800">On-going</td>
                </tr>
                <tr>
                  <td class="border border-gray-300 px-4 py-2 text-sm text-gray-800">007</td>
                  <td class="border border-gray-300 px-4 py-2 text-sm text-gray-800">ashiaappp</td>
                  <td class="border border-gray-300 px-4 py-2 text-sm text-gray-800">2024-11-19 22:05</td>
                  <td class="border border-gray-300 px-4 py-2 text-sm text-gray-800">
                    <button class="text-blue-600 hover:underline">Delete</button> | 
                    <button class="text-blue-600 hover:underline">Ignore</button>
                  </td>
                  <td class="border border-gray-300 px-4 py-2 text-sm text-gray-800">Pending</td>
                </tr>
                <tr>
                  <td class="border border-gray-300 px-4 py-2 text-sm text-gray-800">008</td>
                  <td class="border border-gray-300 px-4 py-2 text-sm text-gray-800">tegak becek sampai 2 periode</td>
                  <td class="border border-gray-300 px-4 py-2 text-sm text-gray-800">2024-11-18 07:35</td>
                  <td class="border border-gray-300 px-4 py-2 text-sm text-gray-800">
                    <button class="text-blue-600 hover:underline">Delete</button> | 
                    <button class="text-blue-600 hover:underline">Ignore</button>
                  </td>
                  <td class="border border-gray-300 px-4 py-2 text-sm text-gray-800">Processed</td>
                </tr>
                <tr>
                  <td class="border border-gray-300 px-4 py-2 text-sm text-gray-800">009</td>
                  <td class="border border-gray-300 px-4 py-2 text-sm text-gray-800">pilih pramono</td>
                  <td class="border border-gray-300 px-4 py-2 text-sm text-gray-800">2024-11-17 13:40</td>
                  <td class="border border-gray-300 px-4 py-2 text-sm text-gray-800">
                    <button class="text-blue-600 hover:underline">Delete</button> | 
                    <button class="text-blue-600 hover:underline">Ignore</button>
                  </td>
                  <td class="border border-gray-300 px-4 py-2 text-sm text-gray-800">On-going</td>
                </tr>
                <tr>
                  <td class="border border-gray-300 px-4 py-2 text-sm text-gray-800">010</td>
                  <td class="border border-gray-300 px-4 py-2 text-sm text-gray-800">subaru pedo</td>
                  <td class="border border-gray-300 px-4 py-2 text-sm text-gray-800">2024-11-16 18:25</td>
                  <td class="border border-gray-300 px-4 py-2 text-sm text-gray-800">
                    <button class="text-blue-600 hover:underline">Delete</button> | 
                    <button class="text-blue-600 hover:underline">Ignore</button>
                  </td>
                  <td class="border border-gray-300 px-4 py-2 text-sm text-gray-800">Pending</td>
                </tr>
                
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
                  <th class="border border-gray-300 px-4 py-2 text-left text-sm font-medium text-gray-600">ID</th>
                  <th class="border border-gray-300 px-4 py-2 text-left text-sm font-medium text-gray-600">Nama</th>
                  <th class="border border-gray-300 px-4 py-2 text-left text-sm font-medium text-gray-600">Email</th>
                  <th class="border border-gray-300 px-4 py-2 text-left text-sm font-medium text-gray-600">Tanggal Lahir</th>
                  <th class="border border-gray-300 px-4 py-2 text-left text-sm font-medium text-gray-600">No. Telepon</th>
                  <th class="border border-gray-300 px-4 py-2 text-left text-sm font-medium text-gray-600">LMP</th>
                  <th class="border border-gray-300 px-4 py-2 text-left text-sm font-medium text-gray-600">Tinggi Badan</th>
                </tr>
              </thead>

              <tbody>
                <tr>
                  <td class="border border-gray-300 px-4 py-2 text-sm text-gray-600">1</td>
                  <td class="border border-gray-300 px-4 py-2 text-sm text-gray-600">John Doe</td>
                  <td class="border border-gray-300 px-4 py-2 text-sm text-gray-600">johndoe@gmail.com</td>
                  <td class="border border-gray-300 px-4 py-2 text-sm text-gray-600">1990-05-15</td>
                  <td class="border border-gray-300 px-4 py-2 text-sm text-gray-600">081234567890</td>
                  <td class="border border-gray-300 px-4 py-2 text-sm text-gray-600">2024-11-01</td>
                  <td class="border border-gray-300 px-4 py-2 text-sm text-gray-600">175 cm</td>
                </tr>
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
  </script>
</body>
