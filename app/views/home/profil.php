<body class="bg-[#FCF1E6] flex items-center justify-center min-h-screen lg:!h-screen p-10">
    <div class="bg-white p-8 rounded-xl w-full h-full flex flex-col justify-center relative">
        <!-- Form -->
        <form method="POST" action="<?= BASEURL ?>tracking/input"
            class="h-full flex flex-col items-center p-5 space-y-3 mb-10" id="form">

            <!-- Header Form -->
            <div class="flex justify-between w-full">
                <a class="flex text-[#bebebe] justify-center gap-3 hover:text-[#919191] prev cursor-pointer"
                    href="<?= BASEURL ?>home">
                    <i class="fa-solid fa-arrow-left mt-1"></i>
                    <h2 class="text-sm md:text-base lg:text-lg">Kembali</h2>
                </a>
                <img src="<?= BASEURL ?>/img/logo.png" alt="SIAGA BUNDA" class="w-10 md:w-15 lg:w-20">
            </div>

            <h2 class="text-gray-700 font-bold text-lg md:text-xl lg:text-2xl">Profil Akun</h2>

            <!-- Email -->
            <div class="w-full lg:!w-1/2 2xl:!w-1/3">
                <label for="email" class="ml-1 block text-base md:text-lg font-semibold text-[#4D5A32]">Email</label>
                <input name="email" type="text" id="email"
                    class="mt-1 block w-full px-3 py-2 border rounded-lg text-sm md:text-base text-[#696969] !bg-[#ECEBEB] !border-[#ECEBEB]"
                    value="example@gmail.com" disabled>
            </div>

            <!-- Password -->
            <div class="w-full lg:!w-1/2 2xl:!w-1/3">
                <label for="password"
                    class="ml-1 block text-base md:text-lg font-semibold text-[#4D5A32]">Password</label>
                <a href="" class="btn btn-neutral text-sm md:text-base">Ubah Password</a>
            </div>

            <!-- Nama -->
            <div class="w-full lg:!w-1/2 2xl:!w-1/3">
                <label for="nama" class="ml-1 block text-base md:text-lg font-semibold text-[#4D5A32]">Nama</label>
                <input name="nama" type="text" id="nama"
                    class="mt-1 block w-full px-3 py-2 border rounded-lg text-sm md:text-base text-[#696969] bg-[#ECEBEB] border-[#7F7C7C]"
                    value="Xeyla Scrum Master">
            </div>

            <!-- LMP dan Berat Badan -->
            <div
                class="w-full lg:!w-1/2 2xl:!w-1/3 flex space-y-3 sm:space-y-0 sm:space-x-5 flex-col items-center sm:flex-row">
                <div class="w-full sm:w-1/2">
                    <label for="lmp" class="ml-1 block text-base md:text-lg font-semibold text-[#4D5A32]">LMP</label>
                    <input name="lmp" type="date" id="lmp"
                        class="mt-1 block w-full px-3 py-2 border rounded-lg text-sm md:text-base text-[#696969] bg-[#ECEBEB] border-[#7F7C7C]"
                        value="2018-07-22">
                </div>
                <div class="w-full sm:w-1/2">
                    <label for="berat-badan" class="ml-1 block text-base md:text-lg font-semibold text-[#4D5A32]">Berat
                        Badan</label>
                    <input name="berat-badan" type="text" id="berat-badan"
                        class="mt-1 block w-full px-3 py-2 border rounded-lg text-sm md:text-base text-[#696969] bg-[#ECEBEB] border-[#7F7C7C]"
                        value="65">
                </div>
            </div>

            <!-- Tanggal Lahir dan Tinggi Badan -->
            <div
                class="w-full lg:!w-1/2 2xl:!w-1/3 flex space-y-3 sm:space-y-0 sm:space-x-5 flex-col items-center sm:flex-row">
                <div class="w-full sm:w-1/2">
                    <label for="tanggal-lahir"
                        class="ml-1 block text-base md:text-lg font-semibold text-[#4D5A32]">Tanggal Lahir</label>
                    <input name="tanggal-lahir" type="date" id="tanggal-lahir"
                        class="mt-1 block w-full px-3 py-2 border rounded-lg text-sm md:text-base text-[#696969] bg-[#ECEBEB] border-[#7F7C7C]"
                        value="2018-07-22">
                </div>
                <div class="w-full sm:w-1/2">
                    <label for="tinggi-badan"
                        class="ml-1 block text-base md:text-lg font-semibold text-[#4D5A32]">Tinggi Badan Pra
                        Hamil</label>
                    <input name="tinggi-badan" type="text" id="tinggi-badan"
                        class="mt-1 block w-full px-3 py-2 border rounded-lg text-sm md:text-base text-[#696969] bg-[#ECEBEB] border-[#7F7C7C]"
                        value="Xeyla Scrum Master">
                </div>
            </div>

            <!-- Simpan Button -->
            <div class="w-full lg:!w-1/2 2xl:!w-1/3 flex justify-end">
                <button class="btn btn-neutral text-sm md:text-base lg:text-lg">
                    Simpan
                </button>
            </div>
        </form>
    </div>


    <script>
        // JavaScript to handle the step transitions
        let currentStep = 1;

        // function previousStep() {
        //     document.getElementById(`step-${currentStep}`).classList.add('hidden');
        //     currentStep--;
        //     console.log(currentStep)
        //     if (currentStep >= 1) {
        //         document.getElementById(`step-${currentStep}`).classList.remove('hidden');
        //     } else {
        //         window.location.href = `<?= BASEURL ?>home/sesudahLogin`
        //     }
        // }
        // // Function to move to the next step
        // function nextStep() {
        //     document.getElementById(`step-${currentStep}`).classList.add('hidden');
        //     currentStep++;
        //     if (currentStep <= 11) {
        //         document.getElementById(`step-${currentStep}`).classList.remove('hidden');
        //         $(`.progress-${currentStep - 1}`).val(100);
        //     } else {
        //         $(`.progress-${currentStep - 1}`).val(100);
        //         window.location.href = `<?= BASEURL ?>home/sesudahLogin`
        //     }
        // }

        // // Event listeners for continue buttons
        // $('.prev').on('click', previousStep);
        // $('.continue').on('click', nextStep);
        // $('.btn-opt').on('click', function () {
        //     const step = $(this).closest('.step')
        //     $(this).addClass('btn-disabled').siblings().removeClass('btn-disabled');
        //     step.find('.continue').removeClass('btn-disabled');
        // })

        // $('#PRA_BERAT').keyup(function () {
        //     const step = $(this).closest('.step');
        //     if (this.value.trim() != "") {
        //         step.find('.continue').removeClass("btn-disabled");
        //     } else {
        //         step.find('.continue').addClass("btn-disabled");
        //     }
        // })
    </script>
</body>