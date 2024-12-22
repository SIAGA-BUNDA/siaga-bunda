<body class="bg-[#FCF1E6] flex items-center justify-center min-h-screen">

    <div class="bg-white p-8 rounded-xl shadow-lg w-full max-w-wd md:max-w-lg">

        <!-- Logo -->
        <div class="flex justify-center mb-4">
            <img src="<?= BASEURL ?>/img/logo.png" alt="SIAGA BUNDA" class="w-20 h-20">
        </div>

        <!-- Title -->
        <h2 class="text-center text-2xl font- font-bold text-[#2B3440] mb-6">Ganti Password</h2>

        <!-- Form -->
        <form method="post">

            <!-- Instruksi -->
            <div class="flex items-center justify-center text-sm text-[#4D5A32] mb-4">
                <p class="text-center text-xl text-[#2B3440] mb-6" name="email">Masukkan email untuk reset password</p>
            </div>

            <!-- Email -->
            <div class="mb-4">
                <label for="email" class="ml-1 block text-sm font-semibold text-[#2B3440]">Email</label>
                <input name="email" type="text" id="email" placeholder="Masukkan email anda..."
                    class="mt-1 block w-full px-3 py-2 border <?= empty($data['errors']['email']) ? '!border-[#F6F6F6]' : 'border-red-400' ?> !bg-[#F6F6F6] rounded-lg focus:!border focus:!ring-[#A8A8A8] focus:!border-[#A8A8A8] !text-[#696969]"
                    value=<?= $data['email'] ?? '' ?>>
                <?= empty($data['errors']['email']) ? '' : '<label class = "text-red-500">' . $data['errors']['email'][0] . '</label>' ?>
            </div>

            <!-- Link Login -->
            <div class="text-sm text-[#2B3440] mb-4">
                Kembali <a href="<?= BASEURL ?>signIn" class="font-bold"> login disini</a>
            </div>

            <!-- Tombol Submit -->
            <div class="flex items-center justify-center">
                <button type="submit"
                    class="!btn !btn-neutral w-40 lg:!font-bold lg:!text-base">Submit</button>
            </div>
        </form>
    </div>

</body>