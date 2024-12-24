    <body class="bg-[#FCF1E6] pt-[20px] pb-[69px] min-h-screen">
    <?php require_once('../app/views/templates/' . (isset($_SESSION['user']) ? 'navbar.php' : 'navbarUser.php')) ?>

    <div class="mx-4 sm:mx-6 lg:!mx-8 p-4 sm:p-6 lg:px-8 rounded-[35px] md:rounded-tr-none bg-white">
        <h1 class="text-center text-3xl font-bold text-gray-700">Pregnancy Due Date Calculator</h1>
        <div class="flex gap-10 justify-center p-8">
            <!-- LMP -->
            <a href="<?= BASEURL ?>kalkulator/index.php">
                <button
                    class="relative flex items-center justify-center w-32 h-12 bg-[#D4988B] rounded-2xl shadow-sm transform transition duration-300 hover:scale-110 hover:shadow-xl hover:bg-[#be7766] cursor-pointer">
                    <span class="text-white text-lg font-semibold">LMP</span>
                </button>
            </a>
            <!-- Ultrasound -->
            <a href="<?= BASEURL ?>kalkulator/ultrasound">
                <button
                    class="relative flex items-center justify-center w-32 h-12 bg-[#D4988B] rounded-2xl shadow-sm transform transition duration-300 hover:scale-110 hover:shadow-xl hover:bg-[#be7766] cursor-pointer">
                    <span class="text-white text-lg font-semibold">Ultrasound</span>
                </button>
            </a>
        </div>
        <div class="border-t-4 border-[#D4988B] my-4"></div>

        <!-- input tanggal -->
        <div class="flex flex-col items-center">
            <label for="date" class="mb-2 text-lg font-medium text-gray-700">
                LMP Date:
            </label>
            <input type="date" id="date"
                class="border-2 border-[#D4988B] rounded-xl px-4 py-2 w-1/3 h-16 focus:outline-none focus:ring-2 focus:ring-[#D4988B] focus:border-[#D4988B] text-gray-700"
                placeholder="mm/dd/yyyy">
        </div>

        <!-- calculate -->
        <div class="flex justify-center my-8">
            <button id="calculateButton"
                class="relative flex items-center justify-center w-32 h-12 bg-gray-700 text-white rounded-2xl shadow-sm transform transition duration-300 hover:scale-110 hover:shadow-xl hover:bg-black cursor-pointer">
                <span class="text-white text-lg font-semibold">Calculate</span>
            </button>
        </div>

        <!-- output kalkulasi -->
        <div class="space-y-6 py-8">
            <!-- Gestational Age -->
            <div class="flex justify-between p-4 items-center border-2 rounded-xl">
                <label for="gestational-age" class="text-[#D4988B] font-bold">
                    Gestational Age:
                </label>
                <span id="gestational-age" class="text-gray-500 font-medium">(Weeks)</span>
            </div>
            <!-- Estimated Due Date -->
            <div class="flex justify-between p-4 items-center border-2 rounded-xl">
                <label for="due-date" class="text-[#D4988B] font-bold">
                    Estimated Due Date:
                </label>
                <span id="due-date" class="text-gray-500 font-medium">(mm/dd/yyyy)</span>
            </div>
            <!-- End of First Trimester -->
            <div class="flex justify-between p-4 items-center border-2 rounded-xl">
                <label for="end-first-trimester" class="text-[#D4988B] font-bold">
                    End of First Trimester:
                </label>
                <span id="end-first-trimester" class="text-gray-500 font-medium">(mm/dd/yyyy)</span>
            </div>
            <!-- Beginning of Third Trimester -->
            <div class="flex justify-between p-4 items-center border-2 rounded-xl">
                <label for="begin-third-trimester" class="text-[#D4988B] font-bold">
                    Beginning of Third Trimester:
                </label>
                <span id="begin-third-trimester" class="text-gray-500 font-medium">(mm/dd/yyyy)</span>
            </div>
        </div>
    </div>
    <script>
        document.getElementById('calculateButton').addEventListener('click', function () {
            // Ambil tanggal LMP dari input
            let lmpDate = document.getElementById('date').value;
            if (!lmpDate) {
                alert('Please enter a valid LMP date.');
                return;
            }

            // Konversi LMP menjadi tanggal JavaScript
            let lmp = new Date(lmpDate);
            let today = new Date();

            // Tambahkan 280 hari (40 minggu) untuk Estimated Due Date (EDD)
            let dueDate = new Date(lmp);
            dueDate.setDate(lmp.getDate() + 280);

            // Hitung usia kehamilan (gestational age) dalam hari dan minggu
            let gestationalAgeInDays = Math.floor((today - lmp) / (1000 * 60 * 60 * 24));
            let gestationalAgeInWeeks = Math.floor(gestationalAgeInDays / 7);

            // Hitung akhir trimester pertama (12 minggu)
            let endOfFirstTrimester = new Date(lmp);
            endOfFirstTrimester.setDate(lmp.getDate() + (12 * 7));

            // Hitung awal trimester ketiga (28 minggu)
            let beginOfThirdTrimester = new Date(lmp);
            beginOfThirdTrimester.setDate(lmp.getDate() + (28 * 7));

            // Menampilkan hasil perhitungan ke elemen HTML
            document.getElementById('gestational-age').textContent = `${gestationalAgeInWeeks} Weeks (${gestationalAgeInDays} Days)`;
            document.getElementById('due-date').textContent = dueDate.toLocaleDateString();
            document.getElementById('end-first-trimester').textContent = endOfFirstTrimester.toLocaleDateString();
            document.getElementById('begin-third-trimester').textContent = beginOfThirdTrimester.toLocaleDateString();
        });
    </script>
</body>