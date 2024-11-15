<body class="bg-[#C1CFA1] flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded-xl shadow-lg w-full max-w-md md:max-w-lg">

        <!-- Logo -->
        <div class="flex justify-center mb-4">
        <img src="<?=BASEURL?>/img/logo.png" alt="SIAGA BUNDA" class="w-20 h-20">
        </div>

        <!-- Title -->
        <h2 class="text-center text-2xl font-bold text-[#4D5A32] mb-6">Log In ke akun anda</h2>

        <!-- Form -->
        <form action="#">

            <!-- Email -->
            <div class="mb-4">
                <label for="email" class="ml-1 block text-sm font-semibold text-[#4D5A32]">Email</label>
                <input type="email" id="email" placeholder="Masukkan Email Anda..." class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-[#C1CFA1] focus:border-[#C1CFA1]">
            </div>

            <!-- Kata Sandi -->
            <div class="mb-4">
                <label for="password" class="ml-1 block text-sm font-semibold text-[#4D5A32]">Kata Sandi</label>
                <input type="password" id="password" placeholder="Masukkan Kata Sandi Anda..." class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-[#C1CFA1] focus:border-[#C1CFA1]">
            </div>

            <!-- Lupa Kata Sandi -->
            <div class="text-sm text-[#4D5A32] mb-4">
                 Lupa kata sandi? <a href="<?=BASEURL?>signIn/resetPassword" class="font-semibold text-[#4D5A32]">Klik di sini</a>
            </div>


            <!-- Register Link -->
            <div class="text-sm text-[#4D5A32] mb-6">
                Belum memiliki akun? <a href="signUp" class="font-semibold text-[#4D5A32]">Daftar di sini</a>
            </div>


            <!-- Tombol Masuk -->
            <button type="submit" class="w-full bg-[#4D5A32] font-semibold text-white py-2 rounded-2xl hover:bg-white hover:text-[#4D5A32] hover:border-[#4D5A32] hover:border focus:outline-none focus:ring-2 focus:ring-[#C1CFA1] shadow-md">Login</button>
        </form>
    </div>
</body>