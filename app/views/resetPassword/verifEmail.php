<body class="bg-[#C1CFA1] flex items-center justify-center min-h-screen">

    <div class="bg-white p-8 rounded-xl shadow-lg w-full max-w-wd md:max-w-lg">

        <!-- Logo -->
        <div class="flex justify-center mb-4">
            <img src="<?=BASEURL?>/img/logo.png" alt="SIAGA BUNDA" class="w-20 h-20">
        </div>

        <!-- Title -->
        <h2 class="text-center text-2xl font- font-bold text-[#4D5A32] mb-6">Verify your email</h2>

        <!-- Form -->
        <form action="<?=BASEURL?>resetPassword/submit_index" method="post"> 

            <!-- Instruksi -->
            <div class="flex items-center justify-center text-sm text-[#4D5A32]">
                <p class="text-center text-xl text-[#4D5A32] mb-6">Kami telah mengirim link verifikasi kepada email anda untuk reset Password. Link tersebut akan kadaluarsa setelah 24 jam</p>   
            </div>
            
            <!-- Link Login -->
            <div class="flex items-center justify-center text-sm text-[#4D5A32] mb-4">
                Kembali &nbsp<a href="<?=BASEURL?>signIn" class="font-bold"> login disini</a>
            </div>
            
            <div class="flex items-center justify-center text-sm text-[#4D5A32] mb-4">
                <p class="text-center text-xl text-[#4D5A32] mb-6">Tekan tombol dibawah ini jika anda tidak menerima email tersebut</p>   
            </div> 

            <!-- Tombol Submit -->
            <div class="flex items-center justify-center">
                <button type="submit" class=" w-40 bg-[#4D5A32] font-semibold text-white py-2 rounded-2xl hover:bg-white hover:text-[#4D5A32] hover:border-gray-300 hover:border focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 shadow-md">Kirim Ulang</button>
            </div>        
            </form>
    </div>

</body>