<body class="bg-[#FCF1E6] flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded-xl shadow-lg w-full max-w-md md:max-w-lg">

        <!-- Logo -->
        <div class="flex justify-center mb-4">
            <img src="<?= BASEURL ?>/img/logo.png" alt="SIAGA BUNDA" class="w-20 h-20">
        </div>

        <!-- Title -->
        <h2 class="text-center text-2xl font-bold text-[#2B3440] mb-6">Log In untuk masuk ke mode admin</h2>

        <!-- Form -->
        <form action="<?= BASEURL ?>pageAdmin/submitAdmin" method="POST">

            <!-- Email -->
            <div class="mb-4">
                <label for="username" class="ml-1 block text-sm font-semibold text-[#2B3440]">Username</label>
                <input name="username" id="username" placeholder="Masukkan username Anda..."
                    class="mt-1 block w-full px-3 py-2 border <?= empty($data['errors']['username']) ? 'border-gray-300' : 'border-red-400' ?> rounded-lg focus:outline-none focus:ring-[#2B3440] focus:border-[#2B3440]"
                    value=<?= $data['username'] ?? '' ?>>
                <?= empty($data['errors']['username']) ? '' : '<label class = "text-red-500">' . $data['errors']['email'][0] . '</label>' ?>
            </div>

            <!-- Kata Sandi -->
            <div class="mb-4">
                <label for="password" class="ml-1 block text-sm font-semibold text-[#4D5A32]">Kata Sandi</label>
                <input type="password" name="password" id="password" placeholder="Masukkan Kata Sandi Anda..."
                    class="mt-1 block w-full px-3 py-2 border <?= empty($data['errors']['password']) ? 'border-grey-300' : ' border-red-400' ?> rounded-lg focus:outline-none focus:ring-[#2B3440] focus:border-[#2B3440]"  value=<?= $data['password'] ?? '' ?>>
                <?= empty($data['errors']['password']) ? '' : '<label class = "text-red-500">' . $data['errors']['password'][0] . '</label>' ?>
            </div>

            <div class="w-full flex justify-center">
                <button type="submit"
                class=" w-20 !btn !btn-neutral lg:!font-bold lg:!text-base !px-16">Login</button>
            </div>       
            </form>
    </div>
</body>