
<body class="bg-[#C1CFA1] flex items-center justify-center min-h-screen">

    <div class="bg-white p-8 rounded-xl shadow-lg w-full max-w-wd md:max-w-lg">

        <!-- Logo -->
        <div class="flex justify-center mb-4">
            <img src="<?=BASEURL?>/img/logo.png" alt="SIAGA BUNDA" class="w-20 h-20">
        </div>

        <!-- Title -->
        <h2 class="text-center text-2xl font- font-bold text-[#4D5A32] mb-6">Daftar Sekarang</h2>

        <!-- Form -->
        <form action="<?=BASEURL?>signUp/tambah" method="post">

            <!-- Nama -->
            <div class="mb-4">
                <label for="name" class="ml-1 block text-sm font-semibold text-[#4D5A32]">Nama</label>
                <input name="nama" type="text" id="name" placeholder="Masukkan Nama Anda..." class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-[#C1CFA1] focus:border-[#C1CFA1]">
            </div>

            <!-- Email -->
             <div class="mb-4">
                <label for="email" class="ml-1 block text-sm font-semibold text-[#4D5A32]">Email</label>
                <input name="email" type="text" id="email" placeholder="Masukkan email anda..." class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-[#C1CFA1] focus:border-[#C1CFA1]">
             </div>

            <!-- Kata Sandi -->
            <div class="mb-4">
                <label for="password" class="ml-1 block text-sm font-semibold text-[#4D5A32]">Buat Kata Sandi</label>
                <input name="password" type="password" id="password" placeholder="Buat Kata Sandi Anda..." class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-[#C1CFA1] focus:border-[#C1CFA1]">
            </div>

            <!-- Tanggal Lahir dan No. Telpon -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                <div>
                    <label for="birthdate" class="ml-1 block text-sm font-semibold text-[#4D5A32]">Tanggal Lahir</label>
                    <input type="date" name="tanggal_lahir" id="birthdate" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-[#C1CFA1] focus:border-[#C1CFA1]">
                </div>
                <div>
                    <label for="phone" class="ml-1 block text-sm font-semibold text-[#4D5A32]">No. Telpon</label>
                    <input type="number" id="phone" name="no_telepon" placeholder="Masukkan No Telpon" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-[#C1CFA1] focus:border-[#C1CFA1]">
                </div>
            </div>

            <!-- Last Menstrual Period dan Tinggi Badan -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                <div>
                    <label for="last-period" class="ml-1 block text-sm font-semibold text-[#4D5A32]">Last Menstrual Period</label>
                    <input name="lmp" type="date" id="last-period" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-[#C1CFA1] focus:border-[#C1CFA1]">
                </div>
                <div>
                    <label for="height" class="ml-1 block text-sm font-semibold text-[#4D5A32]">Tinggi Badan</label>
                    <input type="number" name="tinggi_badan" id="height" placeholder="Masukkan tinggi badan anda..." class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-[#C1CFA1] focus:border-[#C1CFA1]">
                </div>
            </div>

            <!-- Link Login -->
            <div class="flex items-center justify-center text-sm text-[#4D5A32] mb-4">
                Sudah memiliki akun?&nbsp <a href="<?=BASEURL?>signIn" class="font-semibold"> login disini</a>
            </div>

            <!-- Tombol Daftar -->
            <div class="flex items-center justify-center">
                <button type="submit" class=" w-40 bg-[#4D5A32] font-semibold text-white py-2 rounded-2xl hover:bg-white hover:text-[#4D5A32] hover:border-gray-300 hover:border focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 shadow-md">Daftar</button>
            </div>
            </form>
    </div>

</body>

