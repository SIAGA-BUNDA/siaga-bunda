<body class="bg-[#C1CFA1] flex items-center justify-center min-h-screen">

    <div class="bg-white p-8 rounded-xl shadow-lg w-full max-w-wd md:max-w-lg">

        <!-- Logo -->
        <div class="flex justify-center mb-4">
            <img src="<?=BASEURL?>/img/logo.png" alt="SIAGA BUNDA" class="w-20 h-20">
        </div>

        <!-- Title -->
        <h2 class="text-center text-2xl font- font-bold text-[#4D5A32] mb-6">Forgot Password</h2>

        <!-- Form -->
        <form action="<?=BASEURL?>resetPassword/submit_index" method="post"> 

            <!-- Instruksi -->
            <div class="flex items-center justify-center text-sm text-[#4D5A32] mb-4">
                <p class="text-center text-xl text-[#4D5A32] mb-6" name="email">Masukkan email untuk reset password</p>   
            </div>
            
            <!-- Email -->
             <div class="mb-4">
                <label for="email" class="ml-1 block text-sm font-semibold text-[#4D5A32]">Email</label>
                <input name="email" type="text" id="email" placeholder="Masukkan email anda..." class="mt-1 block w-full px-3 py-2 border <?= empty($data['errors']['email']) ? 'border-gray-300' : 'border-red-400' ?> rounded-lg focus:outline-none focus:ring-[#C1CFA1] focus:border-[#C1CFA1]">
                <?= empty($data['errors']['email']) ? '' : '<label class = "text-red-500">' . $data['errors']['email'][0] . '</label>' ?>
             </div>

            <!-- Link Login -->
            <div         class="text-sm text-[#4D5A32] mb-4">
                Kembali <a href="<?=BASEURL?>signIn" class="font-bold"> login disini</a>
            </div>

            <!-- Tombol Submit -->
            <div class="flex items-center justify-center">
                <button type="submit" class=" w-40 bg-[#4D5A32] font-semibold text-white py-2 rounded-2xl hover:bg-white hover:text-[#4D5A32] hover:border-gray-300 hover:border focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 shadow-md">Submit</button>
            </div>        
            </form>
    </div>

</body>