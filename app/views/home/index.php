<div class="bg-[#FCF1E6] pt-[20px] pb-[69px] min-h-screen ">
    <div class="md:flex text-[#D4988B] items-end w-full px-4 sm:px-6 lg:px-8 flex-wrap hidden ">
        <!-- Navbar Start -->
        <div class="flex-grow bg-white navbar-start">
            <div class="flex justify-start items-center space-x-0 sm:space-x-4 md:space-x-2 lg:space-x-6 bg-[#FCF1E6] rounded-br-3xl py-5"
                id="navbar">
                <p class=" font-extrabold lg:pr-10 text-xl mr-2">Siaga Bunda</p>
                <!-- Home -->

                <a href="<?= BASEURL ?>home"
                    class="md:px-3 text-[#D4988B] text-center rounded-full md:rounded-2xl lg:rounded-3xl sm:px-2 py-2 hover:bg-white hover:text-[#4D5A32] transition-all duration-300 font-medium">
                    <p class="hidden md:block lg:font-bold">Home</p>
                </a>

                <!-- Kalkulator -->
                <a href="<?= BASEURL ?>Kalkulator"
                    class="md:px-3 text-[#D4988B] py-2 text-center rounded-full md:rounded-2xl lg:rounded-3xl hover:bg-white hover:text-[#4D5A32] font-medium">
                    <p class="hidden md:block lg:font-bold">Kalkulator</p>
                </a>

                <!-- Komunitas -->
                <a href="<?= BASEURL ?>komunitas"
                    class="md:px-3 py-2 text-[#D4988B] text-center rounded-full md:rounded-2xl lg:rounded-3xl hover:bg-white hover:text-[#4D5A32] font-medium">
                    <p class="hidden md:block lg:font-bold">Komunitas</p>
                </a>

                <!-- Artikel -->
                <a href="<?= BASEURL ?>artikel"
                    class="md:px-3 py-2 text-[#D4988B] text-center rounded-full md:rounded-2xl lg:rounded-3xl hover:bg-white hover:text-[#4D5A32] font-medium">
                    <p class="hidden md:block lg:font-bold">Artikel</p>
                </a>
            </div>
        </div>

        <!-- User Greeting -->
        <div class="relative bg-white px-6 items-center rounded-t-[35px] py-5 ">
            <div class="flex items-center bg-white space-x-2 md:space-x-1  justify-center sm:justify-end"
                id="dropdown-btn">
                <div
                    class=" bg-[#585858] text-white rounded-full py-3 px-3 flex space-x-3 items-center hover:cursor-pointer ">
                    <i class="fa-solid fa-user"></i>
                </div>
                <p class="md:font-bold md:text-sm text-gray-700 hover:cursor-pointer">Username Aja ya</p>
                <label class="px-0  bg-white shadow-none border-none swap swap-rotate hover:cursor-pointer pt-1">
                    <!-- this hidden checkbox controls the state -->
                    <input type="checkbox" class="hidden" id="dropdown-icon" disabled />

                    <!-- hamburger icon -->
                    <i class="fa-solid fa-chevron-down text-gray-700 swap-off fill-current"></i>
                    <!-- close icon -->
                    <i class="fa-solid fa-chevron-up text-gray-700 swap-on fill-current"></i>
                </label>
            </div>
            <ul class="rounded-box bg-white  z-[2]  w-52 py-4 p-2 shadow absolute top-[90%] right-4 hidden"
                id="dropdown-menu">
                <li class="px-2 hover:cursor-pointer">
                    <a class="flex justify-between font-semibold hover:bg-gray-200 rounded-lg py-2 px-3 text-gray-700 items-center"
                        href="<?= BASEURL ?>home/profil">
                        <p>Profil Akun</p>
                        <i class="fa-solid fa-gear text-lg"></i>
                    </a>
                </li>
                <li class="px-2 hover:cursor-pointer">
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
    <div class="flex items-center bg-[#fffefe] rounded-full p-3 flex-grow justify-between  mx-4 my-5 md:hidden"
        id="navbar">
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
                <li class="px-2 hover:cursor-pointer">
                    <a
                        class="flex justify-between font-semibold hover:bg-gray-200 rounded-lg py-2 px-3 text-red-500 items-center">
                        <p>Keluar</p>
                        <i class="fa-solid fa-arrow-right-from-bracket"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="bg-white mx-4 sm:p-6 lg:p-8 rounded-3xl shadow p-6 pt-2">
        <div class="flex justify items-center mt-10 relatif">
            <img src="img/ikon.png" alt="">
            <span>
                <h1 class="font-bold text-3xl text-[#D4988B]">Selamat Datang Bunda!</h1>
                <br>
                <p class="text-black pr-4">Platform yang dirancang khusus untuk mendukung kesehatan para bapak hamil.
                    Kami memahami bahwa masa
                    kehamilan adalah perjalanan yang istimewa, namun juga penuh tantangan.</p>
            </span>
        </div>
        <br><br><br>
        <div class="content2">
            <img src="<?= BASEURL ?>/img/ibuBayi.png" width="100%" alt="">
        </div>
        <p class="font-semibold text-grey text-right mt- mr-4 px-4 pt-4 text-xl ml-auto w-max">Jelajahi setiap fitur
            pada Siaga Bunda</p>
        <div
            class="font-bold text-[#677D85] text-right mt-4 mr-4 px-4 pb-4 text-3xl hover:text-gray-300 transition-all duration-300 ml-auto w-max">
            <a href="<?= BASEURL ?>signUp">
                <button class="ml-auto block">
                    Jelajahi Sekarang
                </button>
            </a>
        </div>
    </div>