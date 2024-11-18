<body class="bg-[#C1CFA1] flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded-xl shadow-lg w-full max-w-md md:max-w-lg">

        <!-- Logo -->
        <div class="flex justify-center mb-4">
            <img src="<?= BASEURL ?>/img/logo.png" alt="SIAGA BUNDA" class="w-20 h-20">
        </div>

        <!-- Title -->
        <h2 class="text-center text-2xl font-bold text-[#4D5A32] mb-6">Log In ke akun anda</h2>

        <!-- Form -->
        <form action="<?= BASEURL ?>signIn/submit_login" method="POST">

            <!-- Email -->
            <div class="mb-4">
                <label for="email" class="ml-1 block text-sm font-semibold text-[#4D5A32]">Email</label>
                <input name="email" id="email" placeholder="Masukkan Email Anda..."
                    class="mt-1 block w-full px-3 py-2 border <?= empty($data['errors']['email']) ? 'border-gray-300' : 'border-red-400' ?> rounded-lg focus:outline-none focus:ring-[#C1CFA1] focus:border-[#C1CFA1]"
                    value=<?= $data['email'] ?? '' ?>>
                <?= empty($data['errors']['email']) ? '' : '<label class = "text-red-500">' . $data['errors']['email'][0] . '</label>' ?>
            </div>

            <!-- Kata Sandi -->
            <div class="mb-4">
                <label for="password" class="ml-1 block text-sm font-semibold text-[#4D5A32]">Kata Sandi</label>
                <input type="password" name="password" id="password" placeholder="Masukkan Kata Sandi Anda..."
                    class="mt-1 block w-full px-3 py-2 border <?= empty($data['errors']['password']) ? 'border-grey-300' : ' border-red-400' ?> rounded-lg focus:outline-none focus:ring-[#C1CFA1] focus:border-[#C1CFA1]"  value=<?= $data['password'] ?? '' ?>>
                <?= empty($data['errors']['password']) ? '' : '<label class = "text-red-500">' . $data['errors']['password'][0] . '</label>' ?>
            </div>

            <!-- Lupa Kata Sandi -->
            <div class="text-sm text-[#4D5A32] mb-4">
                Lupa kata sandi? <a href="<?= BASEURL ?>resetPassword" class="font-semibold text-[#4D5A32]">Klik
                    di sini</a>
            </div>


            <!-- Register Link -->
            <div class="text-sm text-[#4D5A32] mb-6">
                Belum memiliki akun? <a href="signUp" class="font-semibold text-[#4D5A32]">Daftar di sini</a>
            </div>


            <!-- Tombol Masuk -->
            <button type="button" onclick="my_modal_1.showModal()"
                class="w-full bg-[#4D5A32] font-semibold text-white py-2 rounded-2xl hover:bg-white hover:text-[#4D5A32] hover:border-[#4D5A32] hover:border focus:outline-none focus:ring-2 focus:ring-[#C1CFA1] shadow-md">Login</button>
            <!-- Open the modal using ID.showModal() method -->
            <dialog id="my_modal_1" class="modal">
                <div class="modal-box">
                    <h3 class="text-lg font-bold mb-3">Captcha</h3>
                    <img src="<?php echo $data['builder']->inline(); ?>" class="my-3" />
                    <input type="text" name="user_captcha" id="password" placeholder="Masukkan Captcha"
                    class="mt-1 block w-full px-3 py-2 border border-grey-300 rounded-lg focus:outline-none focus:ring-[#C1CFA1] focus:border-[#C1CFA1]">
                    <div class="modal-action">
                        <button class="btn">Submit</button>
                    </div>
                </div>
            </dialog>

        </form>
    </div>
</body>