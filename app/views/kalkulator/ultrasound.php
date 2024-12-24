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
                Ultrasound Date:
            </label>
            <input type="date" id="date"
                class="border-2 border-[#D4988B] rounded-xl px-4 py-2 w-1/3 h-16 focus:outline-none focus:ring-2 focus:ring-[#D4988B] focus:border-[#D4988B] text-gray-700 placeholder-transparent sm:placeholder-gray-500"
                placeholder="mm/dd/yyyy">
        </div>

        <!-- input weeks & days-->
        <div class="my-8">
            <div class="flex justify-center items-center space-x-4">
                <input type="number" id="weeks"
                    class="border-2 border-[#D4988B] rounded-xl px-4 py-2 w-1/6 h-16 focus:outline-none focus:ring-2 focus:ring-[#D4988B] focus:border-[#D4988B] text-gray-700 placeholder-transparent sm:placeholder-gray-700"
                    placeholder="Weeks">
                <input type="number" id="days"
                    class="border-2 border-[#D4988B] rounded-xl px-4 py-2 w-1/6 h-16 focus:outline-none focus:ring-2 focus:ring-[#D4988B] focus:border-[#D4988B] text-gray-700 placeholder-transparent sm:placeholder-gray-700"
                    placeholder="Days">
            </div>
        </div>

        <!-- calculate -->
        <div class="flex justify-center my-8">
            <button
                class="relative flex items-center justify-center w-32 h-12 bg-gray-700 text-white rounded-2xl shadow-sm transform transition duration-300 hover:scale-110 hover:shadow-xl hover:bg-black cursor-pointer"
                onclick="calculate()">
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
                <label id="gestational-age" class="text-gray-500 font-medium">
                    (Weeks)
                </label>
            </div>
            <!-- Estimates Due Date -->
            <div class="flex justify-between p-4 items-center border-2 rounded-xl">
                <label for="edd" class="text-[#D4988B] font-bold">
                    Estimated Due Date:
                </label>
                <label id="estimated-due-date" class="text-gray-500 font-medium">
                    (mm/dd/yyyy)
                </label>
            </div>
            <!-- End of First Trimester -->
            <div class="flex justify-between p-4 items-center border-2 rounded-xl">
                <label for="eoft" class="text-[#D4988B] font-bold">
                    End of First Trimester:
                </label>
                <label id="end-of-first-trimester" class="text-gray-500 font-medium">
                    (mm/dd/yyyy)
                </label>
            </div>
            <!-- Beginning of Third Trimester -->
            <div class="flex justify-between p-4 items-center border-2 rounded-xl">
                <label for="bott" class="text-[#D4988B] font-bold">
                    Beginning of Third Trimester:
                </label>
                <label id="beginning-of-third-trimester" class="text-gray-500 font-medium">
                    (mm/dd/yyyy)
                </label>
            </div>
        </div>
    </div>

    <script>
        function calculate() {
            // Get values from input fields
            const ultrasoundDate = document.getElementById('date').value;
            const weeks = parseInt(document.getElementById('weeks').value);
            const days = parseInt(document.getElementById('days').value);

            // Validate input
            if (!ultrasoundDate || isNaN(weeks) || isNaN(days)) {
                alert("Please fill in all fields.");
                return;
            }

            // Convert ultrasound date to a Date object
            const ultrasoundDateObj = new Date(ultrasoundDate);

            // Calculate gestational age in days
            const gestationalAgeInDays = (weeks * 7) + days;

            // Estimated Due Date (EDD) = Ultrasound Date + (280 days - Gestational Age in Days)
            const EDD = new Date(ultrasoundDateObj);
            EDD.setDate(ultrasoundDateObj.getDate() + (280 - gestationalAgeInDays));

            // End of First Trimester (12 weeks) = Ultrasound Date + (12 weeks)
            const endOfFirstTrimester = new Date(ultrasoundDateObj);
            endOfFirstTrimester.setDate(ultrasoundDateObj.getDate() + (12 * 7));

            // Beginning of Third Trimester (28 weeks) = Ultrasound Date + (28 weeks)
            const beginningOfThirdTrimester = new Date(ultrasoundDateObj);
            beginningOfThirdTrimester.setDate(ultrasoundDateObj.getDate() + (28 * 7));

            // Display results in the UI
            document.getElementById('gestational-age').innerText = `${weeks} Weeks ${days} Days`;
            document.getElementById('estimated-due-date').innerText = EDD.toLocaleDateString();
            document.getElementById('end-of-first-trimester').innerText = endOfFirstTrimester.toLocaleDateString();
            document.getElementById('beginning-of-third-trimester').innerText = beginningOfThirdTrimester.toLocaleDateString();
        }
    </script>
</body>