<body class="bg-[#C1CFA1] flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded-2xl shadow-lg w-full max-w-lg">

         <!-- Logo -->
         <div class="flex justify-center mb-4">
            <img src="<?= BASEURL ?>/img/logo.png" alt="SIAGA BUNDA" class="w-20 h-15">
        </div>
        
        <!-- Judul Formulir -->
        <h2 class="text-center text-2xl font- font-bold text-[#4D5A32] mb-6">Pendataan Mingguan</h2>

        <!-- Form -->
        <form method="POST" action="<?=BASEURL?>tracking/input" class="space-y-4">
            <!-- Container untuk Berat dan Tinggi Badan -->
            <div class="bg-gray-100 p-4 rounded-lg mb-4">
                <div class="mb-4">
                    <label for="berat_badan" class="block text-sm font-semibold text-gray-700">Berat Badan (Kg):</label>
                    <input type="number" id="berat_badan" name="berat_badan" placeholder="Isi Berat Anda..."
                        class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:border-[#4D5A32] focus:ring-[#4D5A32]">
                </div>

                <div class="mb-4">
                    <label for="tinggi_badan" class="block text-sm font-semibold text-gray-700">Tinggi Badan (cm):</label>
                    <input type="number" id="tinggi_badan" name="tinggi_badan" placeholder="Isi Tinggi Anda..."
                        class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:border-[#4D5A32] focus:ring-[#4D5A32]">
                </div>
            </div>

            <!-- Container untuk Simptom-simptom -->
            <div class="bg-gray-100 p-4 rounded-lg">
                <fieldset>
                    <legend class="text-sm font-semibold text-gray-700 mb-2">Simptom-simptom:</legend>
                    <div class="grid grid-cols-2 gap-4">
                        <!-- Daftar Simptom dengan Checkbox -->
                        <div>
                            <label class="flex items-center space-x-2">
                                <input type="checkbox" name="inputGejala[]" value="RISIKO TB"
                                    class="h-4 w-4 text-green-600 border-gray-300 focus:ring-[#4D5A32]">
                                <span>Risiko TB</span>
                            </label>
                        </div>
                        <div>
                            <label class="flex items-center space-x-2">
                                <input type="checkbox" name="inputGejala[]" value="Nyeri Perut"
                                    class="h-4 w-4 text-green-600 border-gray-300 focus:ring-[#4D5A32]">
                                <span>Nyeri Perut</span>
                            </label>
                        </div>
                        <div>
                            <label class="flex items-center space-x-2">
                                <input type="checkbox" name="inputGejala[]" value="Gerakan Janin"
                                    class="h-4 w-4 text-green-600 border-gray-300 focus:ring-[#4D5A32]">
                                <span>Gerakan Janin</span>
                            </label>
                        </div>
                        <div>
                            <label class="flex items-center space-x-2">
                                <input type="checkbox" name="inputGejala[]" value="Keluar Cairan"
                                    class="h-4 w-4 text-green-600 border-gray-300 focus:ring-[#4D5A32]">
                                <span>Keluar Cairan</span>
                            </label>
                        </div>
                        <div>
                            <label class="flex items-center space-x-2">
                                <input type="checkbox" name="inputGejala[]" value="Sakit Urine"
                                    class="h-4 w-4 text-green-600 border-gray-300 focus:ring-[#4D5A32]">
                                <span>Sakit Urine</span>
                            </label>
                        </div>
                        <div>
                            <label class="flex items-center space-x-2">
                                <input type="checkbox" name="inputGejala[]" value="Diare Berulang"
                                    class="h-4 w-4 text-green-600 border-gray-300 focus:ring-[#4D5A32]">
                                <span>Diare Berulang</span>
                            </label>
                        </div>
                    </div>
                </fieldset>
            </div>

            <!-- Submit Button -->
            <div class="flex justify-center">
                <button type="submit"
                    class="mt-4 bg-[#4D5A32] text-white px-4 py-2 rounded-lg hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-[#C1CFA1] focus:ring-offset-2">
                    Submit
                </button>
            </div>
        </form>
    </div>
</body>
