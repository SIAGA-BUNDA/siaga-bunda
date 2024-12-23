<body class="bg-[#FCF1E6] flex items-center justify-center min-h-screen lg:!h-screen p-8">
    <div class="bg-white p-3 rounded-xl w-full h-full flex flex-col justify-center relative">
        <!-- Form -->
        <form method="POST" class="h-full flex flex-col items-center p-5 space-y-3 mb-10 relative pt-10" id="form">

            <!-- Header Form -->
            <div class="flex justify-between w-full absolute top-10 px-10">
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
                <label for="email" class="ml-1 block text-base md:text-lg font-semibold text-[#0B2027]">Email</label>
                <input name="email" type="text" id="email"
                    class="mt-1 block w-full px-3 py-2 border rounded-lg text-sm md:text-base text-[#696969] !bg-[#ECEBEB] !border-[#ECEBEB]"
                    value="<?= $data['email'] ?>" disabled>
            </div>

            <!-- Password -->
            <div class="w-full lg:!w-1/2 2xl:!w-1/3">
                <label for="password"
                    class="ml-1 block text-base md:text-lg font-semibold text-[#0B2027]">Password</label>
                <a href="" class="btn btn-neutral text-sm md:text-base">Ubah Password</a>
            </div>

            <!-- Nama -->
            <div class="w-full lg:!w-1/2 2xl:!w-1/3">
                <label for="nama" class="ml-1 block text-base md:text-lg font-semibold text-[#0B2027]">Nama</label>
                <input name="NAMA" type="text" id="nama"
                    class="mt-1 block w-full px-3 py-2 border rounded-lg text-sm md:text-base text-[#696969] focus:text-[#0B2027] bg-[#ECEBEB] border-[#7F7C7C] focus:font-medium"
                    value="<?= $data['nama'] ?>">
            </div>

            <!-- No telp -->
            <div class="w-full lg:!w-1/2 2xl:!w-1/3">
                <label for="No_Telepon"
                    class="ml-1 block text-base md:text-lg font-semibold text-[#0B2027]">No.Telepon</label>
                <input name="NO_TELEPON" type="text" id="no_telepon"
                    class="mt-1 block w-full px-3 py-2 border rounded-lg text-sm md:text-base text-[#696969] focus:text-[#0B2027] bg-[#ECEBEB] border-[#7F7C7C] focus:font-medium"
                    value="<?= $data['no_telepon'] ?>">
            </div>

            <!-- LMP dan Berat Badan -->
            <div
                class="w-full lg:!w-1/2 2xl:!w-1/3 flex space-y-3 sm:space-y-0 sm:space-x-5 flex-col items-center sm:flex-row">
                <div class="w-full sm:w-1/2">
                    <label for="LMP" class="ml-1 block text-base md:text-lg font-semibold text-[#0B2027]">LMP</label>
                    <input name="LMP" type="date" id="lmp"
                        class="mt-1 block w-full px-3 py-2 border rounded-lg text-sm md:text-base text-[#696969] focus:text-[#0B2027] bg-[#ECEBEB] border-[#7F7C7C] focus:font-medium"
                        value="<?= $data['lmp'] ?>">
                </div>
                <div class="w-full sm:w-1/2">
                    <label for="berat-badan" class="ml-1 block text-base md:text-lg font-semibold text-[#0B2027]">Berat
                        Badan</label>
                    <input name="PRA_BERAT" type="text" id="berat-badan"
                        class="mt-1 block w-full px-3 py-2 border rounded-lg text-sm md:text-base text-[#696969] focus:text-[#0B2027] bg-[#ECEBEB] border-[#7F7C7C] focus:font-medium "
                        value="<?= $data['berat'] ?>">
                </div>
            </div>

            <!-- Tanggal Lahir dan Tinggi Badan -->
            <div
                class="w-full lg:!w-1/2 2xl:!w-1/3 flex space-y-3 sm:space-y-0 sm:space-x-5 flex-col items-center sm:flex-row">
                <div class="w-full sm:w-1/2">
                    <label for="tanggal-lahir"
                        class="ml-1 block text-base md:text-lg font-semibold text-[#0B2027]">Tanggal Lahir</label>
                    <input name="TANGGAL_LAHIR" type="date" id="tanggal-lahir"
                        class="mt-1 block w-full px-3 py-2 border rounded-lg text-sm md:text-base  text-[#696969] focus:text-[#0B2027] bg-[#ECEBEB] border-[#7F7C7C] focus:font-medium"
                        value="<?= $data['tanggal_lahir'] ?>">

                </div>
                <div class="w-full sm:w-1/2">
                    <label for="TINGGI_BADAN"
                        class="ml-1 block text-base md:text-lg font-semibold text-[#0B2027]">Tinggi Badan Pra
                        Hamil</label>
                    <input name="TINGGI_BADAN" type="text" id="tinggi-badan"
                        class="mt-1 block w-full px-3 py-2 border rounded-lg text-sm md:text-base text-[#696969] focus:text-[#0B2027] bg-[#ECEBEB] border-[#7F7C7C] focus:font-medium"
                        value="<?= $data['tinggi'] ?>">
                </div>
            </div>

            <!-- Simpan Button -->
            <div class="w-full lg:!w-1/2 2xl:!w-1/3 flex justify-end">
                <button class="btn btn-neutral text-sm md:text-base lg:text-lg btn-disabled" id="submit-btn">
                    Simpan
                </button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        // JavaScript to handle the step transitions
        $("input").on('focus', (e) => {
            const value = $(e.target).val();
            $(e.target).on('keyup change', function () {
                console.log(value)
                if ($(e.target).val().trim() != "" && $(e.target).val() != value) {
                    $('#submit-btn').removeClass("btn-disabled");
                } else {
                    $('#submit-btn').addClass("btn-disabled");
                }
            })
        })

        $("#submit-btn").on('click', (e) => {
            e.preventDefault();
            const swalButton = Swal.mixin({
                customClass: {
                    confirmButton: "!btn !btn-success !text-white ml-10 w-32",
                    cancelButton: "!btn !btn-error !text-white mr-10 w-32"
                },
                buttonsStyling: false
            });
            swalButton.fire({
                title: "Simpan perubahan",
                text: "Apakah Anda ingin menyimpan perubahan profil Anda?",
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
        });
    </script>
</body>