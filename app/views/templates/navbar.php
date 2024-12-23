<!-- NAVBAR FOR LG VIEW -->
<div class="md:flex text-[#D4988B] items-end w-full px-4 sm:px-6 lg:px-8 flex-wrap hidden ">
    <!-- Navbar Start -->
    <div class="flex-grow bg-white navbar-start">
        <div class="flex justify-start items-center space-x-0 sm:space-x-4 md:space-x-2 lg:space-x-6 bg-[#FCF1E6] rounded-br-3xl py-5"
            id="navbar">
            <p class=" font-extrabold lg:pr-10 text-xl mr-2">Siaga Bunda</p>
            <!-- Home -->

            <a href="<?= BASEURL ?>home"
                class="md:px-3 text-[#D4988B] text-center rounded-full md:rounded-2xl lg:rounded-3xl sm:px-2 py-2 hover:bg-white hover:text-gray-700 transition-all duration-300 font-medium">
                <p class="hidden md:block lg:font-bold">Home</p>
            </a>

            <!-- Kalkulator -->
            <a href="<?= BASEURL ?>Kalkulator"
                class="md:px-3 text-[#D4988B] py-2 text-center rounded-full md:rounded-2xl lg:rounded-3xl hover:bg-white hover:text-gray-700 font-medium">
                <p class="hidden md:block lg:font-bold">Kalkulator</p>
            </a>

            <!-- Komunitas -->
            <a href="<?= BASEURL ?>komunitas"
                class="md:px-3 py-2 text-[#D4988B] text-center rounded-full md:rounded-2xl lg:rounded-3xl hover:bg-white hover:text-gray-700 font-medium">
                <p class="hidden md:block lg:font-bold">Komunitas</p>
            </a>

            <!-- Artikel -->
            <a href="<?= BASEURL ?>artikel"
                class="md:px-3 py-2 text-[#D4988B] text-center rounded-full md:rounded-2xl lg:rounded-3xl hover:bg-white hover:text-gray-700 font-medium">
                <p class="hidden md:block lg:font-bold">Artikel</p>
            </a>
        </div>
    </div>

    <!-- User Greeting -->
    <div class="relative bg-white px-6 items-center rounded-t-[35px] py-5 ">
        <div class="flex items-center bg-white space-x-2 md:space-x-1  justify-center sm:justify-end" id="dropdown-btn">
            <div
                class=" bg-[#585858] text-white rounded-full py-3 px-3 flex space-x-3 items-center hover:cursor-pointer ">
                <i class="fa-solid fa-user"></i>
            </div>
            <p class="md:font-bold md:text-sm text-gray-700 hover:cursor-pointer">
                <?= strlen($_SESSION['username']) > 10 ? substr($_SESSION['username'], 0, 10) . '...' : $_SESSION['username'] ?>
            </p>
            <label class="px-0  bg-white shadow-none border-none swap swap-rotate hover:cursor-pointer pt-1">
                <!-- this hidden checkbox controls the state -->
                <input type="checkbox" class="hidden" id="dropdown-icon" disabled />

                <!-- hamburger icon -->
                <i class="fa-solid fa-chevron-down text-gray-700 swap-off fill-current"></i>
                <!-- close icon -->
                <i class="fa-solid fa-chevron-up text-gray-700 swap-on fill-current"></i>
            </label>
        </div>
        <ul class="rounded-box bg-white  z-[2]  w-52 py-4 p-2 z-50 shadow absolute top-[90%] right-4 hidden"
            id="dropdown-menu">
            <li class="px-2 hover:cursor-pointer">
                <a class="flex justify-between font-semibold hover:bg-gray-200 rounded-lg py-2 px-3 text-gray-700 items-center"
                    href="<?= BASEURL ?>home/profil">
                    <p>Profil Akun</p>
                    <i class="fa-solid fa-gear text-lg"></i>
                </a>
            </li>
            <li class="px-2 hover:cursor-pointer" id="logout-btn">
                <a
                    class="flex justify-between font-semibold hover:bg-gray-200 rounded-lg py-2 px-3 text-red-500 items-center">
                    <p>Keluar</p>
                    <i class="fa-solid fa-arrow-right-from-bracket"></i>
                </a>
            </li>
        </ul>
    </div>
</div>


