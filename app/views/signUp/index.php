<body class="bg-[#FCF1E6] flex items-center justify-center min-h-screen">

    <div class="bg-white px-8 py-2 my-5 rounded-xl shadow-lg w-full max-w-wd md:max-w-lg mx-5">

        <!-- Logo -->
        <div class="flex justify-center mb-4">
            <img src="<?= BASEURL ?>/img/logo.png" alt="SIAGA BUNDA" class="w-20 h-20">
        </div>

        <!-- Title -->
        <h2 class="text-center text-2xl font- font-bold text-[#2B3440] mb-6">Daftar Sekarang</h2>

        <!-- Form -->
        <form action="<?= BASEURL ?>signUp/tambah" method="post">

            <!-- Nama -->
            <div class="mb-4">
                <label for="name" class="ml-1 block text-sm font-semibold text-[#0B2027]">Nama</label>
                <input name="nama" type="text" id="name" placeholder="Masukkan Nama Anda..."
                    class="mt-1 block w-full px-3 py-2 border <?= empty($data['errors']['nama']) ? '!border-[#F6F6F6]' : 'border-red-400' ?> !bg-[#F6F6F6] rounded-lg focus:!border focus:!ring-[#A8A8A8] focus:!border-[#A8A8A8] !text-[#696969]"
                    value=<?= $data['nama'] ?? '' ?>>
                <?= empty($data['errors']['nama']) ? '' : '<label class = "text-red-500">' . $data['errors']['nama'][0] . '</label>' ?>
            </div>

            <!-- Email -->
            <div class="mb-4">
                <label for="email" class="ml-1 block text-sm font-semibold text-[#0B2027]">Email</label>
                <input name="email" type="text" id="email" placeholder="Masukkan email anda..."
                    class="mt-1 block w-full px-3 py-2 border <?= empty($data['errors']['email']) ? '!border-[#F6F6F6]' : 'border-red-400' ?> !bg-[#F6F6F6] rounded-lg focus:!border focus:!ring-[#A8A8A8] focus:!border-[#A8A8A8] !text-[#696969]"
                    value=<?= $data['email'] ?? '' ?>>
                <?= empty($data['errors']['email']) ? '' : '<label class = "text-red-500">' . $data['errors']['email'][0] . '</label>' ?>
            </div>

            <!-- Kata Sandi -->
            <div class="mb-4">
                <label for="password" class="ml-1 block text-sm font-semibold text-[#0B2027]">Buat Kata Sandi</label>
                <input name="password" type="password" id="password" placeholder="Buat Kata Sandi Anda..."
                    class="mt-1 block w-full px-3 py-2 border <?= empty($data['errors']['password']) ? '!border-[#F6F6F6]' : 'border-red-400' ?> !bg-[#F6F6F6] rounded-lg focus:!border focus:!ring-[#A8A8A8] focus:!border-[#A8A8A8] !text-[#696969]"
                    value=<?= $data['password'] ?? '' ?>>
                <?= empty($data['errors']['password']) ? '' : '<label class = "text-red-500">' . $data['errors']['password'][0] . '</label>' ?>
            </div>

            <!-- No. Telepon -->
            <div class="mb-4">
                <label for="no_telepon" class="ml-1 block text-sm font-semibold text-[#0B2027]">No. Telepon</label>
                <input name="no_telepon" type="text" id="no_telepon" placeholder="Masukkan No. Telepon"
                    class="mt-1 block w-full px-3 py-2 border <?= empty($data['errors']['no_telepon']) ? '!border-[#F6F6F6]' : 'border-red-400' ?> !bg-[#F6F6F6] rounded-lg focus:!border focus:!ring-[#A8A8A8] focus:!border-[#A8A8A8] !text-[#696969]"
                    value=<?= $data['no_telepon'] ?? '' ?>>
                <?= empty($data['errors']['no_telepon']) ? '' : '<label class = "text-red-500">' . $data['errors']['no_telepon'][0] . '</label>' ?>
            </div>

            <!-- Tanggal Lahir dan Berat Badan -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                <div>
                    <label for="birthdate" class="ml-1 block text-sm font-semibold text-[#0B2027]">Tanggal Lahir</label>
                    <input type="date" name="tanggal_lahir" id="birthdate"
                        class="mt-1 block w-full px-3 py-2 border <?= empty($data['errors']['tanggal_lahir']) ? '!border-[#F6F6F6]' : 'border-red-400' ?> !bg-[#F6F6F6] rounded-lg focus:!border focus:!ring-[#A8A8A8] focus:!border-[#A8A8A8] !text-[#696969]"
                        value=<?= $data['tanggal_lahir'] ?? '' ?>>
                    <?= empty($data['errors']['tanggal_lahir']) ? '' : '<label class = "text-red-500">' . $data['errors']['tanggal_lahir'][0] . '</label>' ?>
                </div>
                <div>
                    <label for="phone" class="ml-1 block text-sm font-semibold text-[#0B2027]">Berat Badan Pra
                        Kehamilan</label>
                    <input type="number" id="phone" name="berat_badan" placeholder="Masukkan Berat Badan"
                        class="mt-1 block w-full px-3 py-2 border <?= empty($data['errors']['berat_badan']) ? '!border-[#F6F6F6]' : 'border-red-400' ?> !bg-[#F6F6F6] rounded-lg focus:!border focus:!ring-[#A8A8A8] focus:!border-[#A8A8A8] !text-[#696969]"
                        value=<?= $data['berat_badan'] ?? '' ?>>
                    <?= empty($data['errors']['berat_badan']) ? '' : '<label class = "text-red-500">' . $data['errors']['berat_badan'][0] . '</label>' ?>
                </div>
            </div>

            <!-- Last Menstrual Period dan Tinggi Badan -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                <div>
                    <label for="last-period" class="ml-1 block text-sm font-semibold text-[#0B2027]">Last Menstrual
                        Period</label>
                    <input name="lmp" type="date" id="last-period"
                        class="mt-1 block w-full px-3 py-2 border <?= empty($data['errors']['lmp']) ? '!border-[#F6F6F6]' : 'border-red-400' ?> !bg-[#F6F6F6] rounded-lg focus:!border focus:!ring-[#A8A8A8] focus:!border-[#A8A8A8] !text-[#696969]"
                        value=<?= $data['lmp'] ?? '' ?>>
                    <?= empty($data['errors']['lmp']) ? '' : '<label class = "text-red-500">' . $data['errors']['lmp'][0] . '</label>' ?>
                </div>
                <div>
                    <label for="height" class="ml-1 block text-sm font-semibold text-[#0B2027]">Tinggi Badan</label>
                    <input type="number" name="tinggi_badan" id="height" placeholder="Masukkan tinggi badan"
                        class="mt-1 block w-full px-3 py-2 border <?= empty($data['errors']['tinggi_badan']) ? '!border-[#F6F6F6]' : 'border-red-400' ?> !bg-[#F6F6F6] rounded-lg focus:!border focus:!ring-[#A8A8A8] focus:!border-[#A8A8A8] !text-[#696969]"
                        value=<?= $data['tinggi_badan'] ?? '' ?>>
                    <?= empty($data['errors']['tinggi_badan']) ? '' : '<label class = "text-red-500">' . $data['errors']['tinggi_badan'][0] . '</label>' ?>
                </div>
            </div>

            <!-- Link Login -->
            <div class="flex items-center justify-start text-sm text-[#0B2027]">
                Sudah memiliki akun?&nbsp <a href="<?= BASEURL ?>signIn" class="font-semibold"> login disini</a>

            </div>

            <!-- Tombol Daftar -->
            <div class="flex items-center justify-end mb-6">
                <button type="submit" class="!btn !btn-neutral lg:!font-bold lg:!text-base !px-10">Daftar</button>
            </div>
        </form>
    </div>

</body>