<body class="bg-[#C1CFA1] flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded-xl shadow-2xl w-full max-w-lg">

        <!-- Logo -->
        <div class="flex justify-center mb-6">
            <img src="<?= BASEURL ?>/img/logo.png" alt="SIAGA BUNDA" class="w-20 h-15">
        </div>

        <!-- Judul Formulir -->
        <h2 class="text-center text-2xl font-bold text-[#4D5A32] mb-6">Pendataan Mingguan Kehamilan</h2>

        <!-- Form -->
        <form method="POST" action="<?= BASEURL ?>tracking/input" class="space-y-4" id="form">

            <!-- Step 1: Berat Badan -->
            <div id="step-1" class="step">
                <div class="bg-gray-100 p-5 rounded-lg mb-6 shadow-md">
                <label for="berat_badan" class="block text-lg font-semibold text-gray-800 mb-2">Berat Badan Anda Saat Ini (Kg):</label>
                    <input type="number" id="berat_badan" name="berat_badan" placeholder="Masukkan Berat Badan Anda..."
                        class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:border-[#4D5A32] focus:ring-[#4D5A32]">
                        <p class="text-sm text-gray-600 mt-2">Masukkan berat badan Anda untuk memantau perkembangan kehamilan.</p>
                </div>
                <div class="flex justify-center">
                    <button type="button" id="continue-1" class="mt-4 bg-[#4D5A32] text-white px-4 py-2 rounded-lg hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-[#C1CFA1] focus:ring-offset-2">
                        Continue
                    </button>
                </div>
            </div>

            <!-- Step 2: Risiko TB -->
            <div id="step-2" class="step hidden">
    <div class="bg-gray-100 p-6 rounded-lg shadow-md mb-6">
        <label class="block text-lg font-semibold text-gray-800 mb-4">Apakah Anda Mengalami Risiko TB?</label>
        <div class="grid gap-6">

            <div>
                <label class="flex items-center space-x-3">
                    <input type="radio" name="risiko_tb" value="Tidak ada Batuk lebih dari 2 Minggu dan kontak dengan penderita TB"
                        class="h-5 w-5 text-green-600 border-gray-300 focus:ring-[#4A6F44]">
                    <span class="text-gray-700 text-base">Tidak ada Batuk lebih dari 2 minggu dan kontak dengan penderita TB</span>
                </label>
            </div>
            <div>
                <label class="flex items-center space-x-3">
                    <input type="radio" name="risiko_tb" value="Batuk lebih dari 2 minggu atau kontak dengan penderita TB"
                        class="h-5 w-5 text-green-600 border-gray-300 focus:ring-[#4A6F44]">
                    <span class="text-gray-700 text-base">Batuk lebih dari 2 minggu atau kontak dengan penderita TB</span>
                </label>
            </div>
        </div>
        <p class="text-sm text-gray-600 mt-2">Pilih opsi yang paling sesuai dengan kondisi Anda saat ini.</p>
    </div>
     <div class="flex justify-center">
                    <button type="button" id="continue-2" class="mt-4 bg-[#4D5A32] text-white px-4 py-2 rounded-lg hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-[#C1CFA1] focus:ring-offset-2">
                        Continue
                  </button>
             </div>
        </div>


            <!-- Step 3: Demam -->
            <div id="step-3" class="step hidden">
            <div class="bg-gray-100 p-6 rounded-lg shadow-md mb-6">
        <label class="block text-lg font-semibold text-gray-800 mb-4">Demam Lebih Dari 2 Hari:</label>
        <div class="grid gap-6">

            <div>
                <label class="flex items-center space-x-3">
                    <input type="radio" name="demam" value="Ya"
                        class="h-5 w-5 text-green-600 border-gray-300 focus:ring-[#4A6F44]">
                    <span class="text-gray-700 text-base">Ya</span>
                </label>
            </div>
            <div>
                <label class="flex items-center space-x-3">
                    <input type="radio" name="demam" value="Tidak"
                        class="h-5 w-5 text-green-600 border-gray-300 focus:ring-[#4A6F44]">
                    <span class="text-gray-700 text-base">Tidak</span>
                </label>
            </div>
        </div>
        <p class="text-sm text-gray-600 mt-2">Pilih opsi yang paling sesuai dengan kondisi Anda saat ini.</p>
    </div>
                <div class="flex justify-center">
                    <button type="button" id="continue-3" class="mt-4 bg-[#4D5A32] text-white px-4 py-2 rounded-lg hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-[#C1CFA1] focus:ring-offset-2">
                        Continue
                    </button>
                </div>
            </div>

            <!-- Step 4: Pusing dan Sakit Kepala Berat -->
            <div id="step-4" class="step hidden">
            <div class="bg-gray-100 p-6 rounded-lg shadow-md mb-6">
        <label class="block text-lg font-semibold text-gray-800 mb-4">Pusing/Sakit Kepala Berat:</label>
        <div class="grid gap-6">

            <div>
                <label class="flex items-center space-x-3">
                    <input type="radio" name="pusing_sakit_kepala" value="Ya"
                        class="h-5 w-5 text-green-600 border-gray-300 focus:ring-[#4A6F44]">
                    <span class="text-gray-700 text-base">Ya</span>
                </label>
            </div>
            <div>
                <label class="flex items-center space-x-3">
                    <input type="radio" name="pusing_sakit_kepala" value="Tidak"
                        class="h-5 w-5 text-green-600 border-gray-300 focus:ring-[#4A6F44]">
                    <span class="text-gray-700 text-base">Tidak</span>
                </label>
            </div>
        </div>
        <p class="text-sm text-gray-600 mt-2">Pilih opsi yang paling sesuai dengan kondisi Anda saat ini.</p>
    </div>
                <div class="flex justify-center">
                    <button type="button" id="continue-4" class="mt-4 bg-[#4D5A32] text-white px-4 py-2 rounded-lg hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-[#C1CFA1] focus:ring-offset-2">
                        Continue
                    </button>
                </div>
            </div>

            <!-- Step 5: Sulit Tidur -->
            <div id="step-5" class="step hidden">
            <div class="bg-gray-100 p-6 rounded-lg shadow-md mb-6">
        <label class="block text-lg font-semibold text-gray-800 mb-4">Sulit Tidur/Cemas Berlebih:</label>
        <div class="grid gap-6">

            <div>
                <label class="flex items-center space-x-3">
                    <input type="radio" name="sulit_tidur" value="Ya"
                        class="h-5 w-5 text-green-600 border-gray-300 focus:ring-[#4A6F44]">
                    <span class="text-gray-700 text-base">Ya</span>
                </label>
            </div>
            <div>
                <label class="flex items-center space-x-3">
                    <input type="radio" name="sulit_tidur" value="Tidak"
                        class="h-5 w-5 text-green-600 border-gray-300 focus:ring-[#4A6F44]">
                    <span class="text-gray-700 text-base">Tidak</span>
                </label>
            </div>
        </div>
        <p class="text-sm text-gray-600 mt-2">Pilih opsi yang paling sesuai dengan kondisi Anda saat ini.</p>
    </div>
                <div class="flex justify-center">
                    <button type="button" id="continue-5" class="mt-4 bg-[#4D5A32] text-white px-4 py-2 rounded-lg hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-[#C1CFA1] focus:ring-offset-2">
                        Continue
                    </button>
                </div>
            </div>

            <!-- Step 6: Jantung Berdebar-debar -->
            <div id="step-6" class="step hidden">
            <div class="bg-gray-100 p-6 rounded-lg shadow-md mb-6">
        <label class="block text-lg font-semibold text-gray-800 mb-4">Jantung Berdebar/Nyeri di Dada:</label>
        <div class="grid gap-6">

            <div>
                <label class="flex items-center space-x-3">
                    <input type="radio" name="jantung_berdebar" value="Ya"
                        class="h-5 w-5 text-green-600 border-gray-300 focus:ring-[#4A6F44]">
                    <span class="text-gray-700 text-base">Ya</span>
                </label>
            </div>
            <div>
                <label class="flex items-center space-x-3">
                    <input type="radio" name="jantung_berdebar" value="Tidak"
                        class="h-5 w-5 text-green-600 border-gray-300 focus:ring-[#4A6F44]">
                    <span class="text-gray-700 text-base">Tidak</span>
                </label>
            </div>
        </div>
        <p class="text-sm text-gray-600 mt-2">Pilih opsi yang paling sesuai dengan kondisi Anda saat ini.</p>
    </div>
                <div class="flex justify-center">
                    <button type="button" id="continue-6" class="mt-4 bg-[#4D5A32] text-white px-4 py-2 rounded-lg hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-[#C1CFA1] focus:ring-offset-2">
                        Continue
                    </button>
                </div>
            </div>

            <!-- Step 7: Gerakan Janin -->
            <div id="step-7" class="step hidden">
            <div class="bg-gray-100 p-6 rounded-lg shadow-md mb-6">
        <label class="block text-lg font-semibold text-gray-800 mb-4">Gerakan Janin:</label>
        <div class="grid gap-6">

            <div>
                <label class="flex items-center space-x-3">
                    <input type="radio" name="gerakan_janin" value="10 Kali dalam 12 Jam"
                        class="h-5 w-5 text-green-600 border-gray-300 focus:ring-[#4A6F44]">
                    <span class="text-gray-700 text-base">10 Kali dalam 12 Jam</span>
                </label>
            </div>
            <div>
                <label class="flex items-center space-x-3">
                    <input type="radio" name="gerakan_janin" value="Tidak Ada atau < 10 Kali dalam 12 Jam"
                        class="h-5 w-5 text-green-600 border-gray-300 focus:ring-[#4A6F44]">
                    <span class="text-gray-700 text-base">Tidak Ada atau < 10 Kali dalam 12 Jam</span>
                </label>
            </div>
        </div>
        <p class="text-sm text-gray-600 mt-2">Pilih opsi yang paling sesuai dengan kondisi Anda saat ini.</p>
    </div>
                <div class="flex justify-center">
                    <button type="button" id="continue-7" class="mt-4 bg-[#4D5A32] text-white px-4 py-2 rounded-lg hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-[#C1CFA1] focus:ring-offset-2">
                        Continue
                    </button>
                </div>
            </div>

            <!-- Step 8: Nyeri Perut -->
            <div id="step-8" class="step hidden">
            <div class="bg-gray-100 p-6 rounded-lg shadow-md mb-6">
        <label class="block text-lg font-semibold text-gray-800 mb-4">Nyeri Perut Hebat:</label>
        <div class="grid gap-6">

            <div>
                <label class="flex items-center space-x-3">
                    <input type="radio" name="nyeri_perut" value="Ya"
                        class="h-5 w-5 text-green-600 border-gray-300 focus:ring-[#4A6F44]">
                    <span class="text-gray-700 text-base">Ya</span>
                </label>
            </div>
            <div>
                <label class="flex items-center space-x-3">
                    <input type="radio" name="nyeri_perut" value="Tidak"
                        class="h-5 w-5 text-green-600 border-gray-300 focus:ring-[#4A6F44]">
                    <span class="text-gray-700 text-base">Tidak</span>
                </label>
            </div>
        </div>
        <p class="text-sm text-gray-600 mt-2">Pilih opsi yang paling sesuai dengan kondisi Anda saat ini.</p>
    </div>
                <div class="flex justify-center">
                    <button type="button" id="continue-8" class="mt-4 bg-[#4D5A32] text-white px-4 py-2 rounded-lg hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-[#C1CFA1] focus:ring-offset-2">
                        Continue
                    </button>
                </div>
            </div>
            <!-- Step 9: Keluar Cairan-->
            <div id="step-9" class="step hidden">
            <div class="bg-gray-100 p-6 rounded-lg shadow-md mb-6">
        <label class="block text-lg font-semibold text-gray-800 mb-4">Keluaran Cairan dari Jalan Lahir:</label>
        <div class="grid gap-6">

            <div>
                <label class="flex items-center space-x-3">
                    <input type="radio" name="keluar_cairan" value="Tidak Ada / Ada dalam jumlah sedikit dan tidak berbau"
                        class="h-5 w-5 text-green-600 border-gray-300 focus:ring-[#4A6F44]">
                    <span class="text-gray-700 text-base">Tidak Ada / Ada dalam jumlah sedikit dan tidak berbau</span>
                </label>
            </div>
            <div>
                <label class="flex items-center space-x-3">
                    <input type="radio" name="keluar_cairan" value="Sangat Banyak dan Berbau"
                        class="h-5 w-5 text-green-600 border-gray-300 focus:ring-[#4A6F44]">
                    <span class="text-gray-700 text-base">Sangat Banyak dan Berbau</span>
                </label>
            </div>
        </div>
        <p class="text-sm text-gray-600 mt-2">Pilih opsi yang paling sesuai dengan kondisi Anda saat ini.</p>
    </div>
                <div class="flex justify-center">
                    <button type="button" id="continue-9" class="mt-4 bg-[#4D5A32] text-white px-4 py-2 rounded-lg hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-[#C1CFA1] focus:ring-offset-2">
                        Continue
                    </button>
                </div>
            </div>
            <!-- Step 10: Sakit saat Kencing -->
            <div id="step-10" class="step hidden">
            <div class="bg-gray-100 p-6 rounded-lg shadow-md mb-6">
        <label class="block text-lg font-semibold text-gray-800 mb-4">Sakit Saat Kencing:</label>
        <div class="grid gap-6">

            <div>
                <label class="flex items-center space-x-3">
                    <input type="radio" name="sakit_urine" value="Tidak"
                        class="h-5 w-5 text-green-600 border-gray-300 focus:ring-[#4A6F44]">
                    <span class="text-gray-700 text-base">Tidak</span>
                </label>
            </div>
            <div>
                <label class="flex items-center space-x-3">
                    <input type="radio" name="sakit_urine" value="Sakit saat kencing atau keluar keputihan atau gatal di daerah kemaluan"
                        class="h-5 w-5 text-green-600 border-gray-300 focus:ring-[#4A6F44]">
                    <span class="text-gray-700 text-base">Sakit saat kencing atau keluar keputihan atau gatal di daerah kemaluan</span>
                </label>
            </div>
        </div>
        <p class="text-sm text-gray-600 mt-2">Pilih opsi yang paling sesuai dengan kondisi Anda saat ini.</p>
    </div>
                <div class="flex justify-center">
                    <button type="button" id="continue-10" class="mt-4 bg-[#4D5A32] text-white px-4 py-2 rounded-lg hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-[#C1CFA1] focus:ring-offset-2">
                        Continue
                    </button>
                </div>
            </div>
            <!-- Step 11: Diare Berulang -->
            <div id="step-11" class="step hidden">
            <div class="bg-gray-100 p-6 rounded-lg shadow-md mb-6">
        <label class="block text-lg font-semibold text-gray-800 mb-4">Diare Berulang:</label>
        <div class="grid gap-6">

            <div>
                <label class="flex items-center space-x-3">
                    <input type="radio" name="diare_berulang" value="Ya"
                        class="h-5 w-5 text-green-600 border-gray-300 focus:ring-[#4A6F44]">
                    <span class="text-gray-700 text-base">Ya</span>
                </label>
            </div>
            <div>
                <label class="flex items-center space-x-3">
                    <input type="radio" name="diare_berulang" value="Tidak"
                        class="h-5 w-5 text-green-600 border-gray-300 focus:ring-[#4A6F44]">
                    <span class="text-gray-700 text-base">Tidak</span>
                </label>
            </div>
        </div>
        <p class="text-sm text-gray-600 mt-2">Pilih opsi yang paling sesuai dengan kondisi Anda saat ini.</p>
    </div>
                <div class="flex justify-center">
                    <button type="button" id="continue-11" class="mt-4 bg-[#4D5A32] text-white px-4 py-2 rounded-lg hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-[#C1CFA1] focus:ring-offset-2">
                        Continue
                    </button>
                </div>
            </div>
            <!-- Step Submit -->
            <div id="final-step" class="step hidden">
                 <div class="bg-gray-100 p-6 rounded-lg shadow-md mb-6">
                     <p class="text-lg text-center font-semibold text-green-600">Semua pertanyaan telah berhasil diisi!</p>
                </div>
            <div class="flex justify-center">
                 <button type="submit" class="mt-4 bg-[#4D5A32] text-white px-4 py-2 rounded-lg hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-[#C1CFA1] focus:ring-offset-2">
                    Submit
                 </button>
                </div>
            </div>

    <script>
        // JavaScript to handle the step transitions
        let currentStep = 1;

        // Function to move to the next step
        function nextStep() {
            document.getElementById(`step-${currentStep}`).classList.add('hidden');
            currentStep++;
            if (currentStep <= 11) {  
                document.getElementById(`step-${currentStep}`).classList.remove('hidden');
            } else {
                document.getElementById('final-step').classList.remove('hidden');
            }
        }

        // Event listeners for continue buttons
        document.getElementById('continue-1').addEventListener('click', nextStep);
        document.getElementById('continue-2').addEventListener('click', nextStep);
        document.getElementById('continue-3').addEventListener('click', nextStep);
        document.getElementById('continue-4').addEventListener('click', nextStep);
        document.getElementById('continue-5').addEventListener('click', nextStep);
        document.getElementById('continue-6').addEventListener('click', nextStep);
        document.getElementById('continue-7').addEventListener('click', nextStep);
        document.getElementById('continue-8').addEventListener('click', nextStep);
        document.getElementById('continue-9').addEventListener('click', nextStep);
        document.getElementById('continue-10').addEventListener('click', nextStep);
        document.getElementById('continue-11').addEventListener('click', nextStep);
    </script>
</body>