<!-- NAVBAR FOR SMALL VIEW -->
<div class="flex items-center bg-[#fffefe] rounded-full p-3 flex-grow justify-between  mx-4 my-5 md:hidden" id="navbar">
    <a class=" text-[#D4988B] rounded-full py-2 px-3 flex space-x-3 items-center hover:text-white hover:bg-[#D4988B]"
        href="<?= BASEURL ?>Home">
        <i class="fa-solid fa-house text-base"></i>
        <p class="hidden sm:block">Home</p>
    </a>

    <a class="text-[#D4988B] rounded-full py-2 px-4 flex space-x-3 items-center hover:text-white hover:bg-[#D4988B]"
        href="<?= BASEURL ?>Kalkulator">
        <i class="fa-solid fa-calculator text-xl"></i>
        <p class="hidden sm:block">Kalkulator</p>
    </a>

    <a class="text-[#D4988B] rounded-full py-2 px-3 flex space-x-3 items-center hover:text-white hover:bg-[#D4988B]"
        href="<?= BASEURL ?>Komunitas">
        <i class="fa-solid fa-comments text-xl"></i>
        <p class="hidden sm:block">Komunitas</p>
    </a>

    <a class="text-[#D4988B] rounded-full py-2 px-3 flex space-x-3 items-center hover:text-white hover:bg-[#D4988B]"
        href="<?= BASEURL ?>Artikel">
        <i class="fa-regular fa-newspaper text-xl"></i>
        <p class="hidden sm:block">Artikel</p>
    </a>

    <div class=" bg-[#585858] text-white rounded-full py-3 px-3 flex space-x-3 items-center relative"
        id="sm-dropdown-btn">
        <i class="fa-solid fa-user"></i>
        <ul class="rounded-box bg-white  z-[2]  w-52 py-4 p-2 shadow absolute top-[150%] right-0 hidden"
            id="sm-dropdown-menu">
            <li class="px-2 hover:cursor-pointer">
                <a class="flex justify-between font-semibold hover:bg-gray-200 rounded-lg py-2 px-3 text-gray-700 items-center"
                    href="<?= BASEURL ?>home/profil">
                    <p>Profil Akun</p>
                    <i class="fa-solid fa-gear text-lg"></i>
                </a>
            </li>
            <li class="px-2 hover:cursor-pointer" id="sm-logout-btn">
                <a
                    class="flex justify-between font-semibold hover:bg-gray-200 rounded-lg py-2 px-3 text-red-500 items-center">
                    <p>Keluar</p>
                    <i class="fa-solid fa-arrow-right-from-bracket"></i>
                </a>
            </li>
        </ul>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    $(document).ready(() => {
        let activeText = $(document).find("title").text(); // Teks yang dicocokkan
        $('#navbar a').each(function () {
            if ($(this).text().trim() === activeText) {
                $(this).attr("id", "active-nav");
                $(this).children('p').removeClass('hidden');
            }
        });
    });
    $('#dropdown-btn').on('click', () => {
        $('#dropdown-menu ')
        const isChecked = $('#dropdown-icon').prop('checked');
        $('#dropdown-icon').prop('checked', !isChecked);
        $('#dropdown-menu').toggleClass('hidden');

    })
    $('#sm-dropdown-btn').on('click', () => {
        $('#dropdown-menu ')
        $('#sm-dropdown-menu').toggleClass('hidden');
    })

    $(window).on('click', (e) => {
        if (
            !$(e.target).closest('#sm-dropdown-btn').length &&
            !$(e.target).closest('#dropdown-btn').length &&
            !$(e.target).closest('#sm-dropdown-menu').length &&
            !$(e.target).closest('#dropdown-menu').length
        ) {
            $('#sm-dropdown-menu').addClass('hidden');
            $('#dropdown-menu').addClass('hidden');
            $('#dropdown-icon').prop('checked', false);
        }
    });
    $('#sm-logout-btn, #logout-btn').on('click', () => {
        // Try me!
        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: "btn bg-red-600 text-white mx-5",
                cancelButton: "btn bg-green-400 text-white mx-5"
            },
            buttonsStyling: false
        });
        swalWithBootstrapButtons.fire({
            title: "Yakin ingin keluar?",
            text: "Semua sesi Anda akan berakhir, dan Anda perlu login kembali untuk mengakses aplikasi.",
            icon: "warning",
            padding: "2em",
            showCancelButton: true,
            confirmButtonText: "Ya, keluar",
            cancelButtonText: "Batal",
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: "POST",
                    url: '<?= BASEURL ?>signOut',
                    success: function () {
                        location.reload();
                    }
                });
            }
        });

    });

</script>