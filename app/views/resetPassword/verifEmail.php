<body class="bg-[#FCF1E6] flex items-center justify-center min-h-screen">

    <div class="bg-white p-8 rounded-xl shadow-lg w-full max-w-wd md:max-w-lg">

        <!-- Logo -->
        <div class="flex justify-center mb-4">
            <img src="<?= BASEURL ?>/img/logo.png" alt="SIAGA BUNDA" class="w-20 h-20">
        </div>

        <!-- Title -->
        <h2 class="text-center text-2xl font- font-bold text-[#2B3440] mb-6">Verify your email</h2>



        <!-- Instruksi -->
        <div class="flex items-center justify-center text-sm text-[#2B3440]">
            <p class="text-center text-xl text-[#2B3440] mb-6">Kami telah mengirim link verifikasi kepada email anda
                untuk reset Password.
        </div>

        <!-- Link Login -->
        <div class="flex items-center justify-center text-sm text-[#2B3440] mb-4">
            Kembali &nbsp<a href="<?= BASEURL ?>signIn" class="font-bold"> login disini</a>
        </div>

        <div class="flex items-center justify-center text-sm text-[#2B3440] mb-4">
            <p class="text-center text-xl text-[#2B3440] mb-6">Tekan tombol dibawah ini jika anda tidak menerima
                email tersebut</p>
        </div>

        <!-- Tombol Submit -->
        <div class="flex items-center justify-center">
            <button type="submit" class=" w-40 !btn !btn-neutral lg:!font-bold lg:text-base" id="resend-btn">Kirim
                Ulang</button>
        </div>
    </div>
    <script>
        $('#resend-btn').on('click', function () {
            $.ajax({
                url: '<?= BASEURL ?>resetPassword/index',
                data: { email: '<?= $data['email'] ?>' },
                method: 'POST',
                success: () => {
                    alert('berhasil dikirim');
                }
            })
        })
    </script>
</body>