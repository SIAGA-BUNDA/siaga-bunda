<body class="bg-[#FCF1E6] w-screen h-screen p-10">
    <div class="bg-white p-8 min-h-[calc(100vh-5rem)] rounded-xl relative">
        <div class="flex gap-1 ">
            <?php for ($i = 1; $i <= 11; $i++) { ?>
                <progress class="progress pink-progress progress-<?= $i ?> sm:h-[3px] lg:h-[5px]  lg:w-25" value="0"
                    max="100"></progress>
            <?php } ?>
        </div>

        <div class="flex justify-between pt-8">
            <div class="flex text-[#bebebe] justify-center gap-3 hover  hover:text-[#919191] prev cursor-pointer">
                <i class="fa-solid fa-arrow-left mt-1"></i>
                <h2>Kembali</h2>
            </div>
            <img src="<?= BASEURL ?>/img/logo.png" alt="SIAGA BUNDA" class="w-10  md:w-15 md: h-15lg:w-20 lg:h-15">
        </div>
        <!-- Form -->
        <form method="POST" class="sm:mt-[10%] mt-[20%]" id="form">


            <!-- Step 1: Berat Badan -->
            <div id="step-1" class="step grow ">
                <div class="flex flex-col justify-center text-center gap-3 items-center h-full">
                    <h1 class="text-[#919191] btn-opt font-bold lg:text-xl">Pertanyaan 1/11</h1>
                    <h1 class="text-[#616465] btn-opt font-bold lg:text-3xl">Berapa Berat Badan Bunda Saat ini?</h1>
                    <input type="number" min="0" id="PRA_BERAT" name="berat_badan"
                        placeholder="Masukkan Berat Badan Anda..."
                        class="mt-10 px-4 py-2 border w-full sm:!w-1/2 lg:!w-[30%] border-gray-300 rounded-lg shadow-sm focus:!outline-none focus:!border-[#828381] focus:!ring-[#828381] text-center">
                </div>
                <label
                    class="btn bg-[#D4988B] hover:bg-[#d18270] btn-disabled text-white !rounded-3xl absolute right-20 bottom-8 continue">
                    <h2>Selanjutnya</h2>
                    <i class="fa-solid fa-arrow-right mt-1"></i>
                </label>
            </div>

            <?php foreach ($data['pertanyaan'] as $key => $value) { ?>
                <div id="step-<?= $key ?>" class="step grow hidden">
                    <div class="flex flex-col justify-center text-center gap-3 items-center h-full">
                        <h1 class="text-[#919191] btn-opt font-bold lg:text-xl">Pertanyaan <?= $key ?>/11</h1>
                        <h1 class="text-[#616465] btn-opt font-bold lg:text-3xl"><?= $value[0] ?></h1>
                        <div class="flex flex-col sm:flex-row w-full items-center justify-center gap-5 sm:gap-10 mt-10">
                            <!-- Radio buttons (hidden) -->
                            <input type="radio" id="tidak-ada-<?=$key?>" name ="<?= $value[3] ?>" class="hidden">
                            <input type="radio" id="ada-<?=$key?>" name="<?= $value[3] ?>" value="<?= $value[3] ?>" class="hidden">

                            <!-- Labels untuk toggle -->
                            <label for="tidak-ada-<?=$key?>" id="label-tidak-ada"
                                class="btn btn-opt font-bold text-[#616465] px-4 py-2 border rounded-lg bg-gray-200 hover:bg-gray-300 focus:outline-none w-[8rem] sm:w-[10rem] md:w-[15rem] xl:w-[20rem]">
                                <?= $value[1] ?>
                            </label>
                            <label for="ada-<?=$key?>" id="label-ada"
                                class="btn btn-opt font-bold text-[#616465] px-4 py-2 border rounded-lg bg-gray-200 hover:bg-gray-300 focus:outline-none w-[8rem] sm:w-[10rem] md:w-[15rem] xl:w-[20rem]">
                                <?= $value[2] ?>
                            </label>
                        </div>
                    </div>
                    <div class="flex">

                    </div>
                    <?php if ($key != count($data['pertanyaan']) + 1) { ?>
                        <label
                            class="btn bg-[#D4988B] hover:bg-[#d18270] text-white !rounded-3xl absolute right-20 bottom-8 continue btn-disabled">
                            <h2>Selanjutnya</h2>
                            <i class="fa-solid fa-arrow-right mt-1"></i>
                        </label>
                    <?php } else { ?>
                        <label
                            class="btn bg-[#D4988B] hover:bg-[#d18270] text-white !rounded-3xl absolute right-20 bottom-8 continue btn-disabled">
                            <i class="fa-solid fa-floppy-disk lg:text-lg"></i>
                            <h2>Simpan</h2>
                        </label>
                    <?php } ?>
                </div>
            <?php } ?>
        </form>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        // JavaScript to handle the step transitions
        let currentStep = 1;

        function previousStep() {
            document.getElementById(`step-${currentStep}`).classList.add('hidden');
            currentStep--;
            console.log(currentStep)
            if (currentStep >= 1) {
                document.getElementById(`step-${currentStep}`).classList.remove('hidden');
            } else {
                window.location.href = `<?= BASEURL ?>home`
            }
        }
        // Function to move to the next step
        function nextStep() {

            currentStep++;
            if (currentStep <= 11) {
                $(`#step-${currentStep - 1}`).addClass('hidden');
                document.getElementById(`step-${currentStep}`).classList.remove('hidden');
                $(`.progress-${currentStep - 1}`).val(100);

            } else {
                currentStep--;
                $(`.progress-${currentStep}`).val(100);
                const swalButton = Swal.mixin({
                    customClass: {
                        confirmButton: "!btn !btn-success !text-white ml-10 w-32",
                        cancelButton: "!btn !btn-error !text-white mr-10 w-32"
                    },
                    buttonsStyling: false
                });
                swalButton.fire({
                    title: "Simpan data mingguan",
                    text: "Apakah Anda ingin menyimpan data mingguan Anda?",
                    showCancelButton: true,
                    confirmButtonText: "Simpan",
                    cancelButtonText: "Batal",
                    reverseButtons: true,
                }).then((result) => {
                    /* Read more about isConfirmed, isDenied below */
                    if (result.isConfirmed) {
                        $(`#form`).submit();
                        Swal.fire("Berhasil Disimpan", "", "success");
                    }
                });
            }
            console.log(currentStep)
        }

        // Event listeners for continue buttons
        $('#form').on('keydown', function (e) {
            if (e.key === 'Enter') {
                e.preventDefault();
                if ($('#PRA_BERAT').val().trim() != "") {
                    nextStep();
                }
            }
        });
        $('.prev').on('click', previousStep);
        $('.continue').on('click', nextStep);
        $('.btn-opt').on('click', function () {
            const step = $(this).closest('.step')
            $(this).addClass('btn-disabled').siblings().removeClass('btn-disabled');
            step.find('.continue').removeClass('btn-disabled');
        })

        $('#PRA_BERAT').keyup(function () {
            const step = $(this).closest('.step');
            if (this.value.trim() != "") {
                step.find('.continue').removeClass("btn-disabled");
            } else {
                step.find('.continue').addClass("btn-disabled");
            }
        })
    </script>
</body>